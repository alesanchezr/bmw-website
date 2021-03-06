<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\Church;
use Rigo\Types\Venue;
class ChurchController{

  public function getSingleChurchState(){
    
    $args['church'] = (array) get_queried_object();
    $args['church']['church-description'] = get_field('church-description', $args['church']['ID']);
    $args['church']['church-capacity'] = get_field('church-capacity', $args['church']['ID']);
    $args['church']['church-time'] = get_field('church-time', $args['church']['ID']);
    $args['church']['church-address'] = get_field('church-address', $args['church']['ID']);
    $args['church']['church-acommodations'] = get_field('church-acommodations', $args['church']['ID']);
    $args['church']['church-parking'] = get_field('church-parking', $args['church']['ID']);
    $args['church']['church-transportation'] = get_field('church-transportation', $args['church']['ID']);
    $args['church']['church-layout-description'] = get_field('church-layout-description', $args['church']['ID']);
    $args['church']['church-bottom-half'] = get_field('church-bottom-half', $args['church']['ID']);
    $args['church']['church-google-maps'] = get_field('church-google-maps', $args['church']['ID']);
    $args['church']['church-360-tour'] = get_field('church-360-tour', $args['church']['ID']);
    $args['church']['church-wedding'] = get_field('church-wedding', $args['church']['ID']);
    $args['church']['church-post-gallery'] = Church::getPostGalley($args['church']['ID']);
    
    $args['menu-venues'] = Church::getChurchesMenu();
// IMAGES
    $args['church']['church-img-banner'] = get_field('church-img-banner', $args['church']['ID']);
    return $args;
  }
  
  public function renderPageChurch(){
    
    $args =[];
    $args['church'] = (array) get_queried_object();
    $args['church']['church-img-banner'] = get_field('church-img-banner', $args['church']['ID']);
    $args['church']['church-description'] = get_field('church-description', $args['church']['ID']);
    
    $args['menu-venues'] = Venue::getVenuesMenu();
    
    $args['page'] = (array) get_queried_object();
    $query = Church::all(['posts_per_page' => 15]);
    $args['church_list'] = $query -> posts;
    
    $args['new_array_church'] = array_map( function($church){ 
      return Church::serialize($church);
    }, $args['church_list']);
    
    // debug($args['new_array_church']);
    return $args;
    
  }
  
}?>