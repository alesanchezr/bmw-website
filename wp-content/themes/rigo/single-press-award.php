<?php  
  $args = wpas_get_view_data();
  debug($args);
?>
<?php  get_header(); ?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others');
?>
<!-- MENU VENUE-->
<div class="card text-center awards-recognition page">
  <img class="d-block w-100 px-0" src="<?php echo wp_get_attachment_image_src( $args['press_award']['press_award-logo'],'full')[0]?>" alt="First slide">
  <img src="<?php echo wp_get_attachment_image_src( $args['press_award']['press_award-logo'],'full')[0] ?>"> </img>
  <!--<span class="card-img-top mx-auto logo awards large px-1" id=""> -->
  <!--</span>-->
  <div class="card-body">
    <h5 class="card-title"> <?php echo $args['press_award']['post_title']?> </h5>
    <p class="card-text"> <?php echo $args['press_award']['press_award-description'] ?>. </p>
  </div>
</div>
 <?php get_footer(); ?>