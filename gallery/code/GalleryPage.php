<?php
/**
 * GalleryPage.php: Sub-class of Page
 * @created 15/08/2007
 */

class GalleryPage extends Page {
		
	static $db = array(
		'ThumbnailType' => "Enum( array( 'CroppedResize', 'PaddedResize', 'FittedResize', 'Resize', 'ResizeByWidth', 'ResizeByHeight', 'ResizeRatio' ), 'Resize' )",
		'ThumbnailWidth' => 'Int',
		'ThumbnailHeight' => 'Int',
		'NormalType' => "Enum( array( 'OriginalResize', 'CroppedResize', 'PaddedResize', 'FittedResize', 'Resize', 'ResizeByWidth', 'ResizeByHeight', 'ResizeRatio' ), 'Resize' )",
		'NormalWidth' => 'Int',
		'NormalHeight' => 'Int',
		'MediaPerPageLimit' => 'Boolean',
		'MediaPerPage' => 'Int',
		'MediaPerLine' => 'Int',
		'ShowTitle' => 'Boolean',
		'ShowSize' => 'Boolean',
		'ShowImageDimensions' => 'Boolean',
		'SortBy' => "Enum( array( 'Title', 'UploadDateASC', 'UploadDateDESC' ), 'Title' )"
	);
	
	static $has_one = array(
		'Folder' => 'Folder',
		'DefaultIcon' => 'Image'
	);
	
	static $many_many = array(
		'Extensions' => 'GalleryPage_Extension'
	);
	
	static $defaults = array(
		'ThumbnailType' => 'PaddedResize',
		'ThumbnailWidth' => 90,
		'ThumbnailHeight' => 70,
		'NormalType' => 'Resize',
		'NormalWidth' => 500,
		'NormalHeight' => 500,
		'MediaPerPageLimit' => true,
		'MediaPerPage' => 30,
		'MediaPerLine' => 8
	);
	
	function onBeforeWrite() {
		if( $this->ID ) $this->checkFolder();
		parent::onBeforeWrite();
	}
	
	/**
	 * If this page doesn't have a folder, create one for us
	 */
	function checkFolder() {
		if( ! $this->FolderID ) {
			$galleries = Folder::findOrMake('galleries');
			$galleries->Title = 'galleries';
			$galleries->write();
			
			$folder = Folder::findOrMake('galleries/' . $this->URLSegment);
			$folder->Title = $this->Title;
			$folder->write();
			
			$this->FolderID = $folder->ID;
			$this->write();
			FormResponse::add( "\$( 'Form_EditForm' ).getPageFromServer( $this->ID );" );
		}
	}
	
	function onBeforeDelete() {
				
		// Delete The ManyMany Relations
		
		$this->Extensions()->removeAll();
					
		parent::onBeforeDelete();
	}
	
	function write() {
		if( ! $this->ID ) {
			parent::write();
			if( $imagesExtension = DataObject::get_one( 'GalleryPage_Extension', "`Title` = 'Images'" ) )
				$this->Extensions()->add( $imagesExtension );
			else if( $extension = DataObject::get_one( 'GalleryPage_Extension' ) )
				$this->Extensions()->add( $extension );
		}
		else
			parent::write();
	}
	
	public function requireDefaultRecords() {
		parent::requireDefaultRecords();
		
		$exist =  DB::query( "SHOW TABLES LIKE 'FileRepository'" )->numRecords();
 		if( $exist > 0 ) {
 			if( DB::query( 'SELECT * FROM `FileRepository`' ) )
				DB::query( "UPDATE `GalleryPage`, `FileRepository` SET `GalleryPage`.`FolderID` = `FileRepository`.`FolderID` WHERE `GalleryPage`.`ID` = `FileRepository`.`ID`" );
 			DB::query( 'RENAME TABLE `FileRepository` TO `_obsolete_FileRepository`' );
 			echo( "<div style=\"padding:5px; color:white; background-color:blue;\">" . _t('GalleryPage.FILEREPOSITORYTRANSFERRED','The \'FileRepository\' table data content has been transferred successfully. Also, the table has been renamed to \'_obsolete_FileRepository\'.') . "</div>" );
 		}
 		
 		$exist =  DB::query( "SHOW TABLES LIKE 'FileRepository_Live'" )->numRecords();
 		if( $exist > 0 ) {
 			if( DB::query( 'SELECT * FROM `FileRepository_Live`' ) )
				DB::query( "UPDATE `GalleryPage_Live`, `FileRepository_Live` SET `GalleryPage_Live`.`FolderID` = `FileRepository_Live`.`FolderID` WHERE `GalleryPage_Live`.`ID` = `FileRepository_Live`.`ID`" );
 			DB::query( 'RENAME TABLE `FileRepository_Live` TO `_obsolete_FileRepository_Live`' );
 			echo( "<div style=\"padding:5px; color:white; background-color:blue;\">" . _t('GalleryPage.FILEREPOSITORYLIVETRANSFERRED','The \'FileRepository_Live\' table data content has been transferred successfully. Also, the table has been renamed to \'_obsolete_FileRepository_Live\'.') . "</div>" );
 		}
 		
 		$exist =  DB::query( "SHOW TABLES LIKE 'FileRepository_versions'" )->numRecords();
 		if( $exist > 0 ) {
 			DB::query( 'DROP TABLE `FileRepository_versions`' );
 			echo( "<div style=\"padding:5px; color:white; background-color:blue;\">" . _t('GalleryPage.FILEREPOSITORYVERSIONREMOVED','The \'FileRepository_versions\' table has been removed successfully.') . "</div>" );
 		}
	}
	
