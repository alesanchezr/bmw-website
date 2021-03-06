<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\Testimonial;
use Rigo\Types\Venue;
class TestimonialController{
    
    public function getSingleTestimonialState(){
        $args = [];
        $args['testimonial'] = (array) get_queried_object();
        // debug($args);
        $args['testimonial']['testimonial-photo'] = get_field('testimonial-photo', $args['testimonial']['ID']);
        $args['testimonial']['testimonial-description'] = get_field('testimonial-description', $args['testimonial']['ID']);
        $args['testimonial']['testimonial-score'] = get_field('testimonial-score', $args['testimonial']['ID']);
        
        $args['menu-venues']['garden'] = Venue::getByCategory(4);
        $args['menu-venues']['historical'] = Venue::getByCategory(5);
        $args['menu-venues']['unique'] = Venue::getByCategory(6);
        
        return $args;
        
    }
     
    function getReviewAverage($arrayOfReviews){
      // debug($arrayOfReviews);
      $reviewSum = 0;
      $cont = 0;
      foreach ($arrayOfReviews as $review) {
        if($review and $review!=''){
          $reviewSum += floatval($review);
          $cont++;
        } 
      }
      
      return round($reviewSum / $cont,1);
    }
  
  public function renderPageTestimonial(){
    
    $args =[];
    $args['testimonials'] = (array) get_queried_object();
    $args['testimonials']['testimonial-img-banner'] = get_field('testimonial-img-banner', $args['testimonials']['ID']);
    
    $args['menu-venues'] = Venue::getVenuesMenu();
    
    $query = Testimonial::all();
    $args['testimonial_list'] = $query -> posts;
    $args['new_array_testimonial'] = array_map( function($testimonial){ 
      return [
      'post_title' => $testimonial -> post_title,
      'thumbnail' =>  wp_get_attachment_image_src( get_field('testimonial-photo', $testimonial -> ID),'full')[0], 
      'testimonial' =>  get_field('testimonial-description', $testimonial -> ID),
      'testimonial_score' =>  get_field('testimonial-score', $testimonial -> ID),
      'score_point' =>  function ($arrayOfReviews){
          // debug($arrayOfReviews);
          $reviewSum = 0;
          $cont = 0;
          foreach ($arrayOfReviews as $review) {
            if($review and $review!=''){
              $reviewSum += floatval($review);
              $cont++;
            } 
          }
          
          return round($reviewSum / $cont,1);
        },
        'printStars' => function ($decimalPoints){
          $decimalPoints = floatval($decimalPoints);
          $resultStr = '';
          $integerPoints = floor( $decimalPoints );
          
          for($i = 0; $i<$integerPoints; $i++){
            $resultStr .= '<span class="svg-inline--fa fa-star mx-2" id="star"></span>';
          }
          
          if($decimalPoints != $integerPoints) $resultStr .= '<span class="svg-inline--fa fa-star mx-2" id="star-half"></span>';
          
          for($i = 0; $i<5-ceil($decimalPoints); $i++){
            $resultStr .= '<span class="svg-inline--fa fa-star mx-2" id="star-o"></span>';
          }
          
          return $resultStr;
        }
      ];
    }, $args['testimonial_list']);
    return $args;
    
  }
}

?>


