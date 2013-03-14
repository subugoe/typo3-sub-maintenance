<?php require_once('init.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- BASIC -->
	<meta charset="utf-8">
	<title><?php echo $pageTitle ?></title>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- MOBILE -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" href="res/css/style.css">

	<!-- FAVICONS -->
	<!--
	<link rel="shortcut icon" href="res/favicon/favicon.ico">
	<link rel="apple-touch-icon" href="res/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="res/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="res/favicon/apple-touch-icon-114x114.png">
	-->

</head>
<body>

	<div class="container">

		<!-- HEAD LINE -->
		<div class="sixteen columns" id="bar">
			<p><?php echo $headerline; ?></p>
		</div>

		<!-- HEAD -->
		<div class="sixteen columns" id="head">
			<h1><?php echo $h1 ;?></h1>
		</div>

		<!-- MAIN CONTENT -->
		<div class="sixteen columns" id="text">

			<!-- DE -->
			<div class="alpha eight columns">
				<?php echo markdown(file_get_contents('./txt/de.md')); ?>
			</div>

			<!-- EN -->
			<div class="omega eight columns">
				<?php echo markdown(file_get_contents('txt/en.md')); ?>
			</div>

		</div>
		
		<!-- FOOTER -->
		<div class="sixteen columns" id="footer">
			<p><?php echo $footerline; ?></p>
		</div>		

	</div>

</body>
</html>
