<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Testimonial extends BasePostType{     
    public static function getTestimonials($children){
        $query = Testimonial::all([
            'post__in' => $children,
            'posts_per_page' => 2,
            'posts_type' => 'testimonial',
            'post_status' => 'any'
            ]);
            // debug($query -> posts);
        return $query -> posts;
        
    }
    public static function extendTestimonials($testimonial){
        $testimonial['testimonial-photo'] = get_field('testimonial-photo', $testimonial['ID']);
        $testimonial['testimonial-description'] = get_field('testimonial-description', $testimonial['ID']);
        $testimonial['testimonial-score'] = get_field('testimonial-score', $testimonial['ID']);

        return $testimonial;
        
    }
    
    
    
}
?>