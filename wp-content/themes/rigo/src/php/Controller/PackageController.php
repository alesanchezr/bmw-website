<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\WeddingPackage;
use Rigo\Types\Testimonial;
use Rigo\Types\Venue;
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
        
        $args['menu-venues']['garden'] = Venue::getByCategory(4);
        $args['menu-venues']['historical'] = Venue::getByCategory(5);
        $args['menu-venues']['unique'] = Venue::getByCategory(6);
        
        $aux = get_queried_object();
        $testimonials = get_field('testimonials', $aux -> ID);
        $args['testimonials'] = Testimonial::getTestimonials($testimonials);
        $args['testimonials'] = array_map(function($testimonial) { 
            return Testimonial::extendTestimonials((array)$testimonial);},
            $args['testimonials'] );
  
        return $args;
        
    }
    
    public function renderPageWeddingPackage(){ 

        $args =[];
        $args['package'] = (array) get_queried_object();
        $args['package']['packages-img-banner'] = get_field('packages-img-banner', $args['package']['ID']);
        $args['package']['packages-description'] = get_field('packages-description', $args['package']['ID']);
        $args['package']['packages-logo'] = get_field('packages-logo', $args['package']['ID']);
        $args['package']['packages-img-banner-2'] = get_field('packages-img-banner-2', $args['package']['ID']);
        $args['package']['packages-description-2'] = get_field('packages-description-2', $args['package']['ID']);
        
        $args['menu-venues']['garden'] = Venue::getByCategory(4);
        $args['menu-venues']['historical'] = Venue::getByCategory(5);
        $args['menu-venues']['unique'] = Venue::getByCategory(6);
        
        $aux = get_queried_object();
        $testimonials = get_field('testimonials', $aux -> ID);
        $args['testimonials'] = Testimonial::getTestimonials($testimonials);
        $args['testimonials'] = array_map(function($testimonial) { 
            return Testimonial::extendTestimonials((array)$testimonial);},
            $args['testimonials'] );
        $query = WeddingPackage::all();
        $args['weddingPackage_list'] = $query -> posts;
        $args['new_array_package'] = array_map( function($package){ 
            return [
            'id' => $package -> ID,
            'post_title' => $package -> post_title,
            'thumbnail' =>  wp_get_attachment_image_src( get_field('package-thumbnail', $package -> ID),'medium')[0], 
            'description' =>  get_field('package-description', $package -> ID),
            ];
        }, $args['weddingPackage_list']);
        return $args;
    }
    
}?>

