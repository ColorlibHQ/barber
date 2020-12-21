<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Define constant
	 *
	 */
	
	 
	// Base URI
	if( !defined( 'BARBER_DIR_URI' ) )
		define( 'BARBER_DIR_URI', get_template_directory_uri().'/' );
	
	// assets URI
	if( !defined( 'BARBER_DIR_ASSETS_URI' ) )
		define( 'BARBER_DIR_ASSETS_URI', BARBER_DIR_URI.'assets/' );
	
	// Css File URI
	if( !defined( 'BARBER_DIR_CSS_URI' ) )
		define( 'BARBER_DIR_CSS_URI', BARBER_DIR_ASSETS_URI .'css/' );
	
	// Js File URI
	if( !defined( 'BARBER_DIR_JS_URI' ) )
		define( 'BARBER_DIR_JS_URI', BARBER_DIR_ASSETS_URI .'js/' );
	
	// Icon Images
	if( !defined('BARBER_DIR_ICON_IMG_URI') )
		define( 'BARBER_DIR_ICON_IMG_URI', BARBER_DIR_ASSETS_URI.'img/icon/' );
	
	//DIR inc
	if( !defined( 'BARBER_DIR_INC' ) )
		define( 'BARBER_DIR_INC', BARBER_DIR_URI.'inc/' );

	// Base Directory
	if( !defined( 'BARBER_DIR_PATH' ) )
		define( 'BARBER_DIR_PATH', get_parent_theme_file_path().'/' );
	
	//Inc Folder Directory
	if( !defined( 'BARBER_DIR_PATH_INC' ) )
		define( 'BARBER_DIR_PATH_INC', BARBER_DIR_PATH.'inc/' );
	
	//Colorlib framework Folder Directory
	if( !defined( 'BARBER_DIR_PATH_LIB' ) )
		define( 'BARBER_DIR_PATH_LIB', BARBER_DIR_PATH_INC.'libraries/' );
	
	//Classes Folder Directory
	if( !defined( 'BARBER_DIR_PATH_CLASSES' ) )
		define( 'BARBER_DIR_PATH_CLASSES', BARBER_DIR_PATH_INC.'classes/' );	

		
	/**
	 * Include File
	 *
	 */
	
	// Breadcrumbs file include
	require_once( BARBER_DIR_PATH_INC . 'barber-breadcrumbs.php' );
	// Sidebar register file include
	require_once( BARBER_DIR_PATH_INC . 'widgets/barber-widgets-reg.php' );
	// Post widget file include
	// require_once( BARBER_DIR_PATH_INC . 'widgets/barber-recent-post-thumb.php' );
	// News letter widget file include
	// require_once( BARBER_DIR_PATH_INC . 'widgets/barber-newsletter-widget.php' );
	//Social Links
	// require_once( BARBER_DIR_PATH_INC . 'widgets/barber-social-links.php' );
	// Instagram Widget
	// require_once( BARBER_DIR_PATH_INC . 'widgets/barber-instagram.php' );
	// Nav walker file include
	require_once( BARBER_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
	// Theme function file include
	require_once( BARBER_DIR_PATH_INC . 'barber-functions.php' );

	// Theme Demo file include
	// require_once( BARBER_DIR_PATH_INC . 'demo/demo-import.php' );

	// Post Like
	require_once( BARBER_DIR_PATH_INC . 'post-like.php' );
	// Theme support function file include
	require_once( BARBER_DIR_PATH_INC . 'support-functions.php' );
	// Html helper file include
	require_once( BARBER_DIR_PATH_INC . 'wp-html-helper.php' );
	// Pagination file include
	require_once( BARBER_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
	// Elementor Widgets
	// require_once( BARBER_DIR_PATH_ELEMENTOR_WIDGETS . 'elementor-widget.php' );
	//
	require_once( BARBER_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
	
	require_once( BARBER_DIR_PATH_CLASSES . 'Class-Config.php' );
	// Customizer
	require_once( BARBER_DIR_PATH_INC . 'customizer/customizer.php' );
	// Class autoloader
	require_once( BARBER_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
	// Class barber dashboard
	require_once( BARBER_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );
	// Common css
	require_once( BARBER_DIR_PATH_INC . 'barber-commoncss.php' );
	

	// Admin Enqueue Script
	function barber_admin_script(){
		wp_enqueue_style( 'barber-admin', get_template_directory_uri().'/assets/css/barber_admin.css', false, '1.0.0' );
		wp_enqueue_script( 'barber_admin', get_template_directory_uri().'/assets/js/barber_admin.js', false, '1.0.0' );
	}
	add_action( 'admin_enqueue_scripts', 'barber_admin_script' );

	 
	// WooCommerce style desable
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );


	/**
	 * Instantiate Barber object
	 *
	 * Inside this object:
	 * Enqueue scripts, Google font, Theme support features, Barber Dashboard .
	 *
	 */
	
	$Barber = new Barber();
	
