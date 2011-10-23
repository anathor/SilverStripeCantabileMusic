<?php

/**
 * Finnish (Finland) language pack
 * @package modules: gallery
 * @subpackage i18n
 */

i18n::include_locale_file('modules: gallery', 'en_US');

global $lang;

if(array_key_exists('fi_FI', $lang) && is_array($lang['fi_FI'])) {
	$lang['fi_FI'] = array_merge($lang['en_US'], $lang['fi_FI']);
} else {
	$lang['fi_FI'] = $lang['en_US'];
}

$lang['fi_FI']['GalleryPage']['ANEXTENSION'] = 'Tiedostopääte';
$lang['fi_FI']['GalleryPage']['CROPPEDRESIZE'] = 'Rajaava';
$lang['fi_FI']['GalleryPage']['DEFAULTIMAGE'] = 'Oletuskuva';
$lang['fi_FI']['GalleryPage']['DOCUMENTS'] = 'Dokumentit';
$lang['fi_FI']['GalleryPage']['EXTENSIONS'] = 'Tiedostopäätteet';
$lang['fi_FI']['GalleryPage']['FILEREPOSITORYLIVETRANSFERRED'] = '\'FileRepository_Live\' taulun tiedot on siirretty onnistuneesti ja taulu on nimetty uudelleen \'_obsolete_FileRepository_Live\':ksi';
$lang['fi_FI']['GalleryPage']['FILEREPOSITORYTRANSFERRED'] = '\'FileRepository\' taulun tiedot on siirretty onnistuneesti ja taulu on nimetty uudelleen \'_obsolete_FileRepository\':ksi.';
$lang['fi_FI']['GalleryPage']['FILEREPOSITORYVERSIONREMOVED'] = '\'FileRepository_versions\' taulu on poistettu onnistuneesti.';
$lang['fi_FI']['GalleryPage']['FITTEDRESIZE'] = 'Sovittava';
$lang['fi_FI']['GalleryPage']['GALLERYLAYOUT'] = 'Gallerian Ulkoasu';
$lang['fi_FI']['GalleryPage']['ICON'] = 'Ikoni';
$lang['fi_FI']['GalleryPage']['IMAGEHEIGHT'] = 'Kuvan Korkeus';
$lang['fi_FI']['GalleryPage']['IMAGEOPTIONS'] = 'Kuvan Asetukset';
$lang['fi_FI']['GalleryPage']['IMAGESSOUNDSVIDEOS'] = 'Kuvat, äänet tai videot';
$lang['fi_FI']['GalleryPage']['IMAGEWIDTH'] = 'Kuvan Leveys';
$lang['fi_FI']['GalleryPage']['LIMITDIMENSIONSINPOPUP'] = 'Rajoita mittoja popup-ikkunassa';
$lang['fi_FI']['GalleryPage']['MEDIAPERLINE'] = 'Mediatiedostojen Määrä Rivillä';
$lang['fi_FI']['GalleryPage']['MEDIAPERPAGE'] = 'Mediatiedostojen Määrä Sivulla';
$lang['fi_FI']['GalleryPage']['MEDIAPERPAGELIMIT'] = 'Rajoita Mediatiedostojen Määrää Sivulla';
$lang['fi_FI']['GalleryPage']['ORIGINALRESIZE'] = 'Alkuperäinen';
$lang['fi_FI']['GalleryPage']['PADDEDRESIZE'] = 'Pehmikkeet';
$lang['fi_FI']['GalleryPage']['RESIZE'] = 'Muuta Kokoa';
$lang['fi_FI']['GalleryPage']['RESIZEBYHEIGHT'] = 'Korkeuden Mukaan';
$lang['fi_FI']['GalleryPage']['RESIZEBYRATIO'] = 'Kokosuhteen Mukaan';
$lang['fi_FI']['GalleryPage']['RESIZEBYWIDTH'] = 'Leveyden Mukaan';
$lang['fi_FI']['GalleryPage']['RESIZINGMETHOD'] = 'Kuvan Koon Muutostapa';
$lang['fi_FI']['GalleryPage']['SHOWFILESFROM'] = 'Näytä Tiedostot Kohteesta';
$lang['fi_FI']['GalleryPage']['SHOWIMAGEDIMENSIONS'] = 'Näytä Median Mitat';
$lang['fi_FI']['GalleryPage']['SHOWSIZE'] = 'Näytä Median Koko';
$lang['fi_FI']['GalleryPage']['SHOWTITLE'] = 'Näytä Median Otsikko';
$lang['fi_FI']['GalleryPage']['SORTEDBY'] = 'Lajitteluperuste';
$lang['fi_FI']['GalleryPage']['TITLE'] = 'Otsikko';
$lang['fi_FI']['GalleryPage']['TYPE'] = 'Tyyppi';
$lang['fi_FI']['GalleryPage']['UPLOADDATEASC'] = 'Kopiointipäivämäärä Nouseva';
$lang['fi_FI']['GalleryPage']['UPLOADDATEDESC'] = 'Kopiointipäivämäärä Laskeva';
$lang['fi_FI']['GalleryPage']['WEBPAGES'] = 'Nettisivut';
$lang['fi_FI']['GalleryPageContent.ss']['NEXT'] = 'Seuraava &gt;';
$lang['fi_FI']['GalleryPageContent.ss']['NEXTDESCRIPTION'] = 'Näytä seuraava sivu';
$lang['fi_FI']['GalleryPageContent.ss']['PAGENUMBER'] = 'Näytä sivu numero %s';
$lang['fi_FI']['GalleryPageContent.ss']['PREVIOUS'] = '%lt; Edellinen';
$lang['fi_FI']['GalleryPageContent.ss']['PREVIOUSDESCRIPTION'] = 'Näytä edellinen sivu';

?>