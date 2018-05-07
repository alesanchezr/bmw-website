<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\Venue;
class RequestQuoteController{

  public function getSingleRequestQuoteState(){
    
    $args = [];
    $args['request'] = (array) get_queried_object();
    $args['request']['request-img-banner'] = get_field('request-img-banner', $args['request']['ID']);
    
    $args['menu-venues'] = Venue::getVenuesMenu();
    
    return $args;
  }
  
}?>