<?php

/**
 * German (Germany) language pack
 * @package modules: gallery
 * @subpackage i18n
 */

i18n::include_locale_file('modules: gallery', 'en_US');

global $lang;

if(array_key_exists('de_DE', $lang) && is_array($lang['de_DE'])) {
	$lang['de_DE'] = array_merge($lang['en_US'], $lang['de_DE']);
} else {
	$lang['de_DE'] = $lang['en_US'];
}

$lang['de_DE']['FileListingContent.ss']['NEXT'] = 'nächste &gt;';
$lang['de_DE']['FileListingContent.ss']['NEXTDESCRIPTION'] = 'Sehen die nächste Seite';
$lang['de_DE']['FileListingContent.ss']['PAGENUMBER'] = 'Zeige Seite %s';
$lang['de_DE']['FileListingContent.ss']['PREVIOUS'] = '&lt; voherig';
$lang['de_DE']['FileListingContent.ss']['PREVIOUSDESCRIPTION'] = 'Sehen die vorherigen Seite';
$lang['de_DE']['GalleryPage']['ANEXTENSION'] = 'Eine Erweiterung';
$lang['de_DE']['GalleryPage']['CROPPEDRESIZE'] = 'Geschnittene Gr��en�nderung';
$lang['de_DE']['GalleryPage']['DEFAULTIMAGE'] = 'Vorgegebenes Bild';
$lang['de_DE']['GalleryPage']['DOCUMENTS'] = 'Dokumente';
$lang['de_DE']['GalleryPage']['EXTENSIONS'] = 'Erweiterungen';
$lang['de_DE']['GalleryPage']['FILEREPOSITORYLIVETRANSFERRED'] = 'Der \'FileRepository_Live\'-Tabelleninhalt wurde erfolgreich �bertragen. Die Tabelle wurde auch in \'_obsolete_FileRepository_Live\' umbenannt.';
$lang['de_DE']['GalleryPage']['FILEREPOSITORYTRANSFERRED'] = 'Der \'FileRepository\'-Tabelleninhalt wurde erfolgreich �bertragen. Die Tabelle wurde auch in \'_obsolete_FileRepository\' umbenannt.';
$lang['de_DE']['GalleryPage']['FILEREPOSITORYVERSIONREMOVED'] = 'Die \'FileRepository_versions\'-Tabelle wurde erfolgreich gel�scht.';
$lang['de_DE']['GalleryPage']['FITTEDRESIZE'] = 'Eingepasste Gr��en�nderung';
$lang['de_DE']['GalleryPage']['GALLERYLAYOUT'] = 'Galerie-Layout';
$lang['de_DE']['GalleryPage']['ICON'] = 'Icon';
$lang['de_DE']['GalleryPage']['IMAGEHEIGHT'] = 'Bildh�he';
$lang['de_DE']['GalleryPage']['IMAGEOPTIONS'] = 'Bilderoptionen';
$lang['de_DE']['GalleryPage']['IMAGESEXTENSIONCREATED'] = 'Bilder GalleryPage_Extension erstellt';
$lang['de_DE']['GalleryPage']['IMAGESSOUNDSVIDEOS'] = 'Bilder, Sounds oder Videos';
$lang['de_DE']['GalleryPage']['IMAGEWIDTH'] = 'Bildbreite';
$lang['de_DE']['GalleryPage']['LIMITDIMENSIONSINPOPUP'] = 'Begrenze die Abmessungen im Popup-Fenster';
$lang['de_DE']['GalleryPage']['MEDIAPERLINE'] = 'Mediendateien pro ZEile';
$lang['de_DE']['GalleryPage']['MEDIAPERPAGE'] = 'Mediendateien pro Seite';
$lang['de_DE']['GalleryPage']['MEDIAPERPAGELIMIT'] = 'Begrenze die Zahl an Mediendateien pro Seite';
$lang['de_DE']['GalleryPage']['ORIGINALRESIZE'] = 'Originale Gr��en�nderung';
$lang['de_DE']['GalleryPage']['PADDEDRESIZE'] = 'Aufgef�llte Gr��en�nderung';
$lang['de_DE']['GalleryPage']['PDFEXTENSIONCREATED'] = 'PDF-Dokumente GalleryPage_Extension erstellt';
$lang['de_DE']['GalleryPage']['RESIZE'] = 'Skalierung';
$lang['de_DE']['GalleryPage']['RESIZEBYHEIGHT'] = 'Gr��e anhand der H�he �ndern';
$lang['de_DE']['GalleryPage']['RESIZEBYRATIO'] = 'Gr��e anhand des Verh�ltnisses �ndern';
$lang['de_DE']['GalleryPage']['RESIZEBYWIDTH'] = 'Gr��e anhand der Breite �ndern';
$lang['de_DE']['GalleryPage']['RESIZINGMETHOD'] = 'Skalierungsmethode';
$lang['de_DE']['GalleryPage']['SHOWFILESFROM'] = 'Zeige die Dateien aus';
$lang['de_DE']['GalleryPage']['SHOWIMAGEDIMENSIONS'] = 'Zeige Medienma�e';
$lang['de_DE']['GalleryPage']['SHOWSIZE'] = 'Zeige Mediengr��e';
$lang['de_DE']['GalleryPage']['SHOWTITLE'] = 'Zeige Medientitel';
$lang['de_DE']['GalleryPage']['SORTEDBY'] = 'Geordnet nach';
$lang['de_DE']['GalleryPage']['SOUNDSEXTENSIONCREATED'] = 'Sounds GalleryPage_Extension erstellt';
$lang['de_DE']['GalleryPage']['TITLE'] = 'Titel';
$lang['de_DE']['GalleryPage']['TYPE'] = 'Typ';
$lang['de_DE']['GalleryPage']['UPLOADDATEASC'] = 'Hochladedatum aufsteigend';
$lang['de_DE']['GalleryPage']['UPLOADDATEDESC'] = 'Hochladedatum absteigend';
$lang['de_DE']['GalleryPage']['VIDEOSEXTENSIONCREATED'] = 'Videos GalleryPage_Extension erstellt';
$lang['de_DE']['GalleryPage']['WEBEXTENSIONCREATED'] = 'Webseiten GalleryPage_Extension erstellt';
$lang['de_DE']['GalleryPage']['WEBPAGES'] = 'Webseiten';
$lang['de_DE']['GalleryPageContent.ss']['NEXT'] = 'nächste &gt;';
$lang['de_DE']['GalleryPageContent.ss']['NEXTDESCRIPTION'] = 'Zeige die nächste Seite';
$lang['de_DE']['GalleryPageContent.ss']['PAGENUMBER'] = 'Zeige Seite Nummer %s';
$lang['de_DE']['GalleryPageContent.ss']['PREVIOUS'] = '&lt; Vorherige';
$lang['de_DE']['GalleryPageContent.ss']['PREVIOUSDESCRIPTION'] = 'Zeige die vorherige Seite';

?>