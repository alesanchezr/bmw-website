<?php
namespace Rigo\Controller;

use Rigo\Types\Course;

class VenueController{
    
    public function getSingleVenueState(){
        $args = [];
        $args['wp_query'] = (array) get_queried_object();
        // debug($args);
        $args['wp_query']['venue-description'] = get_field('venue-description', $args['wp_query']['ID']);
        $args['wp_query']['venue-img'] = get_field('venue-description', $args['wp_query']['ID']);
        return $args;
    }
}?>