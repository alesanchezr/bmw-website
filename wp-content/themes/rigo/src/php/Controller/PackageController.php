<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
class PackageController{
    
    public function getSinglePackageState(){
        $args = [];
        $args['wp_query'] = (array) get_queried_object();
        // debug($args);
        $args['wp_query']['package-img-banner'] = get_field('package-img-banner', $args['wp_query']['ID']);
        $args['wp_query']['package-card-1'] = get_field('package-card-1', $args['wp_query']['ID']);
        $args['wp_query']['package-img-card-1'] = get_field('package-img-card-1', $args['wp_query']['ID']);
        $args['wp_query']['package-card-2'] = get_field('package-card-2', $args['wp_query']['ID']);
        $args['wp_query']['package-img-card-2'] = get_field('package-img-card-2', $args['wp_query']['ID']);
        $args['wp_query']['package-card-3'] = get_field('package-card-3', $args['wp_query']['ID']);
        $args['wp_query']['package-img-card-3'] = get_field('package-img-card-3', $args['wp_query']['ID']);
        $args['wp_query']['package-card-4'] = get_field('package-card-4', $args['wp_query']['ID']);
        $args['wp_query']['package-img-card-4'] = get_field('package-img-card-4', $args['wp_query']['ID']);
  
        return $args;
        
    }
    
}

?>


