<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8" />
	<title><?php bloginfo('name'); wp_title();  ?></title>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/1styles.css" />
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/lightbox.css" />
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/zepto.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slide.js"></script>
	<link rel="Shortcut Icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
</head>

<body>
	<div class="grayline"></div>
	<div class="content-container">
		<header class="normal">
			<section class="header">
				<nav>
						<?php
							wp_nav_menu(array(
								'theme_location'  => 'mainmenu',
								'container'       => false, 
								'container_class' => '', 
								'menu_class'      => '', 
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<menu>%3$s<li class="clear"></li></menu>'
							));
						?>
						
				</nav>
				
				<div class="clear"></div>
			</section>
		</header>
		<header class="action">
			<div class="grayline"></div>	
			<section class="header">
				<nav>
					<?php
							wp_nav_menu(array(
								'theme_location'  => 'mainmenu',
								'container'       => false, 
								'container_class' => '', 
								'menu_class'      => '', 
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<menu>%3$s<li class="clear"></li></menu>'
							));
						?>
				</nav>
				
				<div class="clear"></div>
			</section>
		</header>