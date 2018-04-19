<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
class PackageController{
    
    public function getSinglePackageState(){
        $args = [];
        $args['package'] = (array) get_queried_object();
        // debug($args);
        $args['package']['package-img-banner'] = get_field('package-img-banner', $args['package']['ID']);
        $args['package']['package-card-1'] = get_field('package-card-1', $args['package']['ID']);
        $args['package']['package-img-card-1'] = get_field('package-img-card-1', $args['package']['ID']);
        $args['package']['package-card-2'] = get_field('package-card-2', $args['package']['ID']);
        $args['package']['package-img-card-2'] = get_field('package-img-card-2', $args['package']['ID']);
        $args['package']['package-card-3'] = get_field('package-card-3', $args['package']['ID']);
        $args['package']['package-img-card-3'] = get_field('package-img-card-3', $args['package']['ID']);
        $args['package']['package-card-4'] = get_field('package-card-4', $args['package']['ID']);
        $args['package']['package-img-card-4'] = get_field('package-img-card-4', $args['package']['ID']);
  
        return $args;
        
    }
    
}

?>


