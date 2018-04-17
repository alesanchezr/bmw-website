<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
class VenueController{
    
        function printStars($decimalPoints){
    	$decimalPoints = floatval($decimalPoints);
    	$resultStr = '';
    	$integerPoints = floor( $decimalPoints );
    
    	for($i = 0; $i<$integerPoints; $i++){
    		$resultStr .= '<i class="fa fa-star" aria-hidden="true"></i>';
    	}
    
    	if($decimalPoints != $integerPoints) $resultStr .= '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
    
    	for($i = 0; $i<5-ceil($decimalPoints); $i++){
    		$resultStr .= '<i class="fa fa-star-o" aria-hidden="true"></i>';
    	}
    
    	return $resultStr;
    }
    
    function getReviewAverage($arrayOfReviews){
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
    
    public function getSingleVenueState(){
        $args = [];
        $args['wp_query'] = (array) get_queried_object();
        // debug($args);
        $args['wp_query']['venue-description'] = get_field('venue-description', $args['wp_query']['ID']);
        $args['wp_query']['venue-capacity'] = get_field('venue-capacity', $args['wp_query']['ID']);
        $args['wp_query']['venue-time'] = get_field('venue-time', $args['wp_query']['ID']);
        $args['wp_query']['venue-address'] = get_field('venue-address', $args['wp_query']['ID']);
        $args['wp_query']['venue-acommodations'] = get_field('venue-acommodations', $args['wp_query']['ID']);
        $args['wp_query']['venue-parking'] = get_field('venue-parking', $args['wp_query']['ID']);
        $args['wp_query']['venue-transportation'] = get_field('venue-transportation', $args['wp_query']['ID']);
        $args['wp_query']['venue-layout-description'] = get_field('venue-layout-description', $args['wp_query']['ID']);
        $args['wp_query']['venue-score-point'] = get_field('venue-score-point', $args['wp_query']['ID']);
        $args['wp_query']['venue-score-description'] = get_field('venue-score-description', $args['wp_query']['ID']);
        $args['wp_query']['venue-pros'] = get_field('venue-pros', $args['wp_query']['ID']);
        $args['wp_query']['venue-cons'] = get_field('venue-cons', $args['wp_query']['ID']);
        $args['wp_query']['venue-bottom-half'] = get_field('venue-bottom-half', $args['wp_query']['ID']);
        $args['wp_query']['venue-google-maps'] = get_field('venue-google-maps', $args['wp_query']['ID']);
        
        $facebookScore = $args['wp_query']['facebookScore'] = get_field('facebookScore', $args['wp_query']['ID']);
        $args['wp_query']['googleScore'] = get_field('googleScore', $args['wp_query']['ID']);
        $args['wp_query']['yelpScore'] = get_field('yelpScore', $args['wp_query']['ID']);
        $args['wp_query']['weddingwireScore'] = get_field('weddingwireScore', $args['wp_query']['ID']);
        $args['wp_query']['theknotScore'] = get_field('theknotScore', $args['wp_query']['ID']);
        
        
        $args['wp_query']['venue-score-point'] = $this -> getReviewAverage(['1','3']);
        // $args['wp_query']['printStars'] = $this -> printStars;
        // IMG
        $args['wp_query']['venue-img-layout'] = get_field('venue-img-layout', $args['wp_query']['ID']);
        $args['wp_query']['venue-img-banner'] = get_field('venue-img-banner', $args['wp_query']['ID']);
        $args['wp_query']['venue-img-carousel-1'] = get_field('venue-img-carousel-1', $args['wp_query']['ID']);
        $args['wp_query']['venue-img-carousel-2'] = get_field('venue-img-carousel-2', $args['wp_query']['ID']);
        $args['wp_query']['venue-img-carousel-3'] = get_field('venue-img-carousel-3', $args['wp_query']['ID']);
        
        return $args;
   
    

    
    }
    
}?>


