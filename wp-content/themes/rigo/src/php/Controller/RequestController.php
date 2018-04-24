<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
class RequestController{

  public function getSingleRequestState(){
    
    $args = [];
    $args['request'] = (array) get_queried_object();
    $args['request']['request-img-banner'] = get_field('request-img-banner', $args['request']['ID']);
    
    return $args;
  }
  
}?>