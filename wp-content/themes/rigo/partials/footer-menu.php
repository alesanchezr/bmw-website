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
        <p class="my-2 py-0">Work with the best,<br /> our reputation precede us</p>
          <span class="svg-inline--fa fa-star" id="star"></span>
          <span class="svg-inline--fa fa-star" id="star"></span>
          <span class="svg-inline--fa fa-star" id="star"></span>
          <span class="svg-inline--fa fa-star" id="star"></span>
          <span class="svg-inline--fa fa-star" id="star-half"></span>
        <p class="my-2 py-0 mini-text">Average 4.8 rating within all avaiavle review systems, <a class="click-here color-light mini-text"href="">Learn more</a> </p>
      </div>
    </div>
  </div>
</div>
