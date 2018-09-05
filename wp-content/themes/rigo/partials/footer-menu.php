<!-- MENU FOOTER -->
<div class="card separators footer-black footer-list d-none d-sm-block">
  <div class="container p-5">
    <div class="row">
      <div class="col-md-9 col-sm-12  px-0">
        <div class="row p-5">
          <div class="col-md-4 col-sm-4 p-2">
            <h2 class="pb-3">The Company</h2>
              <?php wp_nav_menu( array('theme_location' => 'footer_company')); ?>
          </div>
          <div class="col-md-4 col-sm-4 p-2 footer-list">
            <h2 class="pb-3">Wedding Gallery</h2>
              <?php wp_nav_menu( array('theme_location' => 'footer_gallery') ); ?>
          </div>
          <div class="col-md-4 col-sm-4 p-2">
            <h2 class="pb-3">Our services</h2>
            <?php wp_nav_menu( array('theme_location' => 'footer_services') ); ?>
          </div>

        </div>
      </div>
      <div class="col-md-3 p-0 text-center">
        <span class="card-img-top mx-auto d-none d-md-block" id="bmw-logo"></span>
        <p class="my-2 py-0">Work with the best,<br /> our reputation precedes us</p>
          <span class="svg-inline--fa fa-star" id="star"></span>
          <span class="svg-inline--fa fa-star" id="star"></span>
          <span class="svg-inline--fa fa-star" id="star"></span>
          <span class="svg-inline--fa fa-star" id="star"></span>
          <span class="svg-inline--fa fa-star" id="star-half"></span>
        <p class="my-2 py-0 mini-text">Average 4.8 rating within all avaiavle review systems, <a class="click-here color-light mini-text" href="<?php echo get_permalink( get_page_by_path('testimonials' ) ); ?>">Learn more</a> </p>
      </div>
    </div>
  </div>
</div>

<div class="sticky sticky-bar text-center d-sm-none">
  <div class="row">
    <div class="col-6 phone">
      <p class="m-0">
        <a class='click-here color-dark' style="text-decoration: none !important;"href="tel:+<?php echo get_option('phone_number'); ?>">
          Call Now
        </a>
      </p>
      <span class="phone-number text-dark"><?php echo get_option('phone_number'); ?></span>
    </div>
    <div class="col-6">
      <a id="#quote-modal" class="btn btn-primary request-quote">Request a Quote</a>
    </div>
  </div>
</div>