<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;
use WP_Query;
class Venue extends BasePostType{
    
    public static function getByCategory($categoryId){
        
        $query = Venue::all([
            'cat' => $categoryId
        ]);
        
        
        return $query->posts;
    }
    
     public static function all($args = [], $hook = NULL){
        $args['post_type'] = 'venue';
        $query = new WP_Query( $args );
        return $query;
    } 
    
    public static function getVenuesMenu(){
        return [
            'garden' => self::getByCategory(4),
            'historical' => self::getByCategory(5),
            'unique' => self::getByCategory(6)
        ];
    }
    
    public static function serialize($venue, $size='small'){
        if(!is_array($venue)) $venue = (array) $venue;
        switch($size){
            case "small":
                return [
                    'post_title' => $venue['post_title'],
                    'id' => $venue['ID'],
                    'thumbnail' =>  wp_get_attachment_image_src( get_field('venue-thumbnail', $venue['ID']),'medium_large')[0], 
                    'address' =>  get_field('venue-address', $venue['ID']),
                ];
            break;
            case "big":
                $venue = [
                    'ID' => $venue['ID'],
                    'post_title' => $venue['post_title'],
                    'venue-description' => get_field('venue-description', $venue['ID']),
                    'venue-capacity' => get_field('venue-capacity', $venue['ID']),
                    'venue-time' => get_field('venue-time', $venue['ID']),
                    'venue-address' => get_field('venue-address-big', $venue['ID']),
                    'venue-acommodations' => get_field('venue-acommodations', $venue['ID']),
                    'venue-parking' => get_field('venue-parking', $venue['ID']),
                    'venue-transportation' => get_field('venue-transportation', $venue['ID']),
                    'venue-layout-description' => get_field('venue-layout-description', $venue['ID']),
                    'venue-score-point' => get_field('venue-score-point', $venue['ID']),
                    'venue-score-description' => get_field('venue-score-description', $venue['ID']),
                    'venue-pros' => get_field('venue-pros', $venue['ID']),
                    'venue-cons' => get_field('venue-cons', $venue['ID']),
                    'venue-bottom-half' => get_field('venue-bottom-half', $venue['ID']),
                    'venue-google-maps' => get_field('venue-google-maps', $venue['ID']),
                    'venue-google-360-field' => get_field('venue-google-360-field', $venue['ID']),
                    'venue-wedding' => get_field('venue-wedding', $venue['ID']),
                    'facebook-score' => get_field('facebook-score', $venue['ID']),
                    'google-score' => get_field('google-score', $venue['ID']),
                    'yelp-score' => get_field('yelp-score', $venue['ID']),
                    'weddingwire-score' => get_field('weddingwire-score', $venue['ID']),
                    'theknot-score' => get_field('theknot-score', $venue['ID'])
                ];
                
                //reviews
                $venue = array_merge($venue,[
                    'venue-score-point' => self::getReviewAverage([
                      $venue['facebook-score'],
                      $venue['google-score'],
                      $venue['yelp-score'],
                      $venue['weddingwire-score'],
                      $venue['theknot-score']
                    ]),
                ]);
                
                //images
                $venue = array_merge($venue,[
                    'venue-img-banner' => get_field('venue-img-banner', $venue['ID']),
                    'venue-img-layout' => get_field('venue-img-layout', $venue['ID']),
                    'venue-img-carousel-1' => get_field('venue-img-carousel-1', $venue['ID']),
                    'venue-img-carousel-2' => get_field('venue-img-carousel-2', $venue['ID']),
                    'venue-img-carousel-3' => get_field('venue-img-carousel-3', $venue['ID']),
                    'venue-post-gallery' => self::getPostGalley($venue['ID'])
                ]);
                
                return $venue;
            break;
            default:
                return [
                    'post_title' => $venue['post_title'],
                    'id' => $venue['ID'],
                    'thumbnail' =>  wp_get_attachment_image_src( get_field('venue-thumbnail', $venue['ID']),'medium_large')[0], 
                    'address' =>  get_field('venue-address', $venue['ID']),
                ];
            break;
        }
    }
    
    static function getReviewAverage($arrayOfReviews){
        // debug($arrayOfReviews);
        $reviewSum = 0;
        $cont = 0;
        foreach ($arrayOfReviews as $review) {
          if($review and $review!=''){
            $reviewSum += floatval($review);
            $cont++;
          } 
        }
        
        if($cont==0) return 0;
        
        return round($reviewSum / $cont,1);
    }
    
    static function getPostGalley( $venueId ){
        $imgs = [];
        $gallery = get_post_gallery($venueId,false);
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
}

?>