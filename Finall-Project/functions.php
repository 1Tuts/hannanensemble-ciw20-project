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

add_theme_support('post-thumbnails');

add_action('init','news_init');

function news_init(){
	$labels = array(
		'name' => _x('اخبار','post type general name'),
		'singular_name' => _x('خبر','post type singular name'),
		'add_new' => _x('اضافه نمودن خبر' , 'News'),
		'add_new_item' => __('اضافه نمودن خبر'),
		'edit_item' => __('اصلاح خبر'),
		'new_item' => __('خبر جدبد'),
		'view_item' => __('مشاهده خبر'),
		'search_items' => __('جستجوی خبر'),
		'not_found' => __('هیچ خبری یافت نشد'),
		'not_found_in_trash' => __('هیچ خبری در زباله دان یافت نشد'),
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
		'menu_position' => 5,
		'menu_icon' => get_bloginfo('template_url') . '/images/newsicon.png',
		'supports' => array('title','editor','thumbnail','excerpt','comments'),
		'taxonomies' => array('category', 'post_tag')
	);

	register_post_type('news' , $args);
}