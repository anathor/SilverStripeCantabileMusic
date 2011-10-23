<?php

/**
 * Portuguese (Portugal) language pack
 * @package modules: gallery
 * @subpackage i18n
 */

i18n::include_locale_file('modules: gallery', 'en_US');

global $lang;

if(array_key_exists('pt_PT', $lang) && is_array($lang['pt_PT'])) {
	$lang['pt_PT'] = array_merge($lang['en_US'], $lang['pt_PT']);
} else {
	$lang['pt_PT'] = $lang['en_US'];
}

$lang['pt_PT']['FileListingContent.ss']['NEXT'] = 'Próxima &gt;';
$lang['pt_PT']['FileListingContent.ss']['NEXTDESCRIPTION'] = 'Ver a próxima página';
$lang['pt_PT']['FileListingContent.ss']['PAGENUMBER'] = 'Ver a página %s';
$lang['pt_PT']['FileListingContent.ss']['PREVIOUS'] = '&lt; Anterior';
$lang['pt_PT']['FileListingContent.ss']['PREVIOUSDESCRIPTION'] = 'Ver a página anterior';
$lang['pt_PT']['GalleryPage']['ANEXTENSION'] = 'Uma extensão';
$lang['pt_PT']['GalleryPage']['CROPPEDRESIZE'] = 'Cortar ao redimensionar';
$lang['pt_PT']['GalleryPage']['DEFAULTIMAGE'] = 'Imagem pré-definida';
$lang['pt_PT']['GalleryPage']['DOCUMENTS'] = 'Documentos';
$lang['pt_PT']['GalleryPage']['EXTENSIONS'] = 'Extensões';
$lang['pt_PT']['GalleryPage']['FILEREPOSITORYLIVETRANSFERRED'] = 'Os dados da tabela \'FileRepository_Live\' foram transferidos com sucesso. A tabela original foi renomeada para \'_obsolete_FileRepository_Live\'.';
$lang['pt_PT']['GalleryPage']['FILEREPOSITORYTRANSFERRED'] = 'Os dados da tabela \'FileRepository\' foram transferidos com sucesso. A tabela original foi renomeada para \'_obsolete_FileRepository\'.';
$lang['pt_PT']['GalleryPage']['FILEREPOSITORYVERSIONREMOVED'] = 'A tabela \'FileRepository_versions\' foi apagada com sucesso.';
$lang['pt_PT']['GalleryPage']['FITTEDRESIZE'] = 'Esticar ao redimensionar';
$lang['pt_PT']['GalleryPage']['GALLERYLAYOUT'] = 'Layout da Galeria';
$lang['pt_PT']['GalleryPage']['ICON'] = 'Icon';
$lang['pt_PT']['GalleryPage']['IMAGEHEIGHT'] = 'Altura da imagem';
$lang['pt_PT']['GalleryPage']['IMAGEOPTIONS'] = 'Opções de Imagem';
$lang['pt_PT']['GalleryPage']['IMAGESEXTENSIONCREATED'] = 'Imagens GalleryPage_Extension criada';
$lang['pt_PT']['GalleryPage']['IMAGESSOUNDSVIDEOS'] = 'Imagens, Sons ou Videos';
$lang['pt_PT']['GalleryPage']['IMAGEWIDTH'] = 'Largura da imagem';
$lang['pt_PT']['GalleryPage']['LIMITDIMENSIONSINPOPUP'] = 'Limitar as dimensões da janela popup';
$lang['pt_PT']['GalleryPage']['MEDIAPERLINE'] = 'Imagens/Ficheiros por linha';
$lang['pt_PT']['GalleryPage']['MEDIAPERPAGE'] = 'Imagens/Ficheiros por página';
$lang['pt_PT']['GalleryPage']['MEDIAPERPAGELIMIT'] = 'Limitar o número de imagens/ficheiros por página.';
$lang['pt_PT']['GalleryPage']['ORIGINALRESIZE'] = 'Redimensionar para o original';
$lang['pt_PT']['GalleryPage']['PADDEDRESIZE'] = 'Deixar espaçamento ao redimensionar';
$lang['pt_PT']['GalleryPage']['PDFEXTENSIONCREATED'] = 'Documentos Pdf GalleryPage_Extension criada';
$lang['pt_PT']['GalleryPage']['RESIZE'] = 'Redimensionar';
$lang['pt_PT']['GalleryPage']['RESIZEBYHEIGHT'] = 'Redimensionar a altura por';
$lang['pt_PT']['GalleryPage']['RESIZEBYRATIO'] = 'Redimensionar por rácio';
$lang['pt_PT']['GalleryPage']['RESIZEBYWIDTH'] = 'Redimensionar a largura por';
$lang['pt_PT']['GalleryPage']['RESIZINGMETHOD'] = 'Métodos de redimensionamento';
$lang['pt_PT']['GalleryPage']['SHOWFILESFROM'] = 'Mostrar ficheiros de';
$lang['pt_PT']['GalleryPage']['SHOWIMAGEDIMENSIONS'] = 'Mostras as Dimensões da Imagem/Ficheiro';
$lang['pt_PT']['GalleryPage']['SHOWSIZE'] = 'Mostrar tamanho da Imagem/Ficheiro';
$lang['pt_PT']['GalleryPage']['SHOWTITLE'] = 'Mostrar título da Imagem/Ficheiro';
$lang['pt_PT']['GalleryPage']['SORTEDBY'] = 'Ordenar por';
$lang['pt_PT']['GalleryPage']['SOUNDSEXTENSIONCREATED'] = 'Sons GalleryPage_Extension criada';
$lang['pt_PT']['GalleryPage']['TITLE'] = 'Título';
$lang['pt_PT']['GalleryPage']['TYPE'] = 'Tipo';
$lang['pt_PT']['GalleryPage']['UPLOADDATEASC'] = 'Data de envio ascendente';
$lang['pt_PT']['GalleryPage']['UPLOADDATEDESC'] = 'Data de envio descendente';
$lang['pt_PT']['GalleryPage']['VIDEOSEXTENSIONCREATED'] = 'Videos GalleryPage_Extensions criada';
$lang['pt_PT']['GalleryPage']['WEBEXTENSIONCREATED'] = 'Páginas Web GalleryPage_Extension criada';
$lang['pt_PT']['GalleryPage']['WEBPAGES'] = 'Páginas Web';
$lang['pt_PT']['GalleryPageContent.ss']['NEXT'] = 'Próxima &gt;';
$lang['pt_PT']['GalleryPageContent.ss']['NEXTDESCRIPTION'] = 'Vêr a próxima página';
$lang['pt_PT']['GalleryPageContent.ss']['PAGENUMBER'] = 'Vêr página número %s';
$lang['pt_PT']['GalleryPageContent.ss']['PREVIOUS'] = '&lt; Anterior';
$lang['pt_PT']['GalleryPageContent.ss']['PREVIOUSDESCRIPTION'] = 'Vêr página anterior';

?>