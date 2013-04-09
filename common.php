<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require_once(pathinfo(__FILE__, PATHINFO_DIRNAME)."/settings.php");

function reverseDate($date){
    $dateArray = explode("/", $date);
    $reversedDate = $dateArray[2]."/".$dateArray[1]."/".$dateArray[0];
    return $reversedDate;
}

function buildTopPage($pageName){
	openHtml();
	getHead($pageName);
	getHeader($pageName);
	openBody();
}

function buildBottomPage(){
	closeBody();
	getFooter();
	getAnalytics();
	closeHtml();
}

function openHtml(){
	?> <html xmlns="http://www.w3.org/1999/xhtml"> <?php
}

function getHead($pageName){
	?>
	<head>
		<meta name="description" content="Author: Fabio Arcidiacono, Designer: Alice Vittoria Cappelletti, " /><!-- TODO one foreach page -->
		<meta name="robots" content="index, follow" />
		<meta name="googlebot" content="index, follow" />
		<meta name="google" content="notranslate" />
		<meta name="copyright" content="Arcidiacono Fabio 2012" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Skorpion S.A.T.</title><!-- TODO one foreach page -->

		<link rel="shortcut icon" href= "<?php echo IMAGES_PATH."favicon.ico" ?>"/>
		
		<link rel="stylesheet" type="text/css" href="http://css-reset-sheet.googlecode.com/svn/reset.css" />
		<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
		<link href="<?php echo CSS_PATH."style.css" ?>" rel="stylesheet" type="text/css" media="screen" />
		
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="<?php echo JS_PATH."slideshow.js" ?> "></script>
	</head>
	<?php
}

function openBody(){
	?> <body> <?php
}

function getHeader($pageName){
	?>
	<div id="wrapper">
	<div id="header">
                <div id="logo" class="left"><a href="board.php"><img src="<?php echo IMAGES_PATH."skorpion.png" ?>" /></a></div>
                <div id="container-right" class="right">
                    <div id="text" class="shadow"><a href="board.php">Skorpion S.A.T.</a></div>
                    <div id="menu">
                        <ul>
                           <li <?php if($pageName == "board") echo "class=\"active\""; ?>><a href='board.php'><span class="shadow">News</span></a></li>
                           <li <?php if($pageName == "who") echo "class=\"active\""; ?>><a href='who.php'><span class="shadow">Chi siamo</span></a></li>
                           <li <?php if($pageName == "play") echo "class=\"active\""; ?>><a href='play.php'><span class="shadow">Gioca con noi</span></a></li>
                           <li <?php if($pageName == "forum") echo "class=\"active\""; ?>><a href='forum'><span class="shadow">Forum</span></a></li>
                           <li <?php if($pageName == "gallery") echo "class=\"active last\""; else echo "class=\"last\"" ?>><a href='gallery.php'><span class="shadow">Gallery</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
        </div>
	<?php
}

function getFooter(){
	?>
	<div id="footer">
                <p>skorpionsat.com. &copy; 2013. Developed By <a href="http://www.linkedin.com/pub/fabio-arcidiacono/61/307/9a0">Arcidiacono Fabio</a>.
		Designed By <a href="#">Alice Vittoria Cappelletti</a>
		<div id="admin"><p><a href="<?php echo ADMIN_ROOT ?>">Pannello di controllo</a></p></div>
        </div></div>
	<?php
}

function getAnalytics(){
       ?>
       <!-- GOOGLE ANALYTICS -->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-32258069-1']);
		_gaq.push(['_setDomainName', 'skorpionsat.com']);
		_gaq.push(['_trackPageview']);
	
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<?php 
}

function closeBody(){
	?></body> <?php
}

function closeHtml(){
	?> </html> <?php
}