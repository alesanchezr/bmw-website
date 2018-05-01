<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
class CateringController{

  public function getSingleCateringState(){
    
    $args = [];
    $args['catering'] = (array) get_queried_object();
    $args['catering']['catering-img-banner'] = get_field('catering-img-banner', $args['catering']['ID']);
    $args['catering']['catering-starters-left'] = get_field('catering-starters-left', $args['catering']['ID']);
    $args['catering']['catering-starters-right'] = get_field('catering-starters-right', $args['catering']['ID']);
    $args['catering']['catering-main-left'] = get_field('catering-main-left', $args['catering']['ID']);
    $args['catering']['catering-main-right'] = get_field('catering-main-right', $args['catering']['ID']);
    $args['catering']['catering-sides-left'] = get_field('catering-sides-left', $args['catering']['ID']);
    $args['catering']['catering-sides-right'] = get_field('catering-sides-right', $args['catering']['ID']);
    
    return $args;
  }
  
}?>