	function getCMSFields( $cms = null) {
		
		Requirements::javascript( 'gallery/javascript/GalleryPage_CMS.js' );
						
		$fields = parent::getCMSFields( $cms );
		$fields->addFieldToTab( 'Root.Content.Gallery', new HeaderField( _t('GalleryPage.GALLERYLAYOUT','Gallery Layout') ) );
		$fields->addFieldsToTab( 'Root.Content.Gallery', array(
			new CheckboxField( 'MediaPerPageLimit', _t('GalleryPage.MEDIAPERPAGELIMIT','Limit The Number Of Media Files Per Page') ), 
 			new NumericField( 'MediaPerPage', _t('GalleryPage.MEDIAPERPAGE','Media Files Per Page') ), 
 			new NumericField( 'MediaPerLine', _t('GalleryPage.MEDIAPERLINE','Media Files Per Line') ), 
 			new CheckboxField( 'ShowTitle', _t('GalleryPage.SHOWTITLE','Show Media Title')), 
 			new CheckboxField( 'ShowSize', _t('GalleryPage.SHOWSIZE','Show Media Size') ), 
 			new CheckboxField( 'ShowImageDimensions', _t('GalleryPage.SHOWIMAGEDIMENSIONS','Show Media Dimensions') ), 
 			new HeaderField( _t('GalleryPage.IMAGEOPTIONS','Image Options') ), 
 			new DropdownField( 'ThumbnailType', _t('GalleryPage.RESIZINGMETHOD','Resizing Method'), array( 
 				'CroppedResize' => _t('GalleryPage.CROPPEDRESIZE','Cropped Resize'), 
 				'PaddedResize' => _t('GalleryPage.PADDEDRESIZE','Padded Resize'), 
 				'FittedResize' => _t('GalleryPage.FITTEDRESIZE','Fitted Resize'), 
 				'Resize' => _t('GalleryPage.RESIZE','Resize'), 
 				'ResizeByWidth' => _t('GalleryPage.RESIZEBYWIDTH','Resize By Width'), 
 				'ResizeByHeight' => _t('GalleryPage.RESIZEBYHEIGHT','Resize By Height'), 
 				'ResizeRatio' => _t('GalleryPage.RESIZEBYRATIO','Resize By Ratio')
			)),
			new NumericField( 'ThumbnailWidth', _t('GalleryPage.IMAGEWIDTH','Image Width') ),
			new NumericField( 'ThumbnailHeight', _t('GalleryPage.IMAGEHEIGHT','Image Height') )
		) );
		$fields->addFieldToTab( 'Root.Content.Gallery', new HeaderField( _t('GalleryPage.DEFAULTIMAGE','Default Image') ) );
		$fields->addFieldToTab( 'Root.Content.Gallery', new ImageField( 'DefaultIcon', '' ) );
		$fields->addFieldToTab( 'Root.Content.Popup', new HeaderField( _t('GalleryPage.IMAGEOPTIONS') ) );
		$fields->addFieldsToTab( 'Root.Content.Popup', array(
			new DropdownField( 'NormalType', _t('GalleryPage.RESIZINGMETHOD'), array( 
 				'OriginalResize' => _t('GalleryPage.ORIGINALRESIZE','Original Resize'), 
 				'CroppedResize' => _t('GalleryPage.CROPPEDRESIZE'), 
 				'PaddedResize' => _t('GalleryPage.PADDEDRESIZE'), 
 				'FittedResize' => _t('GalleryPage.FITTEDRESIZE'), 
 				'Resize' => _t('GalleryPage.RESIZE'), 
 				'ResizeByWidth' => _t('GalleryPage.RESIZEBYWIDTH'), 
 				'ResizeByHeight' => _t('GalleryPage.RESIZEBYHEIGHT'), 
 				'ResizeRatio' => _t('GalleryPage.RESIZEBYRATIO')
			)),
			new NumericField( 'NormalWidth',  _t('GalleryPage.IMAGEWIDTH') ),
			new NumericField( 'NormalHeight', _t('GalleryPage.IMAGEHEIGHT') )
		));
		
		$folder = new TreeDropdownField( 'FolderID', _t('GalleryPage.SHOWFILESFROM','Show The Files From'), 'Folder' );
		$folder->setFilterFunction( create_function( '$obj', 'return $obj->class == "Folder";' ) );
		$fields->addFieldToTab( 'Root.Content.Files' , $folder );
		$fields->addFieldToTab( 'Root.Content.Files' , new OptionsetField(
			'SortBy',
			_t('GalleryPage.SORTEDBY','Sorted By'),
			array(
				'Title' => _t('GalleryPage.TITLE','Title'),
				'UploadDateASC' => _t('GalleryPage.UPLOADDATEASC','Upload Date Ascending'),
				'UploadDateDESC' => _t('GalleryPage.UPLOADDATEDESC','Upload Date Descending')
			)
		) );
		
		$extensionsTable = $this->getCMSExtensions();
		$fields->addFieldToTab( 'Root.Content.Extensions' , $extensionsTable );

		return $fields;
	}
		
