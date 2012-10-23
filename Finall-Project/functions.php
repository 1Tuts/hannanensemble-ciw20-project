<?php
	add_theme_support('menus');

	register_sidebar(array(
		'name' => 'Bests',
		'id' => 'best',
		'description' => 'bests of tanbour',
		'before_widget' => '<div class="boxess">',
		'after_widget' => "</div>",
		'before_title' => '',
		'after_title' => ""
	));