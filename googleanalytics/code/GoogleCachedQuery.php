<?php

class GoogleCachedQuery extends DataObject {

	static $db = array(
		'Hash' => 'Varchar(255)',
		'Data' => 'Text',
	);
}