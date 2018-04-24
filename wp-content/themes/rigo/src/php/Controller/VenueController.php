<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\Venue;
class VenueController{

  public function getSingleVenueState(){
    
    $args = [];
    $args['venue'] = (array) get_queried_object();
    $args['venue']['venue-description'] = get_field('venue-description', $args['venue']['ID']);
    $args['venue']['venue-capacity'] = get_field('venue-capacity', $args['venue']['ID']);
    $args['venue']['venue-time'] = get_field('venue-time', $args['venue']['ID']);
    $args['venue']['venue-address'] = get_field('venue-address', $args['venue']['ID']);
    $args['venue']['venue-acommodations'] = get_field('venue-acommodations', $args['venue']['ID']);
    $args['venue']['venue-parking'] = get_field('venue-parking', $args['venue']['ID']);
    $args['venue']['venue-transportation'] = get_field('venue-transportation', $args['venue']['ID']);
    $args['venue']['venue-layout-description'] = get_field('venue-layout-description', $args['venue']['ID']);
    $args['venue']['venue-score-point'] = get_field('venue-score-point', $args['venue']['ID']);
    $args['venue']['venue-score-description'] = get_field('venue-score-description', $args['venue']['ID']);
    $args['venue']['venue-pros'] = get_field('venue-pros', $args['venue']['ID']);
    $args['venue']['venue-cons'] = get_field('venue-cons', $args['venue']['ID']);
    $args['venue']['venue-bottom-half'] = get_field('venue-bottom-half', $args['venue']['ID']);
    $args['venue']['venue-google-maps'] = get_field('venue-google-maps', $args['venue']['ID']);
    $args['venue']['facebook-score'] = get_field('facebook-score', $args['venue']['ID']);
    $args['venue']['google-score'] = get_field('google-score', $args['venue']['ID']);
    $args['venue']['yelp-score'] = get_field('yelp-score', $args['venue']['ID']);
    $args['venue']['weddingwire-score'] = get_field('weddingwire-score', $args['venue']['ID']);
    $args['venue']['theknot-score'] = get_field('theknot-score', $args['venue']['ID']);
    $args['venue']['venue-score-point'] = $this -> getReviewAverage([
    $args['venue']['facebook-score'],
    $args['venue']['google-score'],
    $args['venue']['yelp-score'],
    $args['venue']['weddingwire-score'],
    $args['venue']['theknot-score']
    ]);
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
    
    // IMAGES
    $args['venue']['venue-img-banner'] = get_field('venue-img-banner', $args['venue']['ID']);
    $args['venue']['venue-img-layout'] = get_field('venue-img-layout', $args['venue']['ID']);
    $args['venue']['venue-img-carousel-1'] = get_field('venue-img-carousel-1', $args['venue']['ID']);
    $args['venue']['venue-img-carousel-2'] = get_field('venue-img-carousel-2', $args['venue']['ID']);
    $args['venue']['venue-img-carousel-3'] = get_field('venue-img-carousel-3', $args['venue']['ID']);
    $args['venue']['venue-post-gallery'] = $this -> getPostGalley($args['venue']['ID']);
    
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
  
  function getPostGalley( $venueId ){
    $imgs = [];
    $gallery = get_post_gallery($venueId,false);
    $ids = explode( ",", $gallery['ids'] );
    foreach( $ids as $id ) {
      $newImg = array(
      'id' => $id, 
      'thumbnail' => wp_get_attachment_image_src( $id ,'thumbnail')[0], 
      'default' => wp_get_attachment_image_src( $id, 'full')[0], 
      );
      $imgs[] = $newImg;
    } 
    
    return $imgs;
  }
  
  public function renderPageWeddingVenue(){
    
    $args =[];
    $args['page'] = (array) get_queried_object();
    $query = Venue::all();
    $args['venue_list'] = $query -> posts;
    
    $args['new_array_venue'] = array_map( function($venue){ 
      return [
      'id' => $venue -> ID,
      'post_title' => $venue -> post_title,
      'thumbnail' =>  wp_get_attachment_image_src( get_field('venue-img-banner', $venue -> ID),'full')[0], 
      'address' =>  get_field('venue-address', $venue -> ID),
      ];
    }, $args['venue_list']);
    
    // debug($newArrayVenues);
    return $args;
    
  }
  
}?>