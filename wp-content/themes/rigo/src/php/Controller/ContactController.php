<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\Venue;
class ContactController{

  public function getSingleContactState(){
    
    $args = [];
    $args['contact'] = (array) get_queried_object();
    $args['contact']['contact-img-banner'] = get_field('contact-img-banner', $args['contact']['ID']);
    
    $args['menu-venues']['garden'] = Venue::getByCategory(4);
    $args['menu-venues']['historical'] = Venue::getByCategory(5);
    $args['menu-venues']['unique'] = Venue::getByCategory(6);
    
    return $args;
  }
  
}?>