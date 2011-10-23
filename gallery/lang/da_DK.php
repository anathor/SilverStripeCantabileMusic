<?php

/**
 * Danish (Denmark) language pack
 * @package modules: gallery
 * @subpackage i18n
 */

i18n::include_locale_file('modules: gallery', 'en_US');

global $lang;

if(array_key_exists('da_DK', $lang) && is_array($lang['da_DK'])) {
	$lang['da_DK'] = array_merge($lang['en_US'], $lang['da_DK']);
} else {
	$lang['da_DK'] = $lang['en_US'];
}

$lang['da_DK']['FileListingContent.ss']['NEXT'] = 'Næste &gt;';
$lang['da_DK']['FileListingContent.ss']['NEXTDESCRIPTION'] = 'Vis næste side';
$lang['da_DK']['FileListingContent.ss']['PAGENUMBER'] = 'Vis  side nummer %S';
$lang['da_DK']['FileListingContent.ss']['PREVIOUS'] = '&lt; Forrige';
$lang['da_DK']['FileListingContent.ss']['PREVIOUSDESCRIPTION'] = 'Vis den forrige side';
$lang['da_DK']['GalleryPage']['ANEXTENSION'] = 'En udvidelse';
$lang['da_DK']['GalleryPage']['DEFAULTIMAGE'] = 'Standard billede';
$lang['da_DK']['GalleryPage']['DOCUMENTS'] = 'Dokumenter';
$lang['da_DK']['GalleryPage']['EXTENSIONS'] = 'Udvidelser';
$lang['da_DK']['GalleryPage']['FILEREPOSITORYLIVETRANSFERRED'] = 'Indholdet af  tabellen \'FileRepository_Live\' er succesfuldt blevet flyttet og tabellen er omdøbt til \'_obsolete_FileRepository_Live\'.';
$lang['da_DK']['GalleryPage']['FILEREPOSITORYTRANSFERRED'] = 'Indholdet af   tabellen \'FileRepository\' er succesfuldt blevet flyttet og tabellen er omdøbt til \'_obsolete_FileRepository\'.';
$lang['da_DK']['GalleryPage']['FILEREPOSITORYVERSIONREMOVED'] = 'Tabellen \'FileRepository_versions\' er succesfuldt blevet fjernet';
$lang['da_DK']['GalleryPage']['GALLERYLAYOUT'] = 'Galleri layout';
$lang['da_DK']['GalleryPage']['ICON'] = 'Ikon';
$lang['da_DK']['GalleryPage']['IMAGEHEIGHT'] = 'Billedehøjde';
$lang['da_DK']['GalleryPage']['IMAGEOPTIONS'] = 'Billede indstillinger';
$lang['da_DK']['GalleryPage']['IMAGESEXTENSIONCREATED'] = 'Billed GalleryPage_Extension oprettet';
$lang['da_DK']['GalleryPage']['IMAGESSOUNDSVIDEOS'] = 'Billeder, Lyder eller videoer';
$lang['da_DK']['GalleryPage']['IMAGEWIDTH'] = 'Billedebredde';
$lang['da_DK']['GalleryPage']['LIMITDIMENSIONSINPOPUP'] = 'Begræns dimensionerne af popup vinduet';
$lang['da_DK']['GalleryPage']['MEDIAPERLINE'] = 'Medie-filer pr. linje';
$lang['da_DK']['GalleryPage']['MEDIAPERPAGE'] = 'Medie-filer pr. side';
$lang['da_DK']['GalleryPage']['MEDIAPERPAGELIMIT'] = 'Begræns antallet af medie-filer pr. side';
$lang['da_DK']['GalleryPage']['PDFEXTENSIONCREATED'] = 'PDF dokument GalleryPage_Extension oprettet';
$lang['da_DK']['GalleryPage']['RESIZINGMETHOD'] = 'Metode til at ændre billededimensioner';
$lang['da_DK']['GalleryPage']['SHOWFILESFROM'] = 'Vis filerne fra';
$lang['da_DK']['GalleryPage']['SHOWIMAGEDIMENSIONS'] = 'Vis medie-dimensioner';
$lang['da_DK']['GalleryPage']['SHOWSIZE'] = 'Vis medie-størrelse';
$lang['da_DK']['GalleryPage']['SHOWTITLE'] = 'Vis medie-titel';
$lang['da_DK']['GalleryPage']['SORTEDBY'] = 'Sorteret efter';
$lang['da_DK']['GalleryPage']['SOUNDSEXTENSIONCREATED'] = 'Lyd GalleryPage_Extension oprettet';
$lang['da_DK']['GalleryPage']['TITLE'] = 'Titel';
$lang['da_DK']['GalleryPage']['TYPE'] = 'Type';
$lang['da_DK']['GalleryPage']['UPLOADDATEASC'] = 'Upload dato stigende';
$lang['da_DK']['GalleryPage']['UPLOADDATEDESC'] = 'Upload dato faldende';
$lang['da_DK']['GalleryPage']['VIDEOSEXTENSIONCREATED'] = 'Video GalleryPage_Extension oprettet';
$lang['da_DK']['GalleryPage']['WEBEXTENSIONCREATED'] = 'Webside GalleryPage_Extension oprettet';
$lang['da_DK']['GalleryPage']['WEBPAGES'] = 'Hjemmesider';
$lang['da_DK']['GalleryPageContent.ss']['NEXT'] = 'næste &gt;';
$lang['da_DK']['GalleryPageContent.ss']['NEXTDESCRIPTION'] = 'Vis den næste side';
$lang['da_DK']['GalleryPageContent.ss']['PAGENUMBER'] = 'Vis side nummer %s';
$lang['da_DK']['GalleryPageContent.ss']['PREVIOUS'] = '&lt; forrige';
$lang['da_DK']['GalleryPageContent.ss']['PREVIOUSDESCRIPTION'] = 'Vis den forrige side';

?>