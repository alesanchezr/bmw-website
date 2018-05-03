<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Venue extends BasePostType{
    
    public static function getByCategory($categoryId){
        
        $query = Venue::all([
            'cat' => $categoryId,
            'posts_per_page' => 15
        ]);
        
        
        return $query->posts;
    }
}

?>