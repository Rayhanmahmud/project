<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Industrious by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<?php wp_head();?>

	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="<?php echo site_url();?>">Industrious</a>
				<nav>
					<a href="">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
		<?php 
		
		
		require_once get_template_directory().'/template-parts/common/nav.php';
		
		
		?>
