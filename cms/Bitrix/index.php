<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!doctype html>
<html lang="<?=LANGUAGE_ID?>">
    <head>
		
		<!--META's, etc BEGIN-->
        <?$APPLICATION->ShowHead()?>
		<!--META's, etc END-->
        
        <title><?$APPLICATION->ShowTitle()?></title>
        
        <!--CSS BEGIN-->
		<link rel="stylesheet" href="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH."/css/reset.css")?>" />
        <link rel="stylesheet" href="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH."/template_styles.css")?>" />
        <!--CSS END-->
        
        <!--JQUERY BEGIN-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!--JQUERY END-->
        
        <!--Javascript BEGIN-->
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/js.js");?>
        <!--Javascript END-->
		
		<link rel="icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH;?>/favicon.ico" />
        
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		
		<!--[if IE 6]>
            <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."./js/DD_belatedPNG-Fix/DD_belatedPNG_0.0.8a-min.js")?>
            <script>DD_belatedPNG.fix('div, ul, li, span, a, u, s, i, header, footer, strike, .myclass, #myid');</script>
        <![endif]-->
    
    </head>
    <body>
	
		<!--show admin panel BEGIN-->
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<!--show admin panel END-->
		
		<!--If admin BEGIN-->
		<?if($USER->IsAdmin()):?>
			<!--some code-->
		<?endif?>
		<!--If admin END-->
		
		<!--If home page BEGIN-->
		<?
		if ($GLOBALS["APPLICATION"]->GetCurPage() != "/") {
			#some code
		}
		?>
		<!--If home page END-->
		
        <header class="pageWidth"> 
		
			<!--include file BEGIN-->
        	<?$APPLICATION->IncludeFile(
				$APPLICATION->GetTemplatePath("include_areas/company_name.php"),
				Array(),
				Array("MODE"=>"html")
			);?>
			<!--include file END-->
			
			<!--menu component BEGIN-->
			<nav>Навигация
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"horizontal_multilevel",
					Array(
						"ROOT_MENU_TYPE" => "top", 
						"MAX_LEVEL" => "3", 
						"CHILD_MENU_TYPE" => "left", 
						"USE_EXT" => "Y", 
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => Array()
					)
				);?>
			</nav>
			<!--menu component END-->
			
			<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.jpg" id="header_logo" height="105" alt="" width="508" border="0"/>
			
			<!--home page link BEGIN-->
			<a href="/" title="Главная" id="company_logo"></a>
			<!--home page link END-->
			
			<!--search component BEGIN-->
			<div id="Search">
				<?$APPLICATION->IncludeComponent("bitrix:search.form","",Array(
						"USE_SUGGEST" => "N",
						"PAGE" => "#SITE_DIR#search/index.php"
					)
				);?> 
			</div>
			<!--search component END-->
			
			<!--auth BEGIN-->
			<div class="content-block">
				<div class="content-block-head">Авторизация</div>
				<div class="content-block-body">
				<?$APPLICATION->IncludeComponent(
					"bitrix:system.auth.form",
					".default",
					Array(
						"REGISTER_URL" => "/auth/", 
						"PROFILE_URL" => "/personal/profile/" 
					)
				);?>
				</div>
			</div>
			<!--auth END-->
        </header>
		
		<!--contents BEGIN-->
		<h1 id="pagetitle"><?$APPLICATION->ShowTitle(false)?></h1>
		
		<section id="Content" class="pageWidth">
			<article>Пост</article>
			<aside>Боковая колонка</aside>
            <div class="clear"></div>
        </section>
		<!--contents END-->
		
        <footer class="pageWidth">Подвал
		
			<!--include file BEGIN-->
			<?$APPLICATION->IncludeFile(
				$APPLICATION->GetTemplatePath("include_areas/copyright.php"),
				Array(),
				Array("MODE"=>"html")
			);?>
			<!--include file END-->
		</footer>
   </body>
</html>