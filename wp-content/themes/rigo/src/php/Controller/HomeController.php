<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\Testimonial;
class HomeController{

  public function getSingleHomeState(){
    
    $args = [];
    $args['home'] = (array) get_queried_object();
    $args['home']['home-img-banner'] = get_field('home-img-banner', $args['home']['ID']);
    $args['home']['home-img-venues'] = get_field('home-img-venues', $args['home']['ID']);
    $args['home']['home-img-packages'] = get_field('home-img-packages', $args['home']['ID']);
    $args['home']['home-img-banner-2'] = get_field('home-img-banner-2', $args['home']['ID']);
   $aux = get_queried_object();
        $testimonials = get_field('testimonials', $aux -> ID);
        $args['testimonials'] = Testimonial::getTestimonials($testimonials);
        $args['testimonials'] = array_map(function($testimonial) { 
            return Testimonial::extendTestimonials((array)$testimonial);},
            $args['testimonials'] );
    return $args;
  }
   
}?>