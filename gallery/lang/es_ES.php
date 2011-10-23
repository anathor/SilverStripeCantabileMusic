<?php

/**
 * Spanish (Spain) language pack
 * @package modules: gallery
 * @subpackage i18n
 */

i18n::include_locale_file('modules: gallery', 'en_US');

global $lang;

if(array_key_exists('es_ES', $lang) && is_array($lang['es_ES'])) {
	$lang['es_ES'] = array_merge($lang['en_US'], $lang['es_ES']);
} else {
	$lang['es_ES'] = $lang['en_US'];
}

$lang['es_ES']['FileListingContent.ss']['NEXTDESCRIPTION'] = 'Ver la página siguiente';
$lang['es_ES']['FileListingContent.ss']['PREVIOUSDESCRIPTION'] = 'Ver la página anterior';
$lang['es_ES']['GalleryPage']['ANEXTENSION'] = 'Una Extensión';
$lang['es_ES']['GalleryPage']['CROPPEDRESIZE'] = 'Redimension';
$lang['es_ES']['GalleryPage']['DEFAULTIMAGE'] = 'Imagen por Defecto';
$lang['es_ES']['GalleryPage']['DOCUMENTS'] = 'Documentos';
$lang['es_ES']['GalleryPage']['EXTENSIONS'] = 'Extensiones';
$lang['es_ES']['GalleryPage']['FILEREPOSITORYLIVETRANSFERRED'] = 'El contenido de la tabla \'FileRepository_Live\' se ha transferido satisfactoriamente. También, la tabla ha sido renombrada a \'_obsolete_FileRepository_Live\'.';
$lang['es_ES']['GalleryPage']['FILEREPOSITORYTRANSFERRED'] = 'El contenido de la tabla \'FileRepository\' se ha transferido satisfactoriamente. También, la tabla ha sido renombrada a \'_obsolete_FileRepository\'.';
$lang['es_ES']['GalleryPage']['FILEREPOSITORYVERSIONREMOVED'] = 'La tabla \'FileRepository_versions\' ha sido removida satisfactoriamente';
$lang['es_ES']['GalleryPage']['FITTEDRESIZE'] = 'Redimensión Ajustada';
$lang['es_ES']['GalleryPage']['GALLERYLAYOUT'] = 'Layout de Galería';
$lang['es_ES']['GalleryPage']['ICON'] = 'Ícono';
$lang['es_ES']['GalleryPage']['IMAGEHEIGHT'] = 'Altura de la Imagen';
$lang['es_ES']['GalleryPage']['IMAGEOPTIONS'] = 'Opciones de Imagen';
$lang['es_ES']['GalleryPage']['IMAGESEXTENSIONCREATED'] = 'Se ha creado GalleryPage_Extension de Imágenes';
$lang['es_ES']['GalleryPage']['IMAGESSOUNDSVIDEOS'] = 'Imágenes, Audio o Video';
$lang['es_ES']['GalleryPage']['IMAGEWIDTH'] = 'Anchura de la Imagen';
$lang['es_ES']['GalleryPage']['LIMITDIMENSIONSINPOPUP'] = 'Limitar las Dimensiones de la Ventana Popup';
$lang['es_ES']['GalleryPage']['MEDIAPERLINE'] = 'Archivos Multimedia por Línea';
$lang['es_ES']['GalleryPage']['MEDIAPERPAGE'] = 'Archivos Multimedia por Página';
$lang['es_ES']['GalleryPage']['MEDIAPERPAGELIMIT'] = 'Limitar el Número de Archivos Multimedia por Página';
$lang['es_ES']['GalleryPage']['ORIGINALRESIZE'] = 'Redimensionar al Original';
$lang['es_ES']['GalleryPage']['PADDEDRESIZE'] = 'Cambio de tamaño amoldado';
$lang['es_ES']['GalleryPage']['PDFEXTENSIONCREATED'] = 'Se ha creado GalleryPage_Extension de Documentos PDF';
$lang['es_ES']['GalleryPage']['RESIZE'] = 'Redimensionar';
$lang['es_ES']['GalleryPage']['RESIZEBYHEIGHT'] = 'Redimensionar por lo Alto';
$lang['es_ES']['GalleryPage']['RESIZEBYRATIO'] = 'Redimensionar por Ratio';
$lang['es_ES']['GalleryPage']['RESIZEBYWIDTH'] = 'Redimensionar por lo Ancho';
$lang['es_ES']['GalleryPage']['RESIZINGMETHOD'] = 'Método de Redimensionamiento';
$lang['es_ES']['GalleryPage']['SHOWFILESFROM'] = 'Mostrar los archivos desde';
$lang['es_ES']['GalleryPage']['SHOWIMAGEDIMENSIONS'] = 'Mostrar las Dimensiones del Elemento de Medios';
$lang['es_ES']['GalleryPage']['SHOWSIZE'] = 'Mostrar el Tamaño del Elemento de Medios';
$lang['es_ES']['GalleryPage']['SHOWTITLE'] = 'Mostrar el Título del Elemento de Medios';
$lang['es_ES']['GalleryPage']['SORTEDBY'] = 'Ordenar por';
$lang['es_ES']['GalleryPage']['SOUNDSEXTENSIONCREATED'] = 'Se ha creado GalleryPage_Extension de Sonidos';
$lang['es_ES']['GalleryPage']['TITLE'] = 'Título';
$lang['es_ES']['GalleryPage']['TYPE'] = 'Tipo';
$lang['es_ES']['GalleryPage']['UPLOADDATEASC'] = 'Agregar Fecha Ascendente';
$lang['es_ES']['GalleryPage']['UPLOADDATEDESC'] = 'Agregar Fecha Descendente';
$lang['es_ES']['GalleryPage']['VIDEOSEXTENSIONCREATED'] = 'Se ha creado GalleryPage_Extension de Videos';
$lang['es_ES']['GalleryPage']['WEBEXTENSIONCREATED'] = 'Se ha creado GalleryPage_Extension de Páginas Web';
$lang['es_ES']['GalleryPage']['WEBPAGES'] = 'Páginas Web';
$lang['es_ES']['GalleryPageContent.ss']['NEXT'] = 'Siguiente &gt;';
$lang['es_ES']['GalleryPageContent.ss']['NEXTDESCRIPTION'] = 'Ver la página siguiente';
$lang['es_ES']['GalleryPageContent.ss']['PAGENUMBER'] = 'Ver la página número %s';
$lang['es_ES']['GalleryPageContent.ss']['PREVIOUS'] = '&lt; Anterior';
$lang['es_ES']['GalleryPageContent.ss']['PREVIOUSDESCRIPTION'] = 'Ver la página anterior';

?>