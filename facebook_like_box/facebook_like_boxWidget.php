<?php
class facebook_like_boxWidget extends Widget
{
	static $db=array(
		"SiteUrl"=> "Varchar(500)",
		"Height"=> "Int",
		"Width"=> "Int",
		"Stream"=> "Varchar",
		"Header"=> "Varchar",
		"ShowFaces"=> "Varchar"
	);
	
	
	static $defaults = array(
		"SiteUrl" => 'http://www.facebook.com/platform',
		"Height" => 427,
		"Width" => 292,
		"Stream" => 'true',
		"Header" => 'true',
		"ShowFaces" => 'true'
	);
	
	static $title = "Facebook Like box";
	static $cmsTitle = "Facebook Like box";
	static $description = "A widget that displays a Facebook Like box";
	
	function FacebookLikeBox(){
		try{
			$output='<iframe src="http://www.facebook.com/plugins/likebox.php?href='.urlencode($this->SiteUrl).'&amp;width='.$this->Width.'&amp;colorscheme=light&amp;show_faces='.$this->ShowFaces.'&amp;stream='.$this->Stream.'&amp;header='.$this->Header.'&amp;height='.$this->Height.'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.$this->Width.'px; height:'.$this->Height.'px;" allowTransparency="true"></iframe>';
			return $output;
		}
		catch(Exception $e) {
			return false;
		}
	}
	function getCMSFields() {
		return new FieldSet(
			new TextField("SiteUrl", "Page Url","likr http://http://www.facebook.com/platform"),
			new OptionsetField($name = "ShowFaces", $title = "Show Faces",array('true' => 'Yes','false' => 'No')),
			new OptionsetField("Header", "Show Header",array('true' => 'Yes','false' => 'No')),
			new OptionsetField("Stream", "Show Stream",array('true' => 'Yes','false' => 'No')),
			new TextField("Height"),
			new TextField("Width")
			
		);
	}
}
?>