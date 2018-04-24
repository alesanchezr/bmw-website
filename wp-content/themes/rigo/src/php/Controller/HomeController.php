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
    $args['testimonials'] = Testimonial::getTestimonialsFromParents([$args['home']['ID']]);

    return $args;
  }
   
}?>