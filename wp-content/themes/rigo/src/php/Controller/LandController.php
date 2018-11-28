<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\AboutUs;
use Rigo\Types\Testimonial;
use Rigo\Types\Venue;
use Rigo\Types\Planner;
use Rigo\Types\WeddingPackage;
use WP_Query;

class LandController{

  public function renderCategory(){
    
    $args = [];
    $args['wp_query'] = (array) get_queried_object();
    $post_type = get_field('related_post_type', $args['wp_query']['taxonomy'].'_'.$args['wp_query']['term_id']);
    $query = new WP_Query([
      'post_type' => $post_type,
      'cat' => $args['wp_query']['term_id']
    ]);
    $args['items'] = array_map(function($post){
      if($post->post_type == 'venue'){
        return Venue::serialize($post, 'small');
      }
      else if($post->post_type == 'church'){
        return Church::serialize($church);
      }
      else if($post->post_type == 'wedding-package'){
        return WeddingPackage::serialize($post);
      }
      else if($post->post_type == 'planner'){
        return Planner::serialize($post);
      }
      else return (array) $post;
    }, $query->posts);
    
    
    $args['menu-venues'] = Venue::getVenuesMenu();
    $args['wp_query']['category_h1'] = get_field('category_h1', $args['wp_query']['taxonomy'].'_'.$args['wp_query']['term_id']);
    $args['wp_query']['category_h2'] = get_field('category_h2', $args['wp_query']['taxonomy'].'_'.$args['wp_query']['term_id']);
    $args['wp_query']['category-template'] = get_field('category-template', $args['wp_query']['taxonomy'].'_'.$args['wp_query']['term_id']);
    $args['background-banner'] = get_field('category_background_banner', $args['wp_query']['taxonomy'].'_'.$args['wp_query']['term_id']);
    return $args;
  }
  
  public function getLandingContent(){
    
    $args = [];
    $args['wp_query'] = (array) get_queried_object();
    $args['background-banner'] = get_field('land-img-banner', $args['wp_query']['ID']);
    $args['land-tagline'] = get_field('land-tagline', $args['wp_query']['ID']);
    $args['items'] = $this->_getPostsFromCategory($args['wp_query']['ID']);
    return $args;
  }
  
  private function _getPostsFromCategory($postId){
    
    $categoryId = get_field('related_category', $postId);
    $query = new WP_Query([
      'post_type' => 'venue',
      'cat' => $categoryId
    ]);
    return array_map(function($post){
      if($post->post_type == 'venue'){
        return Venue::serialize($post, 'small');
      }
      else if($post->post_type == 'church'){
        return Church::serialize($church);
      }
      else if($post->post_type == 'wedding-package'){
        return WeddingPackage::serialize($post);
      }
      else if($post->post_type == 'planner'){
        return Planner::serialize($post);
      }
      else return (array) $post;
    }, $query->posts);
  }
  
}?>