<?php
	add_theme_support('menus');

	register_sidebar(array(
		'name' => 'Recent',
		'id' => 'best',
		'description' => 'bests of tanbour',
		'before_widget' => "<div class='first'>",
		'after_widget' => "</div>",	
		'before_title' => '<h3>',
		'after_title' => "</h3>"
	));