	private function getCMSExtensions() {
		$tablefield = new ManyManyComplexTableField(
			$this,
			'Extensions',
			'GalleryPage_Extension',
			array(
				'Title' => _t('GalleryPage.TITLE'),
				'Extensions' => _t('GalleryPage.EXTENSIONS','Extensions')
			),
			'getCMSFields_forPopup'
		);
		$tablefield->setAddTitle( _t('GalleryPage.ANEXTENSION','An Extension') );
		return $tablefield;
	}
	
	function Items( $limit = "" ) {

		// TODO Implement this, searching through sub-directories if required to find appropriate files
		
		/** Build the list of allowed file extensions **/
		if( $this->Extensions()->Count() > 0 ) {
			$extensions = '';
			foreach( $this->Extensions() as $ext )
				$extensions .= str_replace( ' ', '', $ext->Extensions ) . ',';
			$extensions = str_replace( ',', '|', substr( $extensions, 0, -1 ) );
			if( $this->SortBy == 'Title' )
				$sort = "`File`.`Title` ASC";
			else if( $this->SortBy == 'UploadDateASC' )
				$sort = "`File`.`Created` ASC";
			else if( $this->SortBy == 'UploadDateDESC' )
				$sort = "`File`.`Created` DESC";
			return DataObject::get("File", "`Filename` REGEXP '[.]({$extensions})\$' AND `ParentID` = '{$this->FolderID}'", $sort, "", $limit);
		}
		else
			return null;
	}
		
