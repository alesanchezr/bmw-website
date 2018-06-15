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
$controller->route([ 'slug' => 'Page:request-quote', 'controller' => 'RequestQuoteController:getSingleRequestQuoteState' ]);
$controller->route([ 'slug' => 'Page:wedding-catering-menu', 'controller' => 'CateringController:getSingleCateringState' ]);
$controller->route([ 'slug' => 'Page:miami-wedding-planners', 'controller' => 'PlannerController:renderPagePlanner' ]);  
$controller->route([ 'slug' => 'Page:gallery', 'controller' => 'GalleryController:getSingleGalleryState' ]);  
$controller->route([ 'slug' => 'Page:all', 'controller' => 'GeneralController:renderGeneral' ]);  
$controller->route([ 'slug' => '404:all', 'controller' => 'GeneralController:renderGeneral' ]);  

$controller->route([ 'slug' => 'Single:venue', 'controller' => 'VenueController:getSingleVenueState' ]);  
$controller->route([ 'slug' => 'Single:about-us', 'controller' => 'AboutUsController:getSingleAboutUsState' ]);  
$controller->route([ 'slug' => 'Single:wedding-package', 'controller' => 'PackageController:getSinglePackageState' ]);  
$controller->route([ 'slug' => 'Single:testimonial', 'controller' => 'TestimonialController:getSingleTestimonialState' ]);  
$controller->route([ 'slug' => 'Single:press-award', 'controller' => 'PressAwardController:getSinglePressAwardState' ]);  
$controller->route([ 'slug' => 'Single:church', 'controller' => 'ChurchController:getSingleChurchState' ]);  
$controller->route([ 'slug' => 'Single:planner', 'controller' => 'PlannerController:getSinglePlannerState' ]);  
$controller->route([ 'slug' => 'Category:all', 'controller' => 'CategoryController:renderCategory' ]);  

$controller->route([ 'slug' => 'Page:home', 'controller' => 'HomeController:getSingleHomeState' ]);  
$controller->route([ 'slug' => 'home', 'controller' => 'HomeController:genericRender' ]);  