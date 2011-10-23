<?php

/**
 * Create a page that lists a bunch of files from a particular directory in assets/.
 *
 * Note: it would be better to make GalleryPage a subclass of this, rather than the other
 * way round, but it is easier for short-term backwards compatability.
 */
class FileListingPage extends GalleryPage {
	
	function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->removeFieldFromTab("Root.Content", "Gallery");
		$fields->removeFieldFromTab("Root.Content", "Popup");
		return $fields;
	}
}

class FileListingPage_Controller extends GalleryPage_Controller {
    function init() {
		RSSFeed::linkToFeed($this->Link() . "rss", "RSS feed of these files");

		Requirements::themedCSS('FileListingPage');
		
		parent::init();
    }
}