	function GalleryItems( $limit ) {
		
		/** Get the items from the database **/
		$items = $this->Items( $limit );

		/** For every item that matches the filter... **/
		if( $items ) {
			$cpt = 0;
			foreach( $items as $item ) {
				$cpt++;
		
				$ext = $item->getExtension();
				
				$extensions = $this->Extensions();
				foreach( $extensions as $extension ) {
					if( ! is_bool( strpos( $extension->Extensions, $ext ) ) ) {
						$group = $extension;
						break;
					}
				}
				
				if( ! is_bool( strpos( GalleryPage_Extension::$exts[ 'Images' ][ 'Extensions' ], $ext ) ) ) { // ...create/Get the formatted image...
					$imgForThumbnail = $item->newClassInstance( "GalleryPage_Image" );
					
					$imgForNormal = $item->newClassInstance( 'GalleryPage_Image' );
			
					if( $this->NormalType == 'OriginalResize' )
						$item->ViewLink = $item->URL;
					else {
						if( method_exists( $imgForNormal, "generate{$this->NormalType}" ) )
							$imgNormal = $imgForNormal->getFormattedImage( $this->NormalType, $this->NormalWidth, $this->NormalHeight );
						else // Fall back to the de facto image resize method 
							$imgNormal = $imgForNormal->getFormattedImage( 'ResizedImage', $this->NormalWidth, $this->NormalHeight );

						/** If the image was created/got succesfully... **/
						if( $imgNormal ) {
							/** Add the URL of the formatted image to our object **/
							$item->ViewLink = Director::baseURL().$imgNormal->Filename;
						}
					}
					
					$item->HasDimensions = true;
				}
				else {
					$item->ViewLink = $item->URL;
										
					if( $group->Type == 'ImagesSoundsVideos' || $group->LimitDimensions ) {
						if( $group->Type == 'ImagesSoundsVideos' )
							$item->HasDimensions = true;
						if( $ext != 'bmp' )
							$item->PopupDimensions = true;
						if( $item->PopupWidth > 0 && $item->PopupHeight > 0 ) {
							$item->Width = $item->PopupWidth;
							$item->Height = $item->PopupHeight;
						}
						else {
							$item->Width = $this->NormalWidth;
							$item->Height = $this->NormalHeight;
						}
					}
					if( $ext == 'swf' && $item->Embed ) {
						$item->PopupEmbed = true;
						if( ! $item->LimitDimensions ) {
							$item->HasDimensions = false;
							$item->PopupDimensions = false;
						}
					}
					$params = array();
					if( $item->PopupEmbed )
						array_push( $params, 'lightwindow_iframe_embed=true' );
					if( $group->Type == 'Documents' || $group->Type == 'WebPages' )
						array_push( $params, 'lightwindow_type=external' );
					if( $item->PopupDimensions ) {
						array_push( $params, 'lightwindow_width=' . $item->Width );
						array_push( $params, 'lightwindow_height=' . $item->Height );
					}
					$params = implode( ',', $params );
					foreach( $this->Extensions() as $extension ) {
						if( ! is_bool( strpos( $extension->Extensions, $ext ) ) && $extension->GalleryIconID > 0 && $extension->GalleryIcon()->exists() ) {
							$imgForThumbnail = $extension->GalleryIcon()->newClassInstance( "GalleryPage_Image" );
							break;
						}
					}
					if( ! isset( $imgForThumbnail ) ) {
						if( $this->DefaultIconID == 0 || ! $this->DefaultIcon()->exists() ) {
							$icon = new Image();
							$segment = 'gallery/images/Default.gif';
							$absolute = Director::baseFolder() . '/' . $segment;
							$icon->loadUploaded( array(
								'name' => 'Default.gif',
								'size' => filesize( $absolute ),
								'tmp_name' => $absolute
								)
							);
							$this->DefaultIconID = $icon->ID;
							$this->writeToStage( 'Stage' );
							$this->publish( 'Stage', 'Live' );
						}
						$imgForThumbnail = $this->DefaultIcon()->newClassInstance( "GalleryPage_Image" );
					}
				}
				
				if( method_exists( $imgForThumbnail, "generate{$this->ThumbnailType}" ) )
					$imgThumbnail = $imgForThumbnail->getFormattedImage( $this->ThumbnailType, $this->ThumbnailWidth, $this->ThumbnailHeight );
				else // Fall back to the de facto image resize method
					$imgThumbnail = $imgForThumbnail->getFormattedImage( 'ResizedImage', $this->ThumbnailWidth, $this->ThumbnailHeight );
				/** If the image can be created... **/
				
				unset( $imgForThumbnail );

				if( $imgThumbnail ) {
					/** ...add the URL of the formatted image to our item... **/
					$item->ThumbnailURL = Director::baseURL().$imgThumbnail->Filename;
					$item->JSLightWindow = 'lightwindow';
					if( ! $item->PopupEmbed && $group->Type != 'Documents' && $group->Type != 'WebPages' )
						$item->JSMedia = $this->Title . '[Media]';
					if(isset($params)) $item->PopupParams = $params;
					/** ..create a link to view the 'Normal' version of the image **/
					$item->FirstItemLine = $cpt % $this->MediaPerLine == 1;
					$item->LastItemLine = $cpt % $this->MediaPerLine == 0;
					$item->ShowTitle = $this->ShowTitle;
					$item->ShowSize = $this->ShowSize;
					$item->ShowImageDimensions = $this->ShowImageDimensions;
				}
				
				unset($params);
			}
		}
		/** Return the DataObjectSet we've created above **/
		return $items;
	}

