		<footer class="pageWidth">Подвал
		
			<!--include file BEGIN-->
			<?$APPLICATION->IncludeFile(
				$APPLICATION->GetTemplatePath("include_areas/copyright.php"),
				Array(),
				Array("MODE"=>"html")
			);?>
			<!--include file END-->
			
			<!--include file for section BEGIN-->
			<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "mysect", 
				"AREA_FILE_RECURSIVE"=>"Y",
				"EDIT_TEMPLATE" => "standard.php"
				),
				false
			);?>
			<!--include file for section END-->
		</footer>
   </body>
</html>