<?php
/**
 * To add new monolytic templates you have to start by instanciating the WPASController
*/
$controller = new \WPAS\Controller\WPASController([ 'namespace' => 'Rigo\\Controller\\' ]);

/**
 * Then you can start adding the routes one by one
*/
$controller->route([ 'slug' => 'Page:wedding-venues-locations', 'controller' => 'VenueController:renderPageWeddingVenue' ]);  
$controller->route([ 'slug' => 'Single:venue', 'controller' => 'VenueController:getSingleVenueState' ]);  
$controller->route([ 'slug' => 'Single:wedding-package', 'controller' => 'PackageController:getSinglePackageState' ]);  
$controller->route([ 'slug' => 'Single:testimonial', 'controller' => 'TestimonialController:getSingleTestimonialState' ]);  
$controller->route([ 'slug' => 'Single:press-award', 'controller' => 'PressAwardController:getSinglePressAwardState' ]);  
$controller->route([ 'slug' => 'home', 'controller' => 'SampleController:getHomeData' ]);  

use \GM\VirtualPages\Page;
add_action( 'gm_virtual_pages', function( $controller ) {

   $controller->addPage(new Page( "/home" ))->setTemplate('src/php/pages/home.php');
   $controller->addPage(new Page( "/request-quote" ))->setTemplate('src/php/pages/request-quote.php');
   $controller->addPage(new Page( "/wedding-packages" ))->setTemplate('src/php/pages/wedding-packages.php');
   // $controller->addPage(new Page( "/wedding-package-selected" ))->setTemplate('src/php/pages/wedding-package-selected.php');
   // $controller->addPage(new Page( "/wedding-venues" ))->setTemplate('src/php/pages/wedding-venues.php');
   $controller->addPage(new Page( "/press-awards" ))->setTemplate('src/php/pages/press-awards.php');
   $controller->addPage(new Page( "/about-us" ))->setTemplate('src/php/pages/about-us.php');
   // $controller->addPage(new Page( "/bath-club" ))->setTemplate('src/php/pages/bath-club.php');
   $controller->addPage(new Page( "/bath-club-photos" ))->setTemplate('src/php/pages/bath-club-photos.php');
   $controller->addPage(new Page( "/contact-us" ))->setTemplate('src/php/pages/contact-us.php');
   $controller->addPage(new Page( "/wedding-catering" ))->setTemplate('src/php/pages/wedding-catering.php');
   
} );