	/**
	 * Get a list of URLs to cache related to this page
	 */
	function subPagesToCache() {
		$urls = parent::subPagesToCache();
		$urls[] = $this->Link() . 'rss';

		$pages = $this->GalleryItems($this->MediaPerPage)->Pages();
		foreach($pages as $page) {
			$urls[] = $page->Link;
		}
		return $urls;
	}
}

class GalleryPage_Controller extends Page_Controller {
		
	function JSPrevPage() { return "previousPage"; }
	
	function JSNextPage() { return "nextPage"; }
	   
    function init() {
		RSSFeed::linkToFeed($this->Link() . "rss", "RSS feed of this gallery");
	
		// Javascript Requirements
		
		Requirements::javascript( "gallery/javascript/prototype.js" );
		Requirements::javascript( "gallery/javascript/effects.js" );
		Requirements::javascript( "gallery/javascript/lightwindow.js" );
		
		// CSS Requirements

		Requirements::themedCSS('Gallery');
		Requirements::themedCSS('lightwindow');
		
   	if( $pos = strpos( $_SERVER[ 'HTTP_USER_AGENT' ], 'MSIE' ) ) {
   		$version = substr( $_SERVER[ 'HTTP_USER_AGENT' ], $pos + 5, 3 );
   		if( $version < 7 ) {
   			Requirements::themedCSS('lightwindowIE6');
   		}
   	}
		parent::init();
    }
	
	function PrevGalleryItems() {
		if( $this->MediaPerPageLimit ) {
			if(!$this->paginationStart()) return null;
			else {
				return $this->GalleryItems( "0, " . $this->paginationStart() );
			}
		}
		else
			return null;
	}
	
	function NextGalleryItems() {
		if( $this->MediaPerPageLimit ) {
			/** Get the limit **/	
			$limit = "";
			$start = $this->paginationStart() + $this->MediaPerPage;
			$fileNumberInFolder = DB::query( "SELECT COUNT(*) FROM File WHERE ParentID = $this->FolderID" )->value();
			$limit = $start . "," . $fileNumberInFolder;
			return $this->GalleryItems( $limit );
		}
		else
			return null;
	}
	
	function paginationStart() {
		if($this->action == 'page' && is_numeric($this->urlParams['ID'])) return $this->urlParams['ID'];
		else return 0;
	}
	
	function CurrentGalleryItems() {
		/** Get the limit **/	
		$limit = "";
		if( $this->MediaPerPageLimit ) {
			$limit = $this->paginationStart() . "," . $this->MediaPerPage;
		}
		return $this->GalleryItems( $limit );
	}
	
    function rss() {
		$rss = new GalleryRSSFeed($this->GalleryItems(""), $this->Link(), "Gallery items", "All items of the '" . $this->obj("Title")->XML() . "' gallery.", "Title", "RSSContent", "Owner");
		return $rss->outputToBrowser();
	}
}

class GalleryPage_Image extends Image {

	function generateCroppedResize( $gd, $width, $height ) { return $gd->croppedResize( $width, $height ); }
	function generatePaddedResize( $gd, $width, $height ) { return $gd->paddedResize( $width, $height ); }
	function generateFittedResize( $gd, $width, $height ) { return $gd->fittedResize( $width, $height ); }
	function generateResize( $gd, $width, $height ) { return $gd->resize( $width, $height ); }
	function generateResizeByWidth( $gd, $width, $height ) { return $gd->resizeByWidth( $width, $height ); }
	function generateResizeByHeight( $gd, $width, $height ) { return $gd->resizeByHeight( $width, $height ); }
	function generateResizeRatio( $gd, $width, $height ) { return $gd->resizeRatio( $width, $height ); }
	
}

class GalleryPage_Extension extends DataObject {
	
	public static $exts = array(
		'Images' => array( 'Extensions' => 'png, jpg, jpeg, gif', 'Type' => 'ImagesSoundsVideos'),
		'Sounds' => array( 'Extensions' => 'wav, mp3, ram, m4a, mp4, wma', 'Type' => 'ImagesSoundsVideos'),
		'Videos' => array( 'Extensions' => 'mpg, mpeg, avi, mov, qt, wmv, swf', 'Type' => 'ImagesSoundsVideos'),
		'Pdf Documents' => array( 'Extensions' => 'pdf', 'Type' => 'Documents'),
		'Web Pages' => array( 'Extensions' => 'html', 'Type' => 'WebPages'),
	);
	
