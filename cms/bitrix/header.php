<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!doctype html>
<html lang="<?=LANGUAGE_ID?>">
    <head>
	
		<!--CSS BEGIN-->
		<link rel="stylesheet" href="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH."/css/reset.css")?>" />
        <!--CSS END-->
		
		<!--META's, etc BEGIN-->
        <?$APPLICATION->ShowHead()?>
		<!--META's, etc END-->
        
        <title><?$APPLICATION->ShowTitle()?></title>

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
		
		<!--Is USER Authorized BEGIN-->
		<?
		global $USER;
		if ($USER->IsAuthorized()) echo "Вы авторизованы!";
		?>
		<!--Is USER Authorized END-->
		
		<!--If admin BEGIN-->
		<?if($USER->IsAdmin()):?>
			<!--some code-->
		<?endif?>
		<!--If admin END-->
		
		<!--If home page BEGIN-->
		<?
		if ($APPLICATION->GetCurPage(false) === '/') {
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

			<!--home page link BEGIN-->
			<a href="/" title="Главная" id="company_logo">Home</a>
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