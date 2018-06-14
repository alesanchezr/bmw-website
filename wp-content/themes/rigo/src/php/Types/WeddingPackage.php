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
    
    public static function serialize($package){
        return [
            'id' => $package -> ID,
            'post_title' => $package -> post_title,
            'thumbnail' =>  wp_get_attachment_image_src( get_field('package-thumbnail', $package -> ID),'medium')[0], 
            'description' =>  get_field('package-description', $package -> ID),
        ];
    }
    
}

?>