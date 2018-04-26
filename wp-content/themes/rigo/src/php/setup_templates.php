<?php
/**
 * To add new monolytic templates you have to start by instanciating the WPASController
*/
$controller = new \WPAS\Controller\WPASController([ 'namespace' => 'Rigo\\Controller\\' ]);

/**
 * Then you can start adding the routes one by one
*/
// $controller->route([ 'slug' => 'Page:contact-us', 'controller' => 'ContactController:getSingleContactState' ]);  
$controller->route([ 'slug' => 'Page:about-us', 'controller' => 'AboutUsController:renderPageAboutUs' ]);  
$controller->route([ 'slug' => 'Page:contact-us', 'controller' => 'ContactController:getSingleContactState' ]);  
$controller->route([ 'slug' => 'Page:wedding-miami', 'controller' => 'HomeController:getSingleHomeState' ]);  
$controller->route([ 'slug' => 'Page:press-awards', 'controller' => 'PressAwardController:renderPagePressAward' ]);  
$controller->route([ 'slug' => 'Page:testimonials', 'controller' => 'TestimonialController:renderPageTestimonial' ]);  
$controller->route([ 'slug' => 'Page:wedding-packages', 'controller' => 'PackageController:renderPageWeddingPackage' ]);  
$controller->route([ 'slug' => 'Page:wedding-venues-locations', 'controller' => 'VenueController:renderPageWeddingVenue' ]);
$controller->route([ 'slug' => 'Page:wedding-churches-in-miami', 'controller' => 'ChurchController:renderPageChurch' ]);

$controller->route([ 'slug' => 'Single:venue', 'controller' => 'VenueController:getSingleVenueState' ]);  
$controller->route([ 'slug' => 'Single:about-us', 'controller' => 'AboutUsController:getSingleAboutUsState' ]);  
$controller->route([ 'slug' => 'Single:wedding-package', 'controller' => 'PackageController:getSinglePackageState' ]);  
$controller->route([ 'slug' => 'Single:testimonial', 'controller' => 'TestimonialController:getSingleTestimonialState' ]);  
$controller->route([ 'slug' => 'Single:press-award', 'controller' => 'PressAwardController:getSinglePressAwardState' ]);  
$controller->route([ 'slug' => 'Single:church', 'controller' => 'ChurchController:getSingleChurchState' ]);  

$controller->route([ 'slug' => 'home', 'controller' => 'SampleController:getHomeData' ]);  

use \GM\VirtualPages\Page;
add_action( 'gm_virtual_pages', function( $controller ) {

   // $controller->addPage(new Page( "/home" ))->setTemplate('src/php/pages/home.php');
   $controller->addPage(new Page( "/request-quote" ))->setTemplate('src/php/pages/request-quote.php');
   // $controller->addPage(new Page( "/about-us" ))->setTemplate('src/php/pages/about-us.php');
   // $controller->addPage(new Page( "/contact-us" ))->setTemplate('src/php/pages/contact-us.php');
   $controller->addPage(new Page( "/wedding-catering" ))->setTemplate('src/php/pages/wedding-catering.php');
   
} );