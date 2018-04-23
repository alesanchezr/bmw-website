<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
class PressAwardController{
    
    public function getSinglePressAwardState(){
        $args = [];
        $args['press_award'] = (array) get_queried_object();
        // debug($args);
        $args['press_award']['press_award-logo'] = get_field('press_award-logo', $args['press_award']['ID']);
        $args['press_award']['press_award-description'] = get_field('press_award-description', $args['press_award']['ID']);
  
        return $args;
        
    }
    
}

?>


