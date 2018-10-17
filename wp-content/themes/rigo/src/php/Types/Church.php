<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;
use WP_Query;

class Church extends BasePostType{
    
    public static function getByCategory($categoryId){
        
        $query = self::all([
            'cat' => $categoryId
        ]);
        return $query->posts;
    }
    
     public static function all($args = [], $hook = NULL){
        $args = [ 
    	    'post_type' => 'church',
    	];
        $query = new WP_Query( $args );
        return $query;
    } 
    
    public static function serialize($church, $size='small'){
        $response = [
            'id' => $church -> ID,
            'post_title' => $church -> post_title,
            'thumbnail' =>  wp_get_attachment_image_src( get_field('church-thumbnail', $church -> ID),'medium_large')[0], 
            'address' =>  get_field('church-small-address', $church -> ID),
        ];
        if($size=='big'){
            $response['church-post-gallery'] = self::getPostGalley($church->ID);
        }
        return $response;
    }
    
    public static function getChurchesMenu(){
        return [
            'garden' => self::getByCategory(4),
            'historical' => self::getByCategory(5),
            'unique' => self::getByCategory(6)
        ];
    }
    
    static function getPostGalley( $churchId ){
        $imgs = [];
        $gallery = get_post_gallery($churchId,false);
        $ids = explode( ",", $gallery['ids'] );
        foreach( $ids as $id ) {
          $newImg = array(
          'id' => $id, 
          'thumbnail' => wp_get_attachment_image_src( $id ,'medium_large')[0], 
          'default' => wp_get_attachment_image_src( $id, 'full')[0], 
          'alt' => get_post_meta( $id, '_wp_attachment_image_alt', true)
          );
          $imgs[] = $newImg;
        } 
        
        return $imgs;
    }
    
}?>