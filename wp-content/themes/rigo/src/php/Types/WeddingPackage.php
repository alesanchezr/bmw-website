<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;
use WP_Query;

class WeddingPackage extends BasePostType{
   
   public static function all($args = [], $hook = NULL){
        $args = [ 
    	'post_type' => 'wedding-package',
    	];
    
        $query = new WP_Query( $args );
        
        return $query;
    } 
    
}

?>