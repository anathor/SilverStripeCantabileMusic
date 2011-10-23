<?php
/**
 * Sub-class of RSSFeed because each entry doesn't let you get content from anything except a database object
 */
class GalleryRSSFeed extends RSSFeed {
	/**
	 * Get the RSS feed entries
	 *
	 * @return DataObjectSet Returns the {@link GalleryRSSFeed_Entry} objects.
	 */
	function Entries() {
		$output = new DataObjectSet();
		if(isset($this->entries)) {
			foreach($this->entries as $entry) {
				$output->push(new GalleryRSSFeed_Entry($entry, $this->titleField, $this->descriptionField, $this->authorField, $this->pubDateField));
			}	
		}
		return $output;
	}
}

class GalleryRSSFeed_Entry extends RSSFeed_Entry {
	/**
	 * Get the description of this entry
	 *
	 * @return string Returns the description of the entry.
	 */
	function Description() {
		if($this->descriptionField)
			return $this->failover->{$this->descriptionField};
	}
}
?>