	static $db = array(
		'Title' => 'Text',
		'Extensions' => 'Text',
		'Type' => "Enum( array( 'ImagesSoundsVideos', 'Documents', 'WebPages' ), 'ImagesSoundsVideos' )",
		'LimitDimensions' => 'Boolean'
	);
	
	static $has_one = array(
		'GalleryIcon' => 'Image'
	);
	
	static $belongs_many_many = array(
		'Galleries' => 'GalleryPage'
	);
	
	public function requireDefaultRecords() {
		parent::requireDefaultRecords();
		
		if( ! $extension = DataObject::get_one( 'GalleryPage_Extension' ) ) {
			
			$iconField = 'GalleryIconID';
			
			foreach( self::$exts as $t => $e ) {
				$extension = new GalleryPage_Extension();
				$extension->Title = $t;
				$extension->Extensions = $e[ 'Extensions' ];
				$extension->Type = $e[ 'Type' ];
				$extension->write();
				
				$fileName = str_replace( ' ', '_', $t ) . '.gif';
				if( Director::fileExists( $segment = 'gallery/images/' . $fileName ) ) {
					$icon = new Image();
					$absolute = Director::baseFolder() . '/' . $segment;
					$icon->loadUploaded( array(
						'name' => $fileName,
						'size' => filesize( $absolute ),
						'tmp_name' => $absolute
						)
					);
					$extension->$iconField = $icon->ID;
					$extension->write();
				}
			}
			if( ! Database::$supressOutput ) {
				echo "<li style=\"color: orange\">" . _t('GalleryPage.IMAGESEXTENSIONCREATED','Images GalleryPage_Extension Created') . "</li>"; 
 				echo "<li style=\"color: orange\">" . _t('GalleryPage.SOUNDSEXTENSIONCREATED','Sounds GalleryPage_Extension Created') . "</li>"; 
 				echo "<li style=\"color: orange\">" . _t('GalleryPage.VIDEOSEXTENSIONCREATED','Videos GalleryPage_Extension Created') . "</li>"; 
 				echo "<li style=\"color: orange\">" . _t('GalleryPage.PDFEXTENSIONCREATED','Pdf Documents GalleryPage_Extension Created') . "</li>"; 
 				echo "<li style=\"color: orange\">" . _t('GalleryPage.WEBEXTENSIONCREATED','Web Pages GalleryPage_Extension Created') . "</li>"; 
			}
		}
	}
	
	function getRequirementsForPopup() {
		
		// Javascript Requirement
		
		Requirements::javascript( 'gallery/javascript/GalleryPage_Extension_CMS.js' );
		
		// CSS Requirement
		
		Requirements::customCSS(<<<CSS
  			.right form #LimitDimensions.checkbox input {
  				margin: 0 1px;
  			}
  			/*.right form #LimitDimensions.checkbox label {
  				margin-bottom: 4px;
  			}*/
CSS
		);
	}
	
	function getCMSFields_forPopup() {
		$fields = new FieldSet();
		$fields->push( new HeaderField( _t('GalleryPage.TITLE') ) );
		$fields->push( new TextField( 'Title', '' ) );
		$fields->push( new HeaderField( _t('GalleryPage.EXTENSIONS') ) );
		$fields->push( new TextareaField( 'Extensions', '', 1 ) );
		$fields->push( new HeaderField( _t('GalleryPage.TYPE','Type') ) );
		$fields->push( new DropdownField( 'Type', '', array(
			'ImagesSoundsVideos' => _t('GalleryPage.IMAGESSOUNDSVIDEOS','Images, Sounds Or Videos'),
			'Documents' => _t('GalleryPage.DOCUMENTS','Documents'),
			'WebPages' => _t('GalleryPage.WEBPAGES','Web Pages')
			)
		) );
		$fields->push( new HeaderField( '' ) );
		$fields->push( new CheckboxField( 'LimitDimensions', _t('GalleryPage.LIMITDIMENSIONSINPOPUP','Limit The Dimensions In The Popup Window') ) );
		$fields->push( new HeaderField( _t('GalleryPage.ICON','Icon') ) );
		$fields->push( new ImageField( 'GalleryIcon', '' ) );
		return $fields;
	}
		
	function onBeforeDelete() {
				
		// Delete The ManyMany Relations
		
		$this->Galleries()->removeAll();
			
		parent::onBeforeDelete();
	}
}

?>
