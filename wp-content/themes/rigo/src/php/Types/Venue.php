<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Venue extends BasePostType{
    
    public static function getByCategory($categoryId){
        
        $query = Venue::all([
            'cat' => $categoryId
        ]);
        
        
        return $query->posts;
    }
    
    public static function getVenuesMenu(){
        return [
            'garden' => self::getByCategory(4),
            'historical' => self::getByCategory(5),
            'unique' => self::getByCategory(6)
        ];
    }
    
    public static function serialize($venue, $size='small'){
        switch($size){
            case "small":
                return [
                    'post_title' => $venue -> post_title,
                    'id' => $venue -> ID,
                    'thumbnail' =>  wp_get_attachment_image_src( get_field('venue-thumbnail', $venue -> ID),'medium_large')[0], 
                    'address' =>  get_field('venue-address', $venue -> ID),
                ];
            break;
            default:
                return [
                    'post_title' => $venue -> post_title,
                    'id' => $venue -> ID,
                    'thumbnail' =>  wp_get_attachment_image_src( get_field('venue-thumbnail', $venue -> ID),'medium_large')[0], 
                    'address' =>  get_field('venue-address', $venue -> ID),
                ];
            break;
        }
    }
}

?>