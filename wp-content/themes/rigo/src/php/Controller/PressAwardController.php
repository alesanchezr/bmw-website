<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\PressAward;
class PressAwardController{
    
    public function getSinglePressAwardState(){
        $args = []; 
        $args['press_award'] = (array) get_queried_object();
        $args['press_award']['press_award-logo'] = get_field('$press_award-logo', $args['press_award']['ID']);
        $args['press_award']['press_award-description'] = get_field('press_award-description', $args['press_award']['ID']);
  
        return $args;
        
    }
    
    public function renderPagePressAward(){
    
        $args =[];
        $args['press_award'] = (array) get_queried_object();
        $args['press_award']['press_award-img-banner'] = get_field('press_award-img-banner', $args['press_award']['ID']);
        $query = PressAward::all();
        $args['press_award_list'] = $query -> posts;
        $args['new_array_press_award'] = array_map( function($press_award){ 
          return [
          'id' => $press_award -> ID,
          'post_title' => $press_award -> post_title,
          'thumbnail' =>  wp_get_attachment_image_src( get_field('press_award-logo', $press_award -> ID),'full')[0], 
          'description' =>  get_field('press_award-description', $press_award -> ID),
          ];
        }, $args['press_award_list']);
        
        $args['menu-venues'] = Venue::getVenuesMenu();
        
        // debug($args['$press_award']);
        
        return $args;
    }
    
}?>


