<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'ARARAT_DIR_URI' ) ) {
	define( 'ARARAT_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'ARARAT_DIR_ASSETS_URI' ) ) {
	define( 'ARARAT_DIR_ASSETS_URI', ARARAT_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'ARARAT_DIR_CSS_URI' ) ) {
	define( 'ARARAT_DIR_CSS_URI', ARARAT_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'ARARAT_DIR_JS_URI' ) ) {
	define( 'ARARAT_DIR_JS_URI', ARARAT_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'ARARAT_DIR_IMGS_URI' ) ) {
	define( 'ARARAT_DIR_IMGS_URI', ARARAT_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'ARARAT_DIR_ICON_IMG_URI' ) ) {
	define( 'ARARAT_DIR_ICON_IMG_URI', ARARAT_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'ARARAT_DIR_PATH' ) ) {
	define( 'ARARAT_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'ARARAT_DIR_PATH_INC' ) ) {
	define( 'ARARAT_DIR_PATH_INC', ARARAT_DIR_PATH . 'inc/' );
}

//Ararat Libraries Folder Directory
if ( ! defined( 'ARARAT_DIR_PATH_LIBS' ) ) {
	define( 'ARARAT_DIR_PATH_LIBS', ARARAT_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'ARARAT_DIR_PATH_CLASSES' ) ) {
	define( 'ARARAT_DIR_PATH_CLASSES', ARARAT_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'ARARAT_DIR_PATH_HOOKS' ) ) {
	define( 'ARARAT_DIR_PATH_HOOKS', ARARAT_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function ararat_admin_script(){
    wp_enqueue_style( 'ararat-admin', get_template_directory_uri().'/assets/css/ararat-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'ararat_admin', get_template_directory_uri().'/assets/js/ararat-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'ararat_admin_script' );



/**
 * Include File
 *
 */
require_once( ARARAT_DIR_PATH_INC . 'ararat-breadcrumbs.php' );
require_once( ARARAT_DIR_PATH_INC . 'ararat-widgets-reg.php' );
require_once( ARARAT_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( ARARAT_DIR_PATH_INC . 'post-like.php' );
require_once( ARARAT_DIR_PATH_INC . 'ararat-functions.php' );
require_once( ARARAT_DIR_PATH_INC . 'ararat-commoncss.php' );
require_once( ARARAT_DIR_PATH_INC . 'support-functions.php' );
require_once( ARARAT_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( ARARAT_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( ARARAT_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( ARARAT_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( ARARAT_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( ARARAT_DIR_PATH_HOOKS . 'hooks.php' );
require_once( ARARAT_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( ARARAT_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( ARARAT_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Ararat object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Ararat = new Ararat();