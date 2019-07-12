<!doctype html>
<html class="no-js" lang="pt">

<head>
    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=yes">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="theme-color" content="#000000">
		<link rel="icon" href="assets/images/favicon.png" sizes="16x16 32x32" type="image/jpg">

		<!-- Metas para o Google -->
		<title><?php @print($title); ?></title>
		<meta name="description" content="<?php @print($description); ?>">
		<meta name="keywords" content="<?php @print($keywords); ?>">

		<!-- Metas para o Facebook -->
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?php @print($facebook_title); ?>" />
		<meta property="og:url" content="<?php @print($facebook_url); ?>"/>
		<meta property="og:site_name" content="<?php @print($facebook_site_name); ?>" />
		<meta property="og:description" content="<?php @print($facebook_description); ?>"/>
		<meta property="og:image" content="<?php @print($facebook_image); ?>" />
		<?php if (!empty($facebook_image_width)): ?><meta property="og:image:width" content="<?php @print($facebook_image_width); ?>" /><?php endif ?>
		<?php if (!empty($facebook_image_height)): ?><meta property="og:image:height" content="<?php @print($facebook_image_height); ?>" /><?php endif ?>
		<meta property="fb:app_id" content="501123709922257" />

		<title>Media Solution Digital</title>

		<?php if (strpos($_SERVER['HTTP_USER_AGENT'], "Google Page Speed Insights") === false): ?>
			<!-- O que tiver aqui dentro o page speed do Google não consegue ver -->
		<?php endif ?>
    <!-- Favicon -->
	
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- CSS 
    ========================= -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fonts CSS -->

    <script src="https://kit.fontawesome.com/edcfdf1ead.js"></script>
    
	<!-- <link href="assets/css/fontawesome.css" rel="stylesheet">
 	<link href="assets/css/brands.css" rel="stylesheet">
  	<link href="assets/css/solid.css" rel="stylesheet"> -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
	
</head>