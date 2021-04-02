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
$pathMainScript  = get_template_directory() . '/scripts.js';
$pathScript  = get_template_directory() . '/assets/js/script.js';
$pathScript1 = get_theme_file_path('assets/js/script.js');

// echo $path . '<br>';
// echo $pathURI . '<br>';
// echo '$path ' . filemtime($path) . '<br>';
// echo '$pathStyle ' . filemtime($pathStyle) . '<br>';
// echo '$pathMainScript ' . filemtime($pathMainScript) . '<br>';
// echo '$pathScript ' . filemtime($pathScript);

if (!defined('AQUILA_DIR_PATH')) {
	define('AQUILA_DIR_PATH', get_template_directory());
}

echo '<pre>';
print_r(AQUILA_DIR_PATH);
echo '</pre>';
require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';





// add scripts and styles
function aquila_enqueue_scripts() {
	// the path to the main style.css file
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], '', 'all');
	// wp_enqueue_style('wp-bootstrap-starter-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
	wp_enqueue_style('theme-css', get_stylesheet_uri(), [], filemtime($pathStyle), 'all');
	//	wp_enqueue_style( 'additional-theme-style', $pathURI.'/css/additional_style.css', ['theme-style'], filemtime($path.'/css/additional_style.css') );
	// the path to the scripts file
	wp_enqueue_script('jquery');
	wp_enqueue_script('popper-js', get_template_directory_uri() . '/assets/src/library/js/popper.min.js', ['jquery'], '', true);
	// wp_enqueue_script('wp-bootstrap-starter-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1/dist/umd/popper.min.js', array(), '', true);
	// wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js', array(), '', true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], '', true);
	wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], filemtime(get_theme_file_path() . '/assets/js/script.js'), true);
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