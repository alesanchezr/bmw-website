<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;
use WP_Query;

class AboutUs extends BasePostType{
     public static function all($args = [], $hook = NULL){
        $args = [ 
    	'post_type' => 'about-us',
    	];
    
        $query = new WP_Query( $args );
        
        return $query;
    } 
    
}
?>