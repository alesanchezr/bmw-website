<?php
/* Template Name: Wedding Church */
$args = wpas_get_view_data();
get_header();
?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- JUMBOTROM -->
<div class="parent d-none d-sm-block">
  <div class="jumbotron text-center my-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['venue']['venue-img-banner'],'full')[0] ?>');">
    <!--<div class="card logo medium mx-auto">-->
    <!--  <span class="card-img-top mx-auto" id="bmw-logo" style="visibility: hidden;"></span>-->
    <!--</div>-->
    <div class="jb-text">
      <h1 class="mb-5">Miami Wedding Venues</h1>
      <a class="request-quote" href="#quote-modal"><button class="btn btw-l align-text-bottom" role="button">Request a quote</button></a><br>
      <p class="pt-3 h2 call-now" >or call now! <a class="phone-number" href="tel:+1<?php echo get_option('phone_number'); ?>"><?php echo get_option('phone_number'); ?></a></p>
    </div>
  </div>
</div>
<!-- END JUMBOTROM -->
<div class="row subtitle-bar light ">
  <div class="col-md-12 text-center py-5 d-none d-sm-block">
    <h2>Wow your guests, you need a venue that will make you shine!</h2>
  </div>
</div>

<div class="p-4 p-sm-0 d-sm-none d-block text-center">
  <h1>Miami Wedding Venues</h1>
</div>
<!-- CARD -->
  <div class="card-deck text-sm-center"> 
    <?php for ($x=0; $x< count($args['new_array_venue']); $x++){ ?>
      <div class="row venue-row col-md-4  mx-auto p-1">
        <div class="col-md-12 col-4 p-0 m-0 center-vertical-div hover-effect">
          <a href="<?php echo get_permalink( $args['new_array_venue'][$x]["id"] )?>">
            <div class="card-img-top venue-thumb" style="background-image: url(<?php echo $args['new_array_venue'][$x]['thumbnail'] ?>);"></div>
          </a>
        </div>
        <a class="color-dark" href="<?php echo get_permalink( $args['new_array_venue'][$x]["id"] )?>">
          <div class="col-md-12 col-8">
            <div class="card text-sm-center">
              <div class="card-body px-0 px-sm-2 ">
                <h5 class="card-title"><?php echo $args['new_array_venue'][$x]["post_title"]; ?></h5>
                <p class="card-text"><?php echo (empty($args['new_array_venue'][$x]["address"])) ? '': $args['new_array_venue'][$x]["address"]; ?></p>
                <hr class="d-sm-none d-block">
              </div>
              <div class="card-footer d-none d-sm-block">
                <a href="<?php echo get_permalink( $args['new_array_venue'][$x]["id"] )?>"><small class=" click-here">Read more</small></a>
              </div>
            </div>
          </div>
        </a>
      </div>
    
    <?php  }; ?>
  </div>
  <?php if(!isset($_GET['extra'])){ ?>
  <div class="text-center bg-light p-4 pb-0">
    <p class="m-0"><a class="click-here" href="?extra">Show some aditional venues</a></p>
  </div>
  <?php } ?>
  <!--    -->
<!-- AWARDA RECOGNITION -->
<?php get_template_part('partials/awards','recognition'); ?>
<!-- FOOTER FULL -->
<?php get_footer(); ?>