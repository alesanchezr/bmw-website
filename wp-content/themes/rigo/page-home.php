<?php 
 /* Template Name: Wedding Home */
 $args = wpas_get_view_data();
 get_header('home'); 
?>
 <body>
  <!-- JUMBOTROM -->
  <div class="parent">
    <div id="home-slider" class="jumbotron jb-large text-center">
      <ul class='home-image-slider' data-for="#home-slider">
        <?php foreach($args['home']['slideshow-images'] as $img){ ?>
        <li slide-url='<?php echo wp_get_attachment_image_src( $img['url'],'full')[0] ?>' slide-color='<?php echo $img['color']; ?>'></li>
        <?php } ?>
      </ul>
      <div class="card logo medium mx-auto pb-5">
        <span class="card-img-top mx-auto" id="bmw-logo" style="visibility: hidden;"></span>
      </div>
      <div class="jb-button">
        <!--<button class="btn btw-l align-text-bottom d-block mx-auto mb-4" role="button" data-toggle="modal" data-target="#openModal">Request a quote</button>-->
        <a href="#quote-modal" class="request-quote"><button type="button" class="btn btw-m">Request a quote</button></a>

      </div>
        <a class="d-none d-sm-block pb-1 mt-2" href="#services"><span class="logo xsmall" id="arrow-down"></span></a>
      </div>
    </div>
  </div>
  <!-- -->
  <div class="row subtitle-bar py-3">
    <div id="services" class="col-md-12 text-center padding-all">
      <h2>Our services</h2>
    </div>
  </div>
  <!-- CARD GROUP -->
  <div class="home card-group">
    <div class="card">
      <a class="img mx-md-0 mx-3 hover-effect" href="<?php echo get_permalink( get_page_by_path('wedding-venues-locations' ) ); ?>">
        <div class="venue-thumb" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['home']['home-img-venues'],'full')[0] ?>;"></div>
      </a> 
      <div class="card-body text-center">
        <div class="card-middle-button">
          <p class="card-title h7">Wedding Venues</p>
          <a href="<?php echo get_permalink( get_page_by_path('wedding-venues-locations' ) ); ?>"><button type="button" class="btn btw-m">Tour the venues</button></a>

        </div>
        <div class="col-md-8 mx-auto text-center">
          <p class="card-text pt-md-4 pb-md-5"><?php echo $args['home']['home-description-venues'] ?></p>
        </div>
      </div>
    </div>
    <div class="card">
      <a class="img mx-md-0 mx-3 hover-effect" href="<?php echo get_permalink( get_page_by_path('wedding-packages' ) ); ?>">
        <div class="venue-thumb" style="background-size: 150%; background-image: url('<?php echo wp_get_attachment_image_src( $args['home']['home-img-packages'],'full')[0] ?>;"></div>
      </a> 
      <div class="card-body text-center">
        <div class="card-middle-button">
          <p class="card-title h7">Wedding Packages</p>
          <a href="<?php echo get_permalink( get_page_by_path('wedding-packages' ) ); ?>"><button type="button" class="btn btw-m">Review our wedding packages</button></a>
        </div>
        <div class="col-md-8 mx-auto text-center">
          <p class="card-text pt-md-4 pb-md-5"><?php echo $args['home']['home-description-packages'] ?></p>
          <div class="container">
          <hr class=" d-sm-none d-block">
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- AWARDA RECOGNITION -->
  <?php get_template_part('partials/awards','recognition'); ?>
  <!-- JUMBOTROM -->
  <div class="jumbotron jb-award jumbotron-cover d-none d-sm-block py-4 px-auto mb-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['home']['home-img-banner-2'],'full')[0] ?>');">
    <div class="col-md-6 text-center ">
      <span class="logo medium-dark my-auto p-5" id="bmw-logo-dark"></span>
      <p class=" col-md-10 my-0 mx-auto px-sm-5 pb-sm-3"><?php echo $args['home']['home-description-banner-2'] ?></p>
      <div class="col-md-12 mt-3">
        <span class="logo small mx-2" id="wedding-wire-point-b"></span>
        <span class="logo small mx-2" id="lwpi-b"></span>
        <span class="logo small mx-2" id="wedding-wire-awards-b"></span>
      </div>
    </div>
  </div>
  <!--  -->
  <div class="row subtitle-bar py-sm-3">
    <div class="col-md-12 text-center padding-all">
      <h2>Client Testimonials</h2>
      <br class="d-sm-none d-block">
    </div>
  </div>
  <!-- CLIENT TESTIMONIALS -->
  <?php get_template_part('partials/client','testimonial'); ?>
<!-- FOOTER FULL -->
  <?php get_footer(); ?>