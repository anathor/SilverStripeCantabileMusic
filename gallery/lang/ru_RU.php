<?php

/**
 * Russian (Russia) language pack
 * @package modules: gallery
 * @subpackage i18n
 */

i18n::include_locale_file('modules: gallery', 'en_US');

global $lang;

if(array_key_exists('ru_RU', $lang) && is_array($lang['ru_RU'])) {
	$lang['ru_RU'] = array_merge($lang['en_US'], $lang['ru_RU']);
} else {
	$lang['ru_RU'] = $lang['en_US'];
}

$lang['ru_RU']['FileListingContent.ss']['NEXT'] = 'Следующ. &gt;';
$lang['ru_RU']['FileListingContent.ss']['NEXTDESCRIPTION'] = 'См. следующ. страницу';
$lang['ru_RU']['FileListingContent.ss']['PAGENUMBER'] = 'См. страницу номер %s';
$lang['ru_RU']['FileListingContent.ss']['PREVIOUS'] = '&lt; Предыдущ.';
$lang['ru_RU']['FileListingContent.ss']['PREVIOUSDESCRIPTION'] = 'См. предыдущ. страницу';
$lang['ru_RU']['GalleryPage']['ANEXTENSION'] = 'Расширение';
$lang['ru_RU']['GalleryPage']['CROPPEDRESIZE'] = 'Обрезать';
$lang['ru_RU']['GalleryPage']['DEFAULTIMAGE'] = 'Изобр. по умолчанию';
$lang['ru_RU']['GalleryPage']['DOCUMENTS'] = 'Документы';
$lang['ru_RU']['GalleryPage']['EXTENSIONS'] = 'Расширения';
$lang['ru_RU']['GalleryPage']['FILEREPOSITORYLIVETRANSFERRED'] = 'Содержимое таблицы \'FileRepository_Live\' успешно перемещено. Таблица была переименована в \'_obsolete_FileRepository_Live\'.';
$lang['ru_RU']['GalleryPage']['FILEREPOSITORYTRANSFERRED'] = 'Содержимое таблицы \'FileRepository\' успешно перемещено. Таблица была переименована в \'_obsolete_FileRepository\'.';
$lang['ru_RU']['GalleryPage']['FILEREPOSITORYVERSIONREMOVED'] = 'Таблица \'FileRepository_versions\' успешно удалена.';
$lang['ru_RU']['GalleryPage']['FITTEDRESIZE'] = 'Подогнать';
$lang['ru_RU']['GalleryPage']['GALLERYLAYOUT'] = 'Макет галереи';
$lang['ru_RU']['GalleryPage']['ICON'] = 'Иконка';
$lang['ru_RU']['GalleryPage']['IMAGEHEIGHT'] = 'Высота изобр.';
$lang['ru_RU']['GalleryPage']['IMAGEOPTIONS'] = 'Опции изображения';
$lang['ru_RU']['GalleryPage']['IMAGESEXTENSIONCREATED'] = 'Расширение GalleryPage_Extension для изобр. создано';
$lang['ru_RU']['GalleryPage']['IMAGESSOUNDSVIDEOS'] = 'Изобр., аудио или видео';
$lang['ru_RU']['GalleryPage']['IMAGEWIDTH'] = 'Ширина изобр.';
$lang['ru_RU']['GalleryPage']['LIMITDIMENSIONSINPOPUP'] = 'Ограничить размеры во всплывающем окне';
$lang['ru_RU']['GalleryPage']['MEDIAPERLINE'] = 'Медиа файлов в строке';
$lang['ru_RU']['GalleryPage']['MEDIAPERPAGE'] = 'Медиа файлов на странице';
$lang['ru_RU']['GalleryPage']['MEDIAPERPAGELIMIT'] = 'Ограничить количество медиа файлов на странице';
$lang['ru_RU']['GalleryPage']['ORIGINALRESIZE'] = 'Измен. размеров оригинала';
$lang['ru_RU']['GalleryPage']['PADDEDRESIZE'] = 'Надставить';
$lang['ru_RU']['GalleryPage']['PDFEXTENSIONCREATED'] = 'Расширение GalleryPage_Extension для PDF файлов создано';
$lang['ru_RU']['GalleryPage']['RESIZE'] = 'Измен. размеры';
$lang['ru_RU']['GalleryPage']['RESIZEBYHEIGHT'] = 'Измен. по высоте';
$lang['ru_RU']['GalleryPage']['RESIZEBYRATIO'] = 'Измен. по пропорции';
$lang['ru_RU']['GalleryPage']['RESIZEBYWIDTH'] = 'Измен. по ширине';
$lang['ru_RU']['GalleryPage']['RESIZINGMETHOD'] = 'Метод измен. размеров';
$lang['ru_RU']['GalleryPage']['SHOWFILESFROM'] = 'Показать файлы из';
$lang['ru_RU']['GalleryPage']['SHOWIMAGEDIMENSIONS'] = 'Показывать размеры файла';
$lang['ru_RU']['GalleryPage']['SHOWSIZE'] = 'Показывать объем файла';
$lang['ru_RU']['GalleryPage']['SHOWTITLE'] = 'Показывать заголовок';
$lang['ru_RU']['GalleryPage']['SORTEDBY'] = 'Упорядочить по';
$lang['ru_RU']['GalleryPage']['SOUNDSEXTENSIONCREATED'] = 'Расширение GalleryPage_Extension для аудио создано';
$lang['ru_RU']['GalleryPage']['TITLE'] = 'Заголовок';
$lang['ru_RU']['GalleryPage']['TYPE'] = 'Тип';
$lang['ru_RU']['GalleryPage']['UPLOADDATEASC'] = 'Дата загр. от старых к новым';
$lang['ru_RU']['GalleryPage']['UPLOADDATEDESC'] = 'Дата загр. от новых к старым';
$lang['ru_RU']['GalleryPage']['VIDEOSEXTENSIONCREATED'] = 'Расширение GalleryPage_Extension для видео создано';
$lang['ru_RU']['GalleryPage']['WEBEXTENSIONCREATED'] = 'Расширение GalleryPage_Extension для веб страниц создано';
$lang['ru_RU']['GalleryPage']['WEBPAGES'] = 'Веб страницы';
$lang['ru_RU']['GalleryPageContent.ss']['NEXT'] = 'След. &gt;';
$lang['ru_RU']['GalleryPageContent.ss']['NEXTDESCRIPTION'] = 'Перейти на след. страницу';
$lang['ru_RU']['GalleryPageContent.ss']['PAGENUMBER'] = 'Перейти на стр. %s';
$lang['ru_RU']['GalleryPageContent.ss']['PREVIOUS'] = '&lt; Предыд.';
$lang['ru_RU']['GalleryPageContent.ss']['PREVIOUSDESCRIPTION'] = 'Перейти на предыд. страницу';

?>