<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\AboutUs;
use Rigo\Types\Testimonial;
use Rigo\Types\Venue;
use WP_Query;

class CategoryController{

  public function renderCategory(){
    
    $args = [];
    $args['wp_query'] = (array) get_queried_object();
    $post_type = get_field('related_post_type', $args['wp_query']['taxonomy'].'_'.$args['wp_query']['term_id']);
    $query = new WP_Query([
      'post_type' => $post_type,
      'cat' => 4
    ]);
    $args['items'] = array_map(function($post){
      if($post->post_type == 'venue'){
        return Venue::serialize($post, 'small');
      }
      else if($post->post_type == 'church'){
        return $post;
      }
      else if($post->post_type == 'wedding-package'){
        return $post;
      }
      else return $post;
    }, $query->posts);
    
    
    $args['menu-venues'] = Venue::getVenuesMenu();
    $args['background-banner'] = get_field('category_background_banner', $args['wp_query']['taxonomy'].'_'.$args['wp_query']['term_id']);
    return $args;
  }
  
}?>