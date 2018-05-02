<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/**
* Autoload for PHP Composer and definition of the ABSPATH
*/

//defining the absolute path for the wordpress instalation.
if ( !defined('ABSPATH') ) define('ABSPATH', dirname(__FILE__) . '/');

//including composer autoload
require ABSPATH."vendor/autoload.php";

//including the custom post types
require('src/php/setup_types.php');

//including the api endpoints
require('src/php/setup_api.php');

//including any monolitic tempaltes
require('src/php/setup_templates.php');

//
require('src/php/ThemeConfig.php');
$config = new ThemeConfig();


use WPAS\Performance\WPASAsyncLoader;
//$publicPath = parse_url( get_stylesheet_directory_uri(), PHP_URL_PATH );
$publicPath = get_stylesheet_directory_uri();

$asyncLoader = new WPASAsyncLoader([
    'manifest-url' => $publicPath.'/public/manifest.json',
    'debug' => true,
    'force-jquery' => true,
    'minify-html' => false,
    'styles' => [
        "page" => [ "all" => 'main.css' ],
        "custom-post" => [ "all" => 'main.css' ]
    ],
    'scripts' => [
            "page" => [ "all" => ['main.js'] ],
            "custom-post" => [ "all" => ['main.js'] ]
        ]
    ]);
     
// MENU
  function register_my_menus() {
    register_nav_menus(
      array(
        'footer_company' => __( 'The Company' ),
        'footer_gallery' => __( 'Wedding Gallery' ),
        'footer_services' => __( 'Our services' ),
        'menu_food_beverage' => __( 'Food & Beverage' ),
        'menu_much_more' => __( 'Much more' ),
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

function updateVenueCPT( $args, $post_type ) {
	// If not Products CPT, bail.
	if ( 'venue' !== $post_type ) {
		return $args;
	}
	// Add additional Products CPT options.
	$venueArgs = array(
		'taxonomies' => array( 'category' )
	);
	
	
	$args = array_merge( $args, $venueArgs );
	// Merge args together.
	return $args;
}
add_filter( 'register_post_type_args', 'updateVenueCPT', 10, 2 );