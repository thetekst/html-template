<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Каталог книг");
?>

<!--contents BEGIN-->
<h1 id="pagetitle"><?$APPLICATION->ShowTitle(false)?></h1>

<section id="Content" class="pageWidth">
	<article>Пост</article>
	<aside>Боковая колонка</aside>
	<div class="clear"></div>
</section>
<!--contents END-->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>