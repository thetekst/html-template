<?
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////Includ's
require_once("php/adds.php");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////Objects

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////Globals variables

?>
<!--
	<section></section> - display:block; 
    <kbd></kbd> - строчный элемент: display:block; font-family: [по умолчанию моноширинный шрифт: monospace]. Поэтому выставляем свой
    <code></code> - строчный элемент: display:block; font-family: [по умолчанию моноширинный шрифт: monospace]. Поэтому выставляем свой. Этот текст еще уменьшенный. Поэтому выставляем для него font-size
    <samp></samp> - строчный элемент: display:block; font-family: [по умолчанию моноширинный шрифт: monospace]. Поэтому выставляем свой.
    <em></em> - строчный элемент: display:block; font-style:normal;
    <strong></strong> - строчный элемент: display:block; font-weight:normal;
    <tt></tt> - строчный элемент: display:block; font-family: [по умолчанию моноширинный шрифт: monospace]. Поэтому выставляем свой
    <var></var> - строчный элемент: display:block; font-style:normal;
    <ins></ins> - display:block; text-decoration:none;
    <mark></mark> - display:block; background: none;
-->
<!doctype html>
<html lang="ru">
	<head>
		<!--META's BEGIN-->
		<meta charset="utf-8">
		<!--META's END-->

		<title>HTML5</title>

		<!--CSS BEGIN-->
		<link rel="stylesheet" href="./css/style.css" />
		<link rel="icon" type="image/x-icon" href="./favicon.ico" />
		<!--CSS END-->

		<!--Javascript BEGIN-->
		<script src="./js/jquery-1.8.2.min.js"></script>
		<script src="./js/script.js"></script>
		<!--Javascript END-->
		
		<!--[if IE]>
		  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!--[if IE 6]>
            <script src="./js/DD_belatedPNG-Fix/DD_belatedPNG_0.0.8a-min.js"></script>
            <script>DD_belatedPNG.fix('div, ul, li, span, a, u, s, i, header, footer, strike, .myclass, #myid');</script>
        <![endif]-->
	  
	</head>
	<body>
		<!--GlobalContainer BEGIN-->
		<div id="GlobalContainer">

			<!--Header BEGIN-->
			<header class="widthController">
				<nav id="">
					<table id="main_menu">
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</nav>
			</header>
			<!--Header END-->

			<!--Content BEGIN-->
			<div id="content">
				<div id="">Пост</div>
				<aside id="sidebar_right">Боковая колонка</aside>
			</div>
			<!--Content END-->

			<!--Footer BEGIN-->
			<footer>
				<div id=""></div>
			</footer>
			<!--Footer END-->

		</div>
		<!--GlobalContainer END-->

	</body>
</html>