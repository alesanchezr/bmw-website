<?php
/**
 * To add new monolytic templates you have to start by instanciating the WPASController
*/
$controller = new \WPAS\Controller\WPASController([ 'namespace' => 'Rigo\\Controller\\' ]);


/**
 * Then you can start adding the routes one by one
*/
$controller->route([ 'slug' => 'home', 'controller' => 'SampleController:getHomeData' ]);  


use \GM\VirtualPages\Page;
add_action( 'gm_virtual_pages', function( $controller ) {

   $controller->addPage(new Page( "/about-us" ))->setTemplate('src/php/views/about-us.php');
   $controller->addPage(new Page( "/home" ))->setTemplate('src/php/views/about-us.php');
   $controller->addPage(new Page( "/contact" ))->setTemplate('src/php/views/contact.php');

} );