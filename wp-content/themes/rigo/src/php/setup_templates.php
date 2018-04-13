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

   $controller->addPage(new Page( "/home" ))->setTemplate('src/php/views/home.php');
   $controller->addPage(new Page( "/request-quote" ))->setTemplate('src/php/views/request-quote.php');
   $controller->addPage(new Page( "/wedding-packages" ))->setTemplate('src/php/views/wedding-packages.php');
   $controller->addPage(new Page( "/wedding-package-selected" ))->setTemplate('src/php/views/wedding-package-selected.php');
   $controller->addPage(new Page( "/wedding-veneus" ))->setTemplate('src/php/views/wedding-veneus.php');
   $controller->addPage(new Page( "/press-awards" ))->setTemplate('src/php/views/press-awards.php');
   $controller->addPage(new Page( "/about-us" ))->setTemplate('src/php/views/about-us.php');
   $controller->addPage(new Page( "/bath-club" ))->setTemplate('src/php/views/bath-club.php');
   $controller->addPage(new Page( "/bath-club-photos" ))->setTemplate('src/php/views/bath-club-photos.php');
   $controller->addPage(new Page( "/contact-us" ))->setTemplate('src/php/views/contact-us.php');
   $controller->addPage(new Page( "/testimonials" ))->setTemplate('src/php/views/testimonials.php');
   $controller->addPage(new Page( "/wedding-catering" ))->setTemplate('src/php/views/wedding-catering.php');
   
} );