<?php

/**
 * French (France) language pack
 * @package modules: gallery
 * @subpackage i18n
 */

i18n::include_locale_file('modules: gallery', 'en_US');

global $lang;

if(array_key_exists('fr_FR', $lang) && is_array($lang['fr_FR'])) {
	$lang['fr_FR'] = array_merge($lang['en_US'], $lang['fr_FR']);
} else {
	$lang['fr_FR'] = $lang['en_US'];
}

$lang['fr_FR']['FileListingContent.ss']['NEXT'] = 'Suivante &gt;';
$lang['fr_FR']['FileListingContent.ss']['NEXTDESCRIPTION'] = 'Voir la page suivante';
$lang['fr_FR']['FileListingContent.ss']['PAGENUMBER'] = 'Voir la page numérotée %s';
$lang['fr_FR']['FileListingContent.ss']['PREVIOUS'] = '&lt; Précédente';
$lang['fr_FR']['FileListingContent.ss']['PREVIOUSDESCRIPTION'] = 'Voir la page précédente';
$lang['fr_FR']['GalleryPage']['ANEXTENSION'] = 'Une Extension';
$lang['fr_FR']['GalleryPage']['CROPPEDRESIZE'] = 'Recadrer';
$lang['fr_FR']['GalleryPage']['DEFAULTIMAGE'] = 'Image par Défaut';
$lang['fr_FR']['GalleryPage']['DOCUMENTS'] = 'Documents';
$lang['fr_FR']['GalleryPage']['EXTENSIONS'] = 'Extensions';
$lang['fr_FR']['GalleryPage']['FILEREPOSITORYLIVETRANSFERRED'] = 'Le contenu des données de la table \'FileRepository_Live\' a été transféré avec succès. Aussi, la table a été renommé en \'_obsolete_FileRepository_Live\'.';
$lang['fr_FR']['GalleryPage']['FILEREPOSITORYTRANSFERRED'] = 'Le contenu des données de la table \'FileRepository\' a été transféré avec succès. Aussi, la table a été renommé en \'_obsolete_FileRepository\'.';
$lang['fr_FR']['GalleryPage']['FILEREPOSITORYVERSIONREMOVED'] = 'La table \'FileRepository_versions\' a été supprimée avec succès.';
$lang['fr_FR']['GalleryPage']['FITTEDRESIZE'] = 'Ajuster';
$lang['fr_FR']['GalleryPage']['GALLERYLAYOUT'] = 'Disposition de la Galerie';
$lang['fr_FR']['GalleryPage']['ICON'] = 'Icône';
$lang['fr_FR']['GalleryPage']['IMAGEHEIGHT'] = 'Hauteur de L\'Image';
$lang['fr_FR']['GalleryPage']['IMAGEOPTIONS'] = 'Options des Images';
$lang['fr_FR']['GalleryPage']['IMAGESEXTENSIONCREATED'] = 'Images GalleryPage_Extension Créé';
$lang['fr_FR']['GalleryPage']['IMAGESSOUNDSVIDEOS'] = 'Images, Sons Ou Vidéos';
$lang['fr_FR']['GalleryPage']['IMAGEWIDTH'] = 'Largeur de L\'Image';
$lang['fr_FR']['GalleryPage']['LIMITDIMENSIONSINPOPUP'] = 'Limite des Dimensions de la Fenêtre Popup';
$lang['fr_FR']['GalleryPage']['MEDIAPERLINE'] = 'Fichiers Média Par Ligne';
$lang['fr_FR']['GalleryPage']['MEDIAPERPAGE'] = 'Fichiers Média Par Page';
$lang['fr_FR']['GalleryPage']['MEDIAPERPAGELIMIT'] = 'Nombre maximum de fichiers médiatiques par page';
$lang['fr_FR']['GalleryPage']['ORIGINALRESIZE'] = 'Redimensionnement Original';
$lang['fr_FR']['GalleryPage']['PADDEDRESIZE'] = 'Redimensionner';
$lang['fr_FR']['GalleryPage']['PDFEXTENSIONCREATED'] = 'Documents Pdf GalleryPage_Extension Créé';
$lang['fr_FR']['GalleryPage']['RESIZE'] = 'Redimensionner';
$lang['fr_FR']['GalleryPage']['RESIZEBYHEIGHT'] = 'Redimensionner Par la Hauteur';
$lang['fr_FR']['GalleryPage']['RESIZEBYRATIO'] = 'Redimensionnez Par Ratio';
$lang['fr_FR']['GalleryPage']['RESIZEBYWIDTH'] = 'Redimensionner Par la Largeur';
$lang['fr_FR']['GalleryPage']['RESIZINGMETHOD'] = 'Méthode de Redimensionnement';
$lang['fr_FR']['GalleryPage']['SHOWFILESFROM'] = 'Afficher les Fichiers de';
$lang['fr_FR']['GalleryPage']['SHOWIMAGEDIMENSIONS'] = 'Afficher les Dimensions du Média';
$lang['fr_FR']['GalleryPage']['SHOWSIZE'] = 'Afficher la Taille du Média';
$lang['fr_FR']['GalleryPage']['SHOWTITLE'] = 'Afficher le Titre du Média';
$lang['fr_FR']['GalleryPage']['SORTEDBY'] = 'Trié Par';
$lang['fr_FR']['GalleryPage']['SOUNDSEXTENSIONCREATED'] = 'Sons GalleryPage_Extension Créé';
$lang['fr_FR']['GalleryPage']['TITLE'] = 'Titre';
$lang['fr_FR']['GalleryPage']['TYPE'] = 'Type';
$lang['fr_FR']['GalleryPage']['UPLOADDATEASC'] = 'Transfert par Date Ascendante';
$lang['fr_FR']['GalleryPage']['UPLOADDATEDESC'] = 'Transfert par Date Descendante';
$lang['fr_FR']['GalleryPage']['VIDEOSEXTENSIONCREATED'] = 'Vidéos GalleryPage_Extension Créé';
$lang['fr_FR']['GalleryPage']['WEBEXTENSIONCREATED'] = 'Pages Web GalleryPage_Extension Créé';
$lang['fr_FR']['GalleryPage']['WEBPAGES'] = 'Pages Web';
$lang['fr_FR']['GalleryPageContent.ss']['NEXT'] = 'Suivant &gt;';
$lang['fr_FR']['GalleryPageContent.ss']['NEXTDESCRIPTION'] = 'Voir la page suivante';
$lang['fr_FR']['GalleryPageContent.ss']['PAGENUMBER'] = 'Nombre de page vue %s';
$lang['fr_FR']['GalleryPageContent.ss']['PREVIOUS'] = '&lt; Précédent';
$lang['fr_FR']['GalleryPageContent.ss']['PREVIOUSDESCRIPTION'] = 'Voir la page précédente';

?>