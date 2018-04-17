<?php
use \WPAS\Types\PostTypesManager;
/**
 * To create new Post Types, you have to instanciate the PostTypesManager
*/
$typeManager = new PostTypesManager([ 'namespace' => 'Rigo\\Types\\' ]);

/**
 * Then, start adding your types one by one.
*/
$typeManager->newType(['type' => 'venue', 'class' => 'Venue'])->register();
$typeManager->newType(['type' => 'wedding-package', 'class' => 'WeddingPackage'])->register();
$typeManager->newType(['type' => 'press-awards', 'class' => 'PressAwards'])->register();
$typeManager->newType(['type' => 'testimonials', 'class' => 'Testimonials'])->register();


