<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;
use WP_Query;

class PressAward extends BasePostType{
     public static function all($args = [], $hook = NULL){
        $args = [ 
    	'post_type' => 'press-award',
    	];
    
        $query = new WP_Query( $args );
        
        return $query;
    } 
    
}
?>