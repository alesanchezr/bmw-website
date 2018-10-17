<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Planner extends BasePostType{
    public static function serialize($planner, $size='small'){
        $response = [
            'id' => $planner -> ID,
            'post_title' => $planner -> post_title,
            'thumbnail' =>  wp_get_attachment_image_src( get_field('planner-img-banner', $planner -> ID),'medium_large')[0], 
            'address' =>  get_field('planner-description', $planner -> ID),
        ];
        return $response;
    }
}

?>