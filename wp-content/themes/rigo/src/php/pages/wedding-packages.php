<?php get_header(); ?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- JUMBOTROM -->
  <div class="parent p-3 p-sm-0">
      <div class="jumbotron text-center pt-4 pb-3 my-0" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/package-banner-1.jpg');">
          <div class="card logo medium mx-auto d-none d-sm-block">
              <span class="card-img-top mx-auto" id="bmw-logo"></span>
          </div>
          <div class="jb-text d-none d-sm-block">
            <h1 class="my-0">Wedding Miami Packages for Miami</h1>
            <p class="p-2 mb-0">Pick a packages and start customizing your own wedding</p>
            <button class="btn btw-l align-text-bottom" href="./page.html" role="button">Get a fast a quote</button><br>
            <h2 class="p-2" style="color:#993399;">or call now! 305 662 7442</h2>
          </div>
      </div>
  </div>
  <div class="container-fluid d-sm-none d-block">
    <h1 class="my-0">Wedding Miami Packages for Miami</h1>
    <h5>Call now</h5>
    <h4>305 662 7442</h4>
    <hr>
    <ul class="nav nav-tabs  large navbar-nav  ">

      <li class="nav-item p-2 ">
        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/bmw-package-selected.html"><h4 >Merric</h4></a>
        <hr class="m-0">
      </li>
      <li class="nav-item p-2 ">
        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/bmw-package-selected.html"><h4 >Rivera</h4></a>
        <hr class="m-0">
      </li>
      <li class="nav-item p-2 ">
        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/bmw-package-selected.html"><h4 >Gala</h4></a>
        <hr class="m-0">
      </li>

    </ul>

  </div>
  <div class="d-none d-sm-block">
    <!-- END JUMBOTROM -->
    <div class="container-fluid">
      <div class="row text-center px-auto py-5">
        <div class="col-md-12 col-sm-12">
          <p class="h8 my-0">We've put together some popular packages that may help identify<br> you what's possible and what works for you. Take your time to browser.<br>These are only starting points and can be esaly customized to your needs and desires.</p>
        </div>
      </div>
    </div>
    <!-- CARGROUP -->
      <div class="card-group">
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/public/img/package-card-1.jpg" alt="Card image cap">
          <div class="card-body max-h text-center pt-4">
            <p class=" h8 card-title"><b>Merrick</b></p>
            <p class="card-text">Have it all, the perfect place, the perfect flowers, the perfect menu...no detail has been overlooked. The Merrick Package offers just the right ampount of options and just right amount of choicess.</p>
          </div>
            <div class="card-footer text-center pb-3 pt-0">
              <a href="./bmw-package-selected.html"><small class=" click-here">Read more</small></a>
            </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/public/img/package-card-2.jpg" alt="Card image cap">
          <div class="card-body max-h text-center pt-4">
            <p class=" h8 card-title"><b>Riviera</b></p>
            <p class="card-text">When simplicity not enough, and what you seek is an extravagant affair, the name says it all. Look no further, the Riviera Wedding Package will leave you breathless.</p>
          </div>
          <div class="card-footer text-center pb-3 pt-0">
            <a href="./bmw-package-selected.html"><small class=" click-here">Read more</small></a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/public/img/package-card-1.jpg" alt="Card image cap">
          <div class="card-body max-h text-center pt-4">
            <p class=" h8 card-title"><b>Gala</b></p>
            <p class="card-text">Our simplest packages, but still maintianing the great Best Miami Award Winning Quality. Sit back, relax, and enjoy the ride.</p>
          </div>
          <div class="card-footer text-center pb-3 pt-0">
            <a href="./bmw-package-selected.html"><small class=" click-here">Read more</small></a>
          </div>
        </div>
      </div>
<!-- AWARDA RECOGNITION -->
  <?php get_template_part('partials/awards','recognition'); ?>
  <!---->
    <div class="row subtitle-bar py-3">
      <div class="col-md-12 text-center padding-all">
        <h2>Client's Testimonials</h2>
      </div>
    </div>
  </div>
  <!-- CLIENT TESTIMONIALS -->
  <?php get_template_part('partials/client','testimonial'); ?>
    <!-- END CLIENT TESTIMONIALS -->
    <div class="row subtitle-bar py-3">
      <div class="col-md-12 text-center padding-all">
        <h5>Why Best Miami Weddings</h5>
      </div>
    </div>
    <!-- JUMBOTROM -->
      <div class="jumbotron text-dark jb-medium p-3 my-0" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/package-banner-2.jpg');">
        <div class="container text-center px-5 py-0">
          <span class="logo small" id="wedding-wire-black"></span>
          <p class="lead title px-5 mx-5">Its not just our name, we offer the most comprehensive wedding services and specialize in helping you create a uniquely, perfect wedding experience. Some of the many benefist of working with our Miami wedding planners:</p>
          <p class="lead">-Several wedding package available to help as a starting point.</p>
          <p class="lead">-Certified wedding planners with years of experiencie i wedding design.</p>
          <p class="lead">-5-start catering and chef on staff offering a wide variety of delicious manus.</p>
          <p class="lead">-Expert knowledge and partnerships with many of the top beneus in South Florida.</p>
          <p class="lead">-Award winning company an 4.8 rating average through all the reviewing site.</p>
        </div>
      </div>
    <!-- END JUMBOTROM -->
  </div>
<!-- FOOTER FULL -->
  <?php get_template_part('partials/footer','social-media'); ?>
  <?php get_template_part('partials/footer','our-customers'); ?>
  <?php get_template_part('partials/footer','menu'); ?>
<!-- END FOOTER FULL -->
  <?php get_footer(); ?>
