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
//=========================== CONTACT SHORT CODE =======================

add_shortcode('contactus','contact_us');

function contact_us(){
	return file_get_contents( get_template_directory() . '/contact.html');
}

//=========================== News Catalog =======================

add_theme_support('post_tumbnails');

add_action('init','news_init');

function news_init(){
	$labels = array(
		'name' => _x('اخبار','post type general name'),
		'singular_name' => _x('خبر','post type singular name'),
		'add new' => _x('add new' , 'News'),
		'add_new_item' => ('اضافه نمودن خبر'),
		'edit_item' => ('اصلاح خبر'),
		'new_item' => ('خبر جدبد'),
		'view_item' => ('مشاهده خبر'),
		'search_items' => ('جستجوی خبر'),
		'not_found' => ('هیچ خبری یافت نشد'),
		'not_found_in_trash' => ('هیچ خبری در زباله دان یافت نشد'),
		'parent_item_colon' => '',
		'menu_name' => 'اخبار'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 2,
		'menu_icon' => get_bloginfo('template_url') . '/images/newsicon.png',
		'supports' => array('title','editor','thumbnail','excerpt','comments'),
		'taxonomies' => array('category', 'post_tag')
	);

	register_post_type('News' , $args);
	
}