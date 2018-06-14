<?php
namespace Rigo\Controller;
use Rigo\Types\Venue;

class APIController{
    
    public function getVenues(){
        $query = Venue::all([
          'posts_per_page' => -1,
        ]);
        return $query->posts;
    }
    
}
?>