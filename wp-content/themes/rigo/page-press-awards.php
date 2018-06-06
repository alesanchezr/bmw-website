<?php
/* Template Name: Wedding Press and Award */
$args = wpas_get_view_data();
get_header();
?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- JUMBOTROM -->
  <div class="parent">
    <div class="jumbotron jb-xlarge text-center pt-4 pb-3 my-0 " style="background-image: url('<?php echo wp_get_attachment_image_src($args['press_award']['press_award-img-banner'],'full')[0] ?>');">
      <!--<div class="card logo medium mx-auto">-->
      <!--  <span class="card-img-top mx-auto" id="bmw-logo" style="visibility: hidden;"></span>-->
      <!--</div>-->
      <div class="jb-text d-block">
        <h1 class="my-0">Press & Awards</h1>
      </div>
    </div>
  </div>
  <!---->
  <div class="awards-recognition container-fluid">
      <div class="container p-5">
        <div class="row">
            <?php 
              for ( $x= 0; $x< count($args['new_array_press_award']); $x++ ){ 
                if( $args['new_array_press_award'][$x]['thumbnail'] != '' ){?>
                  <div class=" col-md-6 card text-center awards-recognition page py-4">
                    <img class="card-img-top mx-auto logo awards large px-1" src="<?php echo $args['new_array_press_award'][$x]['thumbnail'] ?>"></img>
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $args['new_array_press_award'][$x]["post_title"]; ?></h5>
                      <p class="card-text"><?php echo $args['new_array_press_award'][$x]["description"]; ?>.</p>
                    </div>
                  </div>
                <?php 
                  }; 
              }; ?>
              <div class=" col-md-6 card text-center awards-recognition page py-4 mx-auto">
                <h2> Other Awards</h2>
              <?php for ($x=0; $x< count($args['new_array_press_award']); $x++){ 
                // acomodar condicion
                if($args['new_array_press_award'][$x]['thumbnail'] == ''){?>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $args['new_array_press_award'][$x]["post_title"]; ?></h5>
                    <p class="card-text"><?php echo $args['new_array_press_award'][$x]["description"]; ?>.</p>
                  </div>
              <?php }; }; ?>
              </div> 
        </div>
    </div>
  </div>
  <!-- FOOTER FULL -->
  <?php get_footer('small'); ?>
  <!-- FOOTER FULL -->