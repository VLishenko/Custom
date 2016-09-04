<?php
remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','wp_generator');

show_admin_bar(false);

//Thumbnails
add_theme_support( 'post-thumbnails' );

//Theme Option Widget
require_once ( get_stylesheet_directory() . '/theme-options.php' );

//Sidebars widget content
$args = array(
	'name'          => __( 'Реклама Контент' ),
	'id'            => 'sidebar',
	'description'   => 'Реклама на боковой панели страницы статьи',
	'class'         => '',
	'before_widget' => '<div class="ad-h600 visible-lg visible-md hidden-sm hidden-xs">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>'
);
register_sidebar( $args );

if(function_exists('register_sidebar')) {
	register_sidebar( $args );
}

$args_footer = array(
	'name'          => __( 'Реклама Контент' ),
	'id'            => 'sidebar_footer',
	'description'   => 'Реклама в нижней части страницы статьи',
	'class'         => '',
	'before_widget' => '<div class="ad-cont-bottom visible-lg visible-md hidden-sm hidden-xs">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>'
);
register_sidebar( $args_footer );

if(function_exists('register_sidebar')) {
	register_sidebar( $args_footer);
}

//Sidebar widget main mage
$args_main_aside = array(
	'name'          => __( 'Реклама Контент Главная' ),
	'id'            => 'sidebar_main',
	'description'   => 'Реклама на боковой панели главной страницы',
	'class'         => '',
	'before_widget' => '<div class="ad-h600 visible-lg visible-md hidden-sm hidden-xs">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>'
);
register_sidebar( $args_main_aside  );

if(function_exists('register_sidebar')) {
	register_sidebar( $args_main_aside );
}