<?php

/**
 * Theme Functions.
 *
 * @package Aquila
 */
if (!defined('ABSPATH')) {
	exit;
}
define('PATH', 'get_template_directory()');
//	$path = filemtime(get_theme_file_path('/style.css'));
$path        = get_template_directory();
$pathURI     = get_template_directory_uri();
$pathStyle   = get_template_directory() . '/style.css';
$pathStyle1  = get_template_directory() . '/scripts.js';
$pathScript  = get_template_directory() . '/assets/js/script.js';
$pathScript1 = get_theme_file_path('assets/js/script.js');

// echo $path . '<br>';
// echo $pathURI . '<br>';
// echo '$path ' . filemtime($path) . '<br>';
// echo '$pathStyle ' . filemtime($pathStyle) . '<br>';
// echo '$pathStyle1 ' . filemtime($pathStyle1) . '<br>';
// echo '$pathScript ' . filemtime($pathScript);


// add scripts and styles
function aquila_enqueue_scripts()
{
	// the path to the main style.css file
	wp_enqueue_style('theme-css', get_stylesheet_uri(), [], filemtime($pathStyle), 'all');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');
	//	wp_enqueue_style( 'additional-theme-style', $pathURI.'/css/additional_style.css', ['theme-style'], filemtime($path.'/css/additional_style.css') );
	// the path to the scripts file
	wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/script.js', [], filemtime(get_theme_file_path() . '/assets/js/script.js'), true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);
}

add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');

/* this will work in the theme title tag (<title><?php wp_title(); ?></title>)*/
// add_theme_support('title-tag');

// define('PS_THEME_ROOT', get_template_directory_uri());
// define('PS_CSS_DIR', PS_THEME_ROOT . '/assets/css');
// define('PS_JS_DIR', PS_THEME_ROOT . '/assets/js');
// define('PS_IMG_DIR', PS_THEME_ROOT . '/assets/img');

// function ps_my_styles_and_scripts(){
// 	// styles
	
// 	wp_equeue_style('my_style', PS_CSS_DIR . '/style.css');
// 	wp_equeue_script('my_default_sctyle', get_stylesheet_directory_uri());
	
// 	// script
// 	wp_equeue_script('my_script', PS_JS_DIR . '/script.js');
// }
// add_action('wp_enqueue_scripts','ps_my_styles_and_scripts');