<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\Venue;
class VenueController{

  public function getSingleVenueState(){
    
    $args = [];
    $args['venue'] = (array) get_queried_object();
    $args['venue'] = Venue::serialize($args['venue'],'big');
    
    $args['menu-venues'] = Venue::getVenuesMenu();
    
    $args['venue']['printStars'] = function ($decimalPoints){
      $decimalPoints = floatval($decimalPoints);
      $resultStr = '';
      $integerPoints = floor( $decimalPoints );
      
      for($i = 0; $i<$integerPoints; $i++){
        $resultStr .= '<span class="svg-inline--fa fa-star" id="star"></span>';
      }
      
      if($decimalPoints != $integerPoints) $resultStr .= '<span class="svg-inline--fa fa-star" id="star-half"></span>';
      
      for($i = 0; $i<5-ceil($decimalPoints); $i++){
        $resultStr .= '<span class="svg-inline--fa fa-star" id="star-o"></span>';
      }
      
      return $resultStr;
    };
    
    return $args;
  }
  
  public function renderPageWeddingVenue(){
    
    $args =[];
    $args['venue'] = (array) get_queried_object();
    $args['venue']['venue-img-banner'] = get_field('venue-img-banner', $args['venue']['ID']);
    
    $args['menu-venues'] = Venue::getVenuesMenu();
    
    $args['page'] = (array) get_queried_object();
    
    $query = Venue::all(['posts_per_page' => 15]);
    $args['venue_list'] = $query -> posts;
    $args['new_array_venue'] = array_map( function($venue){ 
      return Venue::serialize($venue, 'small');
    }, $args['venue_list']);
    
    // debug($args);
    return $args;
    
  }
  
}?>