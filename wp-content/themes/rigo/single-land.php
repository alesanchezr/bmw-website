<?php  
$args = wpas_get_view_data();

?>
<?php get_header('small'); ?>
<!--MENU MOBILE-->
  <div class="parent">
    <div class="jumbotron  text-center pt-4 pb-3 my-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['background-banner'],'full')[0] ?>')">
      <?php get_template_part('partials/header','landing'); ?>
      <!--<div class="card logo medium mx-auto">-->
      <!--  <span class="card-img-top mx-auto" id="bmw-logo"></span>-->
      <!--</div>-->
      <div class="jb-text d-block">
        <h1 class="mt-0 mb-4"><?php echo $args["land-tagline"]; ?></h1>
        <button class="btn btw-l align-text-bottom request-quote mb-3" href="#quote-modal" role="button">Get a fast a quote</button><br>
        <a href="tel:+1<?php echo get_option('phone_number'); ?>" class="p-2 mt-4">or call now! <span class="phone-number"><?php echo get_option('phone_number'); ?></span></a>
      </div>

    </div>
  </div>
<section class="section-rating">
  <?php get_template_part('partials/rating','big'); ?>
</section>
<section class="section-calltoaction">
  <?php get_template_part('partials/call-to-action'); ?>
</section>
<section class="section-venues" style="overflow: hidden;">
  <div class="card-deck text-sm-center container mx-auto"> 
    <?php for ($x=0; $x< count($args['items']); $x++){ ?>
      <div class="row venue-row col-md-4  mx-auto p-1">
        <div class="col-md-12 col-4 p-0 m-0 center-vertical-div hover-effect">
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
</section>
    <!-- END FOOTER FULL -->
  <?php get_footer('small'); ?>