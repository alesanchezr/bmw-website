<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;
use WP_Query;

class Church extends BasePostType{
     public static function all($args = [], $hook = NULL){
        $args = [ 
    	'post_type' => 'church',
    	];
    
        $query = new WP_Query( $args );
        
        return $query;
    } 
    
    public static function serialize($church){
        return [
            'id' => $church -> ID,
            'post_title' => $church -> post_title,
            'thumbnail' =>  wp_get_attachment_image_src( get_field('church-thumbnail', $church -> ID),'medium_large')[0], 
            'address' =>  get_field('church-small-address', $church -> ID),
        ];
    }
    
}?>