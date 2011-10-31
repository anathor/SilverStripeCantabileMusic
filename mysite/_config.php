<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
        "type" => 'MySQLDatabase',
        "server" => 'localhost',
        "username" => 'root',
        "password" => 'omf2097',
        "database" => 'CantabileMusic',
        "path" => '',
);

RecaptchaField::$public_api_key = '6LfL38YSAAAAAFHvfG3T4aIlr_5cdg8tVnu7TJqS';
RecaptchaField::$private_api_key = '6LfL38YSAAAAAI12QLKcflb3Mc-VgPJiXzimfGgh';
SpamProtectorManager::set_spam_protector("RecaptchaProtector");

MySQLDatabase::set_connection_charset('utf8');

// This line set's the current theme. More themes can be
// downloaded from http://www.silverstripe.org/themes/
SSViewer::set_theme('blackcandy');

// Set the site locale
i18n::set_locale('en_AU');

// enable nested URLs for this site (e.g. page/sub-page/)
SiteTree::enable_nested_urls();

GoogleLogger::activate('SiteConfig');
GoogleAnalyzer::activate('SiteConfig');
//Email::setAdminEmail('ben@playedinane.com');


