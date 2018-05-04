<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\Venue;
class GalleryController{

  public function getSingleGalleryState(){
    
    $args = [];
    $args['gallery'] = (array) get_queried_object();
    $args['gallery']['gallery-img-banner'] = get_field('gallery-img-banner', $args['gallery']['ID']);

    $args['menu-venues']['garden'] = Venue::getByCategory(4);
    $args['menu-venues']['historical'] = Venue::getByCategory(5);
    $args['menu-venues']['unique'] = Venue::getByCategory(6);
    
    return $args;
  }
  
}?>