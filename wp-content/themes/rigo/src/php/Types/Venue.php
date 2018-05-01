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
}

?>