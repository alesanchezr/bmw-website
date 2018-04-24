<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\WeddingPackage;
use Rigo\Types\Testimonial;
class PackageController{
    
    public function getSinglePackageState(){
        $args = [];
        $args['package'] = (array) get_queried_object();
        $args['package']['package-description'] = get_field('package-description', $args['package']['ID']);
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
    
    public function renderPageWeddingPackage(){ 

        $args =[];
        $aux = get_queried_object();
        $testimonials = get_field('testimonials', $aux -> ID);
        $args['testimonials'] = Testimonial::getTestimonials($testimonials);
        
        $args['testimonials'] = array_map(function($testimonial) { 
            return Testimonial::extendTestimonials((array)$testimonial);
        }, $args['testimonials'] );
        // debug($aux);
        // debug($args['testimonials']);
        $query = WeddingPackage::all();
        $args['weddingPackage_list'] = $query -> posts;
        $args['new_array_package'] = array_map( function($package){ 
            return [
            'id' => $package -> ID,
            'post_title' => $package -> post_title,
            'thumbnail' =>  wp_get_attachment_image_src( get_field('package-img-banner', $package -> ID),'full')[0], 
            'description' =>  get_field('package-description', $package -> ID),
            ];
        }, $args['weddingPackage_list']);
        return $args;
    }
    
}?>


