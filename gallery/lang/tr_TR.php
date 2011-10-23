<?php

/**
 * Turkish (Turkey) language pack
 * @package modules: gallery
 * @subpackage i18n
 */

i18n::include_locale_file('modules: gallery', 'en_US');

global $lang;

if(array_key_exists('tr_TR', $lang) && is_array($lang['tr_TR'])) {
	$lang['tr_TR'] = array_merge($lang['en_US'], $lang['tr_TR']);
} else {
	$lang['tr_TR'] = $lang['en_US'];
}

$lang['tr_TR']['FileListingContent.ss']['NEXT'] = 'Sonraki &gt;';
$lang['tr_TR']['FileListingContent.ss']['NEXTDESCRIPTION'] = 'Sonraki sayfayı görüntüle';
$lang['tr_TR']['FileListingContent.ss']['PAGENUMBER'] = '%s numaralı sayfayı görüntüle';
$lang['tr_TR']['FileListingContent.ss']['PREVIOUS'] = '&lt; Önceki';
$lang['tr_TR']['FileListingContent.ss']['PREVIOUSDESCRIPTION'] = 'Önceki sayfayı görüntüle';
$lang['tr_TR']['GalleryPage']['ANEXTENSION'] = 'Ek';
$lang['tr_TR']['GalleryPage']['CROPPEDRESIZE'] = 'Kesilmiş Yeni Boyut';
$lang['tr_TR']['GalleryPage']['DEFAULTIMAGE'] = 'Varsayılan İmaj';
$lang['tr_TR']['GalleryPage']['DOCUMENTS'] = 'Dökümanlar';
$lang['tr_TR']['GalleryPage']['EXTENSIONS'] = 'Ekler';
$lang['tr_TR']['GalleryPage']['FILEREPOSITORYLIVETRANSFERRED'] = '\'FileRepository_Live\' tablosundaki bilgiler başarıyla taşındı. Tablo ismi \'_obsolete_FileRepository_Live\' olarak değiştirildi.';
$lang['tr_TR']['GalleryPage']['FILEREPOSITORYTRANSFERRED'] = '\'FileRepository\' tablosundaki bilgiler başarıyla taşındı. Tablo ismi \'_obsolete_FileRepository\' olarak değiştirildi.';
$lang['tr_TR']['GalleryPage']['FILEREPOSITORYVERSIONREMOVED'] = '\'FileRepository_versions\' başarıyla kaldırıldı.';
$lang['tr_TR']['GalleryPage']['FITTEDRESIZE'] = 'Ayarlanmış Yeni Boyut';
$lang['tr_TR']['GalleryPage']['GALLERYLAYOUT'] = 'Galeri Şablonu';
$lang['tr_TR']['GalleryPage']['ICON'] = 'İkon';
$lang['tr_TR']['GalleryPage']['IMAGEHEIGHT'] = 'İmaj Yüksekliği';
$lang['tr_TR']['GalleryPage']['IMAGEOPTIONS'] = 'İmaj Seçenekleri';
$lang['tr_TR']['GalleryPage']['IMAGESEXTENSIONCREATED'] = 'GalleryPage_Extension imaj dosyaları yaratıldı';
$lang['tr_TR']['GalleryPage']['IMAGESSOUNDSVIDEOS'] = 'İmajlar, Ses dosyaları veya Videolar';
$lang['tr_TR']['GalleryPage']['IMAGEWIDTH'] = 'İmaj Genişliği';
$lang['tr_TR']['GalleryPage']['LIMITDIMENSIONSINPOPUP'] = 'Popup pencerede boyutlandır';
$lang['tr_TR']['GalleryPage']['MEDIAPERLINE'] = 'Her satır için multimedya dosyası';
$lang['tr_TR']['GalleryPage']['MEDIAPERPAGE'] = 'Her sayfa için multimedya dosyası';
$lang['tr_TR']['GalleryPage']['MEDIAPERPAGELIMIT'] = 'Her sayfa için geçerli multimedya dosya sayısını belirleyin';
$lang['tr_TR']['GalleryPage']['ORIGINALRESIZE'] = 'Orijinal Boyut';
$lang['tr_TR']['GalleryPage']['PADDEDRESIZE'] = 'Eklenmiş Yeni Boyut';
$lang['tr_TR']['GalleryPage']['PDFEXTENSIONCREATED'] = 'GalleryPage_Extension PDF dökümanları yaratıldı';
$lang['tr_TR']['GalleryPage']['RESIZE'] = 'Yeniden Boyutlandır';
$lang['tr_TR']['GalleryPage']['RESIZEBYHEIGHT'] = 'Yüksekliğini Yeniden Boyutlandır';
$lang['tr_TR']['GalleryPage']['RESIZEBYRATIO'] = 'Yüzde ile Yeniden Boyutlandır';
$lang['tr_TR']['GalleryPage']['RESIZEBYWIDTH'] = 'Genişliğini Yeniden Boyutlandır';
$lang['tr_TR']['GalleryPage']['RESIZINGMETHOD'] = 'Yeniden boyutlandırma metodu';
$lang['tr_TR']['GalleryPage']['SHOWFILESFROM'] = 'Dosyaları Göster';
$lang['tr_TR']['GalleryPage']['SHOWIMAGEDIMENSIONS'] = 'Multimedya boyutlarını göster';
$lang['tr_TR']['GalleryPage']['SHOWSIZE'] = 'Multimedya büyüklüğünü göster';
$lang['tr_TR']['GalleryPage']['SHOWTITLE'] = 'Multimedya adını göster';
$lang['tr_TR']['GalleryPage']['SORTEDBY'] = 'Sıralama Metodu';
$lang['tr_TR']['GalleryPage']['SOUNDSEXTENSIONCREATED'] = 'GalleryPage_Extension ses dosyaları yaratıldı';
$lang['tr_TR']['GalleryPage']['TITLE'] = 'Ad';
$lang['tr_TR']['GalleryPage']['TYPE'] = 'Tip';
$lang['tr_TR']['GalleryPage']['UPLOADDATEASC'] = 'En son yüklenene göre';
$lang['tr_TR']['GalleryPage']['UPLOADDATEDESC'] = 'İlk yüklenene göre';
$lang['tr_TR']['GalleryPage']['VIDEOSEXTENSIONCREATED'] = 'GalleryPage_Extension video dosyaları yaratıldı';
$lang['tr_TR']['GalleryPage']['WEBEXTENSIONCREATED'] = 'GalleryPage_Extension web sayfaları yaratıldı';
$lang['tr_TR']['GalleryPage']['WEBPAGES'] = 'Web Sayfaları';
$lang['tr_TR']['GalleryPageContent.ss']['NEXT'] = 'Sonraki&gt;';
$lang['tr_TR']['GalleryPageContent.ss']['NEXTDESCRIPTION'] = 'Sonraki sayfayı göster';
$lang['tr_TR']['GalleryPageContent.ss']['PAGENUMBER'] = '%s nolu sayfayı göster';
$lang['tr_TR']['GalleryPageContent.ss']['PREVIOUS'] = '&lt; Önceki';
$lang['tr_TR']['GalleryPageContent.ss']['PREVIOUSDESCRIPTION'] = 'Önceki sayfayı göster';

?>