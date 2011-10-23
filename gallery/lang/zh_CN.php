<?php

/**
 * Chinese (China) language pack
 * @package modules: gallery
 * @subpackage i18n
 */

i18n::include_locale_file('modules: gallery', 'en_US');

global $lang;

if(array_key_exists('zh_CN', $lang) && is_array($lang['zh_CN'])) {
	$lang['zh_CN'] = array_merge($lang['en_US'], $lang['zh_CN']);
} else {
	$lang['zh_CN'] = $lang['en_US'];
}

$lang['zh_CN']['GalleryPage']['ANEXTENSION'] = '一个扩展名';
$lang['zh_CN']['GalleryPage']['CROPPEDRESIZE'] = '剪去多余部分以重新调整大小';
$lang['zh_CN']['GalleryPage']['DEFAULTIMAGE'] = '缺省图象';
$lang['zh_CN']['GalleryPage']['DOCUMENTS'] = '文档w';
$lang['zh_CN']['GalleryPage']['EXTENSIONS'] = '扩展名';
$lang['zh_CN']['GalleryPage']['FILEREPOSITORYLIVETRANSFERRED'] = '”FileRepository_Live“（文件库_正式发布）表中的数据被成功传送。另外，该表被重新命名为“_obsolete_FileRepository_Live“（废弃文件库_正式发布）';
$lang['zh_CN']['GalleryPage']['FILEREPOSITORYTRANSFERRED'] = '”FileRepository“（文件库）表中的数据被成功传送。另外，该表被重新命名为“_obsolete_FileRepository“（废弃文件库）';
$lang['zh_CN']['GalleryPage']['FILEREPOSITORYVERSIONREMOVED'] = '”FileRepository_versuins“（文件库_版本）表被成功删除。';
$lang['zh_CN']['GalleryPage']['FITTEDRESIZE'] = '拉伸或压缩以重新调整大小';
$lang['zh_CN']['GalleryPage']['GALLERYLAYOUT'] = '图库页面布局';
$lang['zh_CN']['GalleryPage']['ICON'] = '图标';
$lang['zh_CN']['GalleryPage']['IMAGEHEIGHT'] = '图像高度';
$lang['zh_CN']['GalleryPage']['IMAGEOPTIONS'] = '图像可选项';
$lang['zh_CN']['GalleryPage']['IMAGESEXTENSIONCREATED'] = '新建图像GalleryPage_Extension（图库页扩展名）';
$lang['zh_CN']['GalleryPage']['IMAGESSOUNDSVIDEOS'] = '图像，音频或视频';
$lang['zh_CN']['GalleryPage']['IMAGEWIDTH'] = '图像宽度';
$lang['zh_CN']['GalleryPage']['LIMITDIMENSIONSINPOPUP'] = '在弹出窗口中限制尺寸';
$lang['zh_CN']['GalleryPage']['MEDIAPERLINE'] = '一行的媒体文件';
$lang['zh_CN']['GalleryPage']['MEDIAPERPAGE'] = '一网页的媒体文件';
$lang['zh_CN']['GalleryPage']['MEDIAPERPAGELIMIT'] = '限制一网页的媒体文件的数量';
$lang['zh_CN']['GalleryPage']['ORIGINALRESIZE'] = '原始大小';
$lang['zh_CN']['GalleryPage']['PADDEDRESIZE'] = '补足空白部分以重新调整大小';
$lang['zh_CN']['GalleryPage']['PDFEXTENSIONCREATED'] = '新建文档GalleryPage_Extension（图库页扩展名）';
$lang['zh_CN']['GalleryPage']['RESIZE'] = '重新调整大小';
$lang['zh_CN']['GalleryPage']['RESIZEBYHEIGHT'] = '以高度为基重新调整大小';
$lang['zh_CN']['GalleryPage']['RESIZEBYRATIO'] = '以长宽比例为基重新调整大小';
$lang['zh_CN']['GalleryPage']['RESIZEBYWIDTH'] = '以宽度为基重新调整大小';
$lang['zh_CN']['GalleryPage']['RESIZINGMETHOD'] = '重新调整大小的方法';
$lang['zh_CN']['GalleryPage']['SHOWFILESFROM'] = '显示文件出处';
$lang['zh_CN']['GalleryPage']['SHOWIMAGEDIMENSIONS'] = '显示媒体尺寸';
$lang['zh_CN']['GalleryPage']['SHOWSIZE'] = '显示媒体大小';
$lang['zh_CN']['GalleryPage']['SHOWTITLE'] = '显示媒体标题';
$lang['zh_CN']['GalleryPage']['SORTEDBY'] = '排序';
$lang['zh_CN']['GalleryPage']['SOUNDSEXTENSIONCREATED'] = '新建音频GalleryPage_Extension（图库页扩展名）';
$lang['zh_CN']['GalleryPage']['TITLE'] = '标题';
$lang['zh_CN']['GalleryPage']['TYPE'] = '类型';
$lang['zh_CN']['GalleryPage']['UPLOADDATEASC'] = '以上载日期升序排列';
$lang['zh_CN']['GalleryPage']['UPLOADDATEDESC'] = '以上传日期降序排列';
$lang['zh_CN']['GalleryPage']['VIDEOSEXTENSIONCREATED'] = '新建视频GalleryPage_Extension（图库页扩展名）';
$lang['zh_CN']['GalleryPage']['WEBEXTENSIONCREATED'] = '新建网页GalleryPage_Extension（图库页扩展名）';
$lang['zh_CN']['GalleryPage']['WEBPAGES'] = '网页';
$lang['zh_CN']['GalleryPageContent.ss']['NEXT'] = '后一页》';
$lang['zh_CN']['GalleryPageContent.ss']['NEXTDESCRIPTION'] = '溜览后一页';
$lang['zh_CN']['GalleryPageContent.ss']['PAGENUMBER'] = '溜览第%s页';
$lang['zh_CN']['GalleryPageContent.ss']['PREVIOUS'] = '《前一页';
$lang['zh_CN']['GalleryPageContent.ss']['PREVIOUSDESCRIPTION'] = '溜览前一页';

?>