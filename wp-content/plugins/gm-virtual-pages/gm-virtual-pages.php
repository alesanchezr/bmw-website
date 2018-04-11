<?php namespace GM\VirtualPages;
/*
Plugin Name: GM Virtual Pages
Plugin URI: http://wordpress.stackexchange.com/questions/162240/custom-pages-with-plugin
Description: Virtual pages made easy.
Author: Giuseppe Mazzapica
Author URI: http://gm.zoomlab.it
License: MIT
*/
 
require_once 'PageInterface.php';
require_once 'ControllerInterface.php';
require_once 'TemplateLoaderInterface.php';
require_once 'Page.php';
require_once 'Controller.php';
require_once 'TemplateLoader.php';

$controller = new Controller ( new TemplateLoader );

add_action( 'init', array( $controller, 'init' ) );

add_filter( 'do_parse_request', array( $controller, 'dispatch' ), PHP_INT_MAX, 2 );

add_action( 'loop_end', function( \WP_Query $query ) {
  if ( isset( $query->virtual_page ) && ! empty( $query->virtual_page ) ) {
    $query->virtual_page = NULL;
  }
} );

add_filter( 'the_permalink', function( $plink ) {
  global $post, $wp_query;
  if (
    $wp_query->is_page
    && isset( $wp_query->virtual_page )
    && $wp_query->virtual_page instanceof Page
    && isset( $post->is_virtual )
    && $post->is_virtual
  ) {
    $plink = home_url( $wp_query->virtual_page->getUrl() );
  }
  return $plink;
} );
