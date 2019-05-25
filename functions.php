<?php
//********************
//ENQUEUE ALL SCRIPTS
//********************
function turtle_script_enqueue() {

	wp_enqueue_style('stylesheet', get_template_directory_uri() . '/css/turtle.css', array(), rand(111,9999), 'all' );
	wp_enqueue_script('javascript', get_template_directory_uri() . '/js/turtle.js', array(), rand(111,9999), 'all' );

}
add_action( 'wp_enqueue_scripts', 'turtle_script_enqueue');


//*********************
//REGISTER MENUS
//*********************
function turtle_theme_setup() {

	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Secondary Header Navigation');
	register_nav_menu('footer', 'Footer Navigation');

}


//********************
//ADD ALL THEME SUPPORT
//********************
add_action('init', 'turtle_theme_setup');

add_theme_support( 'custom-background');
add_theme_support( 'custom-header');
add_theme_support( 'custom-footer');
add_theme_support( 'post-thumbnails');
add_theme_support( 'post-formats', array('image', 'video'));


//********************
//INITIATE WIDGETS
//********************
function turtle_widget_init(){

	register_sidebar( array(
	'name' => 'Footer Sidebar 1',
	'id' => 'footer-sidebar-1',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer Sidebar 2',
	'id' => 'footer-sidebar-2',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer Sidebar 3',
	'id' => 'footer-sidebar-3',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );

}

add_action( 'widgets_init', 'turtle_widget_init');
