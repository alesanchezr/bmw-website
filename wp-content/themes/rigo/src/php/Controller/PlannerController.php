<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\Planner;
use Rigo\Types\Testimonial;
use Rigo\Types\Venue;
class PlannerController{

  public function getSinglePlannerState(){
    
    $args['planner'] = (array) get_queried_object();
    $args['planner']['planner-img-banner'] = get_field('planner-img-banner', $args['planner']['ID']);
    $args['planner']['planner-video-banner'] = get_field('planner-video-banner', $args['planner']['ID']);
    $args['planner']['planner-description-page'] = get_field('planner-description-page', $args['planner']['ID']);
    $args['planner']['planner-description'] = get_field('planner-description', $args['planner']['ID']);
    $args['planner']['planner-location'] = get_field('planner-location', $args['planner']['ID']);
    $args['planner']['planner-uniqueness'] = get_field('planner-uniqueness', $args['planner']['ID']);
    $args['planner']['planner-link-uniqueness'] = get_field('planner-link-uniqueness', $args['planner']['ID']);
    $args['planner']['planner-about'] = get_field('planner-about', $args['planner']['ID']);
    $args['planner']['planner-planned-succesfully'] = get_field('planner-planned-succesfully', $args['planner']['ID']);
    $args['planner']['planner-each-year'] = get_field('planner-each-year', $args['planner']['ID']);
    $args['planner']['planner-experience'] = get_field('planner-experience', $args['planner']['ID']);
    $args['planner']['planner-amount-from'] = get_field('planner-amount-from', $args['planner']['ID']);
    $args['planner']['planner-amount-to'] = get_field('planner-amount-to', $args['planner']['ID']);
    $args['planner']['planner-score-point'] = get_field('planner-score-point', $args['planner']['ID']);
    $args['menu-venues']['garden'] = Venue::getByCategory(4);
    $args['menu-venues']['historical'] = Venue::getByCategory(5);
    $args['menu-venues']['unique'] = Venue::getByCategory(6);
    
    $args['planner']['printStars'] = function ($decimalPoints){
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
     $aux = get_queried_object();
        $testimonials = get_field('testimonials', $aux -> ID);
        $args['testimonials'] = Testimonial::getTestimonials($testimonials);
        $args['testimonials'] = array_map(function($testimonial) { 
            return Testimonial::extendTestimonials((array)$testimonial);},
            $args['testimonials'] );
  
    return $args;
  }
  
  public function renderPagePlanner(){
    $args =[];
    $args['planners'] = (array) get_queried_object();
    $args['planners']['planners-img-banner'] = get_field('planners-img-banner', $args['planners']['ID']);
    $args['planners']['planners-img-banner-2'] = get_field('planners-img-banner-2', $args['planners']['ID']);
    $args['planners']['planners-logo'] = get_field('planners-logo', $args['planners']['ID']);
    $args['planners']['planners-description'] = get_field('planners-description', $args['planners']['ID']);
    $args['planners']['planners-benefits'] = get_field('planners-benefits', $args['planners']['ID']);
    
    $args['menu-venues']['garden'] = Venue::getByCategory(4);
    $args['menu-venues']['historical'] = Venue::getByCategory(5);
    $args['menu-venues']['unique'] = Venue::getByCategory(6);
    
    $aux = get_queried_object();
    $testimonials = get_field('testimonials', $aux -> ID);
    $args['testimonials'] = Testimonial::getTestimonials($testimonials);
    $args['testimonials'] = array_map(function($testimonial) { 
      return Testimonial::extendTestimonials((array)$testimonial);
    },$args['testimonials'] );
    
    $query = Planner::all();
    $args['planner_list'] = $query -> posts;
    $args['new_array_planner'] = array_map( function($planner){ 
        return [
        'id' => $planner -> ID,
        'post_title' => $planner -> post_title,
        'thumbnail' =>  wp_get_attachment_image_src( get_field('planner-img-banner', $planner -> ID),'full')[0], 
        'video' =>  get_field('planner-video-banner', $planner -> ID),
        'description' =>  get_field('planner-description-page', $planner -> ID),
        'location' =>  get_field('planner-location', $planner -> ID),
        'succesfully' =>  get_field('planner-planned-succesfully', $planner -> ID),
        'experience' =>  get_field('planner-experience', $planner -> ID),
        ];
    }, $args['planner_list']);
    // debug($args);
    return $args;
  }
}?>