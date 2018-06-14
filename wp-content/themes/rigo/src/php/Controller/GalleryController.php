<?php
namespace Rigo\Controller;
use Rigo\Types\Course;
use Rigo\Types\Venue;
class GalleryController{

  public function getSingleGalleryState(){
    
    $args = [];
    $postId = null;
    if(isset($_GET['postId'])) $postId = $_GET['postId'];
    else if(isset($_GET['post_id'])) $postId = $_GET['post_id'];
    
    
    $args['gallery'] = (array) get_queried_object();
    $args['gallery']['gallery-img-banner'] = get_field('gallery-img-banner', $args['gallery']['ID']);
    $args['gallery']['gallery-page-gallery'] = $this -> getPostGalley($postId);
    
    $args['venue'] = (array) Venue::get($postId);
    $args['venue']['venue-google-360-field'] = get_field('venue-google-360-field', $args['venue']['ID']);
    
    $args['menu-venues'] = Venue::getVenuesMenu();
    
    //debug($_GET);
    return $args;
  }
  
    function getPostGalley( $galleryId){
    $imgs = [];
    $gallery = get_post_gallery($galleryId,false);
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