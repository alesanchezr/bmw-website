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