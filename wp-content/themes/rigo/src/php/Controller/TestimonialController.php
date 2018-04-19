<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
class TestimonialController{
    
    public function getSingleTestimonialState(){
        $args = [];
        $args['testimonial'] = (array) get_queried_object();
        // debug($args);
        $args['testimonial']['testimonial-photo'] = get_field('testimonial-photo', $args['testimonial']['ID']);
        $args['testimonial']['testimonial-description'] = get_field('testimonial-description', $args['testimonial']['ID']);
  
        return $args;
        
    }
    
}

?>


