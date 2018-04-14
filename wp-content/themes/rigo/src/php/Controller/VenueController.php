<?php
namespace Rigo\Controller;

use Rigo\Types\Course;

class VenueController{
    
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
    $args['wp_query']['venue-img-layout'] = get_field('venue-img-layout', $args['wp_query']['ID']);
        $args['wp_query']['venue-layout-description'] = get_field('venue-layout-description', $args['wp_query']['ID']);
        $args['wp_query']['venue-score-point'] = get_field('venue-score-point', $args['wp_query']['ID']);
        $args['wp_query']['venue-score-description'] = get_field('venue-score-description', $args['wp_query']['ID']);
        $args['wp_query']['venue-pros'] = get_field('venue-pros', $args['wp_query']['ID']);
        $args['wp_query']['venue-cons'] = get_field('venue-cons', $args['wp_query']['ID']);
        $args['wp_query']['venue-bottom-half'] = get_field('venue-bottom-half', $args['wp_query']['ID']);
        return $args;
    }
}?>