<?php
$args = wpas_get_view_data();
get_header();
?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- JUMBOTROM -->
<div class="parent">
  <div class="jumbotron text-center my-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['background-banner'],'full')[0] ?>');">
    <div class="card logo medium mx-auto">
      <span class="card-img-top mx-auto" id="bmw-logo"></span>
    </div>
    <div class="">
      <h1 class="mb-5"><?php echo $args['wp_query']['name'];  ?></h1>
      <a class="btn btw-l align-text-bottom request-quote" href="#quote-modal">Request a quote</a><br>
      <p class="py-3 h2 call-now" >or call now! <a class="phone-number" href="tel:+1<?php echo get_option('phone_number'); ?>"><?php echo get_option('phone_number'); ?></a></p>
    </div>
  </div>
</div>
<!-- END JUMBOTROM -->
<div class="row subtitle-bar light d-sm-block d-none">
  <div class="col-md-12 text-center py-5">
    <h2><?php echo $args['wp_query']['description'];  ?></h2>
  </div>
</div>

<div class="d-sm-none d-block text-center">
  <p class="p-4"><?php echo $args['wp_query']['description'];  ?></p>
</div>
<!-- CARD -->
  <div class="card-deck text-sm-center"> 
    <?php for ($x=0; $x< count($args['items']); $x++){ ?>
      <div class="row col-md-4  mx-auto p-1">
        <div class="col-md-12 col-4 p-0 m-0 center-vertical-div">
          <a href="<?php echo get_permalink( $args['items'][$x]["id"] )?>">
            <div class="card-img-top venue-thumb" style="background-image: url(<?php echo $args['items'][$x]['thumbnail'] ?>);"></div>
          </a>
        </div>
        <a class="color-dark" href="<?php echo get_permalink( $args['items'][$x]["id"] )?>">
          <div class="col-md-12 col-8">
            <div class="card text-sm-center">
              <div class="card-body px-0 px-sm-2 ">
                <h5 class="card-title"><?php echo $args['items'][$x]["post_title"]; ?></h5>
                <p class="card-text"><?php echo (empty($args['items'][$x]["address"])) ? '': $args['items'][$x]["address"]; ?></p>
                <hr class="d-sm-none d-block">
              </div>
              <div class="card-footer d-none d-sm-block">
                <a href="<?php echo get_permalink( $args['items'][$x]["id"] )?>"><small class=" click-here">Read more</small></a>
              </div>
            </div>
          </div>
        </a>
      </div>
    
    <?php  }; ?>
  </div>
  <!--    -->
<!-- AWARDA RECOGNITION -->
<?php get_template_part('partials/awards','recognition'); ?>
<!-- FOOTER FULL -->
<?php get_footer(); ?>