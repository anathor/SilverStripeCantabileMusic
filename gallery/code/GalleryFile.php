<?php
/*
 * Created on Jun 19, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 class GalleryFile extends DataObjectDecorator {
 	
 	/**
	 * Edit the given query object to support queries for this extension
	 */
	function augmentSQL(SQLQuery &$query) {}
 	
 	/**
	 * Update the database schema as required by this extension
	 */
	function augmentDatabase() {}
 	
 	/**
	 * Define extra database fields.
	 * Return an map where the keys are db, has_one, etc, and the values are additional fields / relations to be defined
	 */
	function extraDBFields() {
		return array(
			'db' => array(
				'PopupWidth' => 'Int',
				'PopupHeight' => 'Int',
				'Embed' => 'Boolean',
				'LimitDimensions' => 'Boolean'
			)
		);
	}
	
	public function alternative_instance_get($filter = "", $sort = "", $join = "", $limit="", $containerClass = "DataObjectSet", $having="") {
		$query = $this->owner->extendedSQL($filter, $sort, $limit, $join, $having);
		$baseTable = reset($query->from);

		$query->select = array("$baseTable.ID","$baseTable.ClassName","$baseTable.Created","$baseTable.LastEdited","$baseTable.Name","$baseTable.Title","$baseTable.Content","$baseTable.ParentID","$baseTable.Filename","if($baseTable.ClassName,$baseTable.ClassName,'File') AS RecordClassName","$baseTable.PopupWidth","$baseTable.PopupHeight","$baseTable.Embed","$baseTable.LimitDimensions");
		$records = $query->execute();
		$ret = $this->owner->buildDataObjectSet($records, $containerClass);
		if($ret) $ret->parseQueryLimit($query);
	
		return $ret;
	}
	
	/**
	 * Returns the image tag and the image caption (aka content)
	 */
	function getRSSContent() {
		$ImageSrc = $this->owner->Link();
		$SAFE_Title = $this->owner->obj("Title")->XML();
		$SAFE_Caption = $this->owner->obj("Content")->XML();
		$html = <<<HTML
	<img src="$ImageSrc" alt="$SAFE_Title" />
	<p>$SAFE_Caption</p>
HTML;

		return DBField::create("HTMLText", $html);
	}
}

?>
