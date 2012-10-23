<?php
	add_theme_support('menus');

	register_sidebar(array(
		'name' => 'Recent',
		'id' => 'best',
		'description' => 'recent stuffs',
		'before_widget' => "<div>",
		'after_widget' => "</div>",	
		'before_title' => '<h3>',
		'after_title' => "</h3>"
	));
