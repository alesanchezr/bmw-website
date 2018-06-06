<?php  
/* Template Name: Wedding Packages */
$args = wpas_get_view_data();
get_header();
?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- JUMBOTROM -->
  <div class="parent p-sm-0">
      <div class="jumbotron text-center pt-4 pb-3 my-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['package']['packages-img-banner'],'full')[0] ?>');">
          <!--<div class="card logo medium mx-auto d-none d-sm-block">-->
          <!--    <span class="card-img-top mx-auto" id="bmw-logo" style="visibility: hidden;"></span>-->
          <!--</div>-->
          <div class="jb-text d-none d-sm-block">
            <h1 class="my-0 pb-3">Wedding Miami Packages for Miami</h1>
            <p class="p-2 mb-0">Pick a packages and start customizing your own wedding</p>
            <a href="#quote-modal" class="request-quote"><button class="btn btw-l align-text-bottom" role="button">Get a fast a quote</button></a><br>
            <p class="py-3 h2 call-now" >or call now! <a class="phone-number" href="tel:+1<?php echo get_option('phone_number'); ?>"><?php echo get_option('phone_number'); ?></a></p>
          </div>
      </div>
  </div>
  <div class="container-fluid d-sm-none d-block text-center">
    <h1 class="my-0 p-3">Wedding Miami Packages for Miami</h1>
    <hr>
    <ul class="nav nav-tabs  large navbar-nav  ">
      <?php for( $i= 0; $i< count($args['new_array_package']); $i++){ ?>
        <li class="nav-item p-2 ">
          <a class="nav-link" href="<?php echo get_permalink( $args['new_array_package'][$i]["id"] )?>"><h4 ><?php echo $args['new_array_package'][$i]["post_title"]; ?></h4></a>
          <hr class="m-0">
        </li>
      <?php } ?>
    </ul>

  </div>
  <div class="d-none d-sm-block">
    <!-- END JUMBOTROM -->
    <div class="container-fluid">
      <div class="row text-center px-auto py-5">
        <div class="col-md-12 col-sm-12">
          <p class="h8 my-0"> <?php echo $args["package"]["packages-description"]; ?>.</p>
        </div>
      </div>
    </div>
    <!-- CARGROUP -->
      <div class="card-group">
        <?php for( $j= 0; $j< count($args['new_array_package']); $j++){ ?>
          <a href="<?php echo get_permalink( $args['new_array_package'][$j]["id"] )?>">
          <div class="card p-1">
              <a class="click-here img hover-effect" href="<?php echo get_permalink( $args['new_array_package'][$j]["id"] )?>">
                <div class="card-img-top venue-thumb" style="background-image: url(<?php echo $args['new_array_package'][$j]['thumbnail'] ?>)"></div>
              </a>
            <div class="card-body max-h text-center pt-4">
              <p class=" h8 card-title"><b><?php echo $args['new_array_package'][$j]["post_title"]; ?></b></p>
              <p class="card-text"><?php echo $args['new_array_package'][$j]["description"]; ?>.</p>
            </div>
              <div class="card-footer text-center pb-3 pt-0">
                <a href="<?php echo get_permalink( $args['new_array_package'][$j]["id"] )?>"><small class=" click-here">Read more</small></a>
              </div>
          </div>
        </a>
        <?php } ?>
      </div>
<!-- AWARDA RECOGNITION -->
  <?php get_template_part('partials/awards','recognition'); ?>
  <!---->
    <div class="row subtitle-bar py-3 d-none d-md-block">
      <div class="col-md-12 text-center padding-all">
        <h2>Client Testimonials</h2>
      </div>
    </div>
  </div>
  <!-- CLIENT TESTIMONIALS -->
  <div class='d-none d-md-block'>
  <?php get_template_part('partials/client','testimonial'); ?>
    
  </div>
    <!-- END CLIENT TESTIMONIALS -->
    <div class="row subtitle-bar py-3 d-none d-md-block">
      <div class="col-md-12 text-center padding-all">
        <h5>Why Best Miami Weddings</h5>
      </div>
    </div>
    <!-- JUMBOTROM -->
      <div class="jumbotron text-dark jb-medium p-3 my-0 d-none d-md-block" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['package']['packages-img-banner-2'],'full')[0] ?>');">
        <div class="container text-center px-5 py-3">
          <!--<img class="logo small" id="wedding-wire-black"></span>-->
          <img class="logo small why-bmw" src="<?php echo wp_get_attachment_image_src($args['package']['packages-logo'],'full')[0] ?>" alt="First slide"> </img>
          <?php echo $args['package']['packages-description-2'] ?>
         
        </div>
      </div>
    <!-- END JUMBOTROM -->
  </div>
<!-- FOOTER FULL -->
  <?php get_footer(); ?>
