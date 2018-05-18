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
    'version' => 2,
    'debug' => true,
    'force-jquery' => true,
    'minify-html' => false,
    'styles' => [
        "category" => [ 
          "all" => 'main.css'
        ],
        "page" => [ 
          "all" => 'main.css',
          'gallery'=> ['main.css', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.10/css/lightgallery.min.css'],
        ],
        "custom-post" => [ 
          'venue'=> ['main.css', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.10/css/lightgallery.min.css'],
          "all" => 'main.css', 
        ]
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
        'submenu_inspired' => __( 'Sub menu Get Inspired' ),
        'menu_about_us' => __( 'About us' ),
      )
    );
  }
  add_action( 'init', 'register_my_menus' );
  
  function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'nav-item';
  // debug($classes);
  return $classes;
  }
  add_filter('nav_menu_css_class','add_classes_on_li',1,3);
  


function updateVenueCPT( $args, $post_type ) {
	// If not Products CPT, bail.
	if ( 'venue' !== $post_type && 'wedding-package' !== $post_type ) {
		return $args;
	}
	// Add additional Products CPT options.
	$venueArgs = [
		'taxonomies' => array( 'category' )
	];
	
	
	$args = array_merge( $args, $venueArgs );
	// Merge args together.
	return $args;
}
add_filter( 'register_post_type_args', 'updateVenueCPT', 10, 2 );

function my_acf_google_map_api( $api ){
	
	$api['key'] = GOOGLE_MAPS_KEY;
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

$gfManager = new WPAS\GravityForm\WPASGravityForm([
    
    // if true you can add CSS classes to the submit form
    'submit-button-class' => true, 
    
    //if true it will prepare the inputs for boptstrap
    'bootstrap4-styles' => true,
    
    'hide-labels' => true
    
]);