<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\AboutUs;
class AboutUsController{

  public function getSingleAboutUsState(){
    
    $args = [];
    $args['about_us'] = (array) get_queried_object();
    $args['about_us']['about_us-photo'] = get_field('about_us-photo', $args['about_us']['ID']);
    $args['about_us']['about_us-position'] = get_field('about_us-position', $args['about_us']['ID']);
    
    return $args;
  }
  
  public function renderPageAboutUs(){

    $args =[];
    $args['about_us'] = (array) get_queried_object();
    $args['about_us']['about_us-img-banner'] = get_field('about_us-img-banner', $args['about_us']['ID']);
    $args['about_us']['events_planned'] = get_field('events_planned', $args['about_us']['ID']);
    $args['about_us']['satisfied_brides'] = get_field('satisfied_brides', $args['about_us']['ID']);
    $args['about_us']['experience'] = get_field('experience', $args['about_us']['ID']);
    $args['about_us']['description'] = get_field('description', $args['about_us']['ID']);
    
    $query = AboutUs::all();
    $args['about_us_team'] = $query -> posts;
    $args['new_array_about_us'] = array_map( function($about_us){ 
      return [
      'id' => $about_us -> ID,
      'post_title' => $about_us -> post_title,
      'thumbnail' =>  wp_get_attachment_image_src( get_field('about_us-photo', $about_us -> ID),'full')[0], 
      'position' =>  get_field('about_us-position', $about_us -> ID),
      ];
    }, $args['about_us_team']);
    
      // debug($args['new_array_about_us']);
    return $args;
  }
  
}?>