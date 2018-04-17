<?php  
$args = wpas_get_view_data();
//debug($args);
?>
<?php get_header(); ?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- JUMBOTROM -->
  <div class="parent p-3 p-sm-0">
      <div class="jumbotron text-sm-center pt-4 pb-3 my-0" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/package-banner-1.jpg');">
          <div class="card logo medium mx-auto d-none d-sm-block">
              <span class="card-img-top mx-auto" id="bmw-logo"></span>
          </div>
          <div class="jb-text d-none d-sm-block">
            <h1>Gala Wedding Package</h1>
            <p>Start customizing your wedding by choosing one of our wedding packages</p>
          </div>
      </div>
  </div>
<!-- CONTACT -->
<span class="d-none d-sm-block" require-file="./components/contact.html"></span>
<!-- END CONTACT -->
<div class="d-sm-none d-block px-3">
  <h1>Gala</h1>
      <p>maintaining the great Best Miami Award Winning Quiality. Sit back, relax, and enjoy the ride</p>
  <hr>
  <h1>Catering Experience</h1>
</div>
<div class="row subtitle-bar d-none d-sm-block">
  <div class="col-md-12 text-sm-center p-sm-5">
    <h2>Catering Experience</h2>
  </div>
</div>
<!-- HORIZONTAL CARD -->
<section>
    <div class="card bg-1">
      <div class="row ">
        <div class="col-md-6 px-3 py-sm-5 l">
          <div class="card-block px-3 pb-4 text-sm-center">
            <h2 class="card-title">Cocktail Reception</h2>
            <p class="card-text">Hot Hors'deurves <br> Cold Canapes</p>
          </div>
          <div class="card-block px-3 pb-4 text-sm-center">
            <h2 class="card-title">Dinner</h2>
            <p class="card-text">
              <b>serverd buffet style</b><br>
              Fresh baked bred with Original and Honey whipped butter<br>
              Organic mixed green salad with your choice of five toppins OR<br>
              Cesar Salad OR house salad<br>
              Choice of two accompaniments<br>
            </p>
          </div>
          <div class="card-block px-3 text-sm-center">
            <h2 class="card-title">Toast</h2>
            <p class="card-text">Fracois Montad Rose will served to all guest</p>
            <hr class="d-sm-none d-block px-3">
          </div>
        </div>
        <div class="col-md-6 image-div d-none d-sm-block" style="background-image:url('<?php echo get_template_directory_uri(); ?>/public/img/card1.jpg')">
        </div>
      </div>
    </div>
  <!--  -->
  <div class="card bg-2">
    <div class="row ">
      <div class="col-md-6 px-3 p-sm-5 l">
        <div class="card-block px-3 pb-4 text-sm-center">
          <h2 class="card-title">Basic Bar</h2>
          <p class="card-text">4 hours duration</p>
        </div>
        <div class="card-block px-3 text-sm-center">
          <h2 class="card-title">Selection of Cocktails</h2>
          <p class="card-text">
            <b>serverd in arcylic barware</b><br>
            Vodka<br>
            Scotch<br>
            Whiskey<br>
            White and dark Rum<br>
            Gin<br>
            Tequila<br>
            Amaretto & Anisette<br>
            Sour mix, Triple Sec & Grenadine<br>
            <hr class="d-sm-none d-block ">
          </p>
        </div>
      </div>
      <div class="col-md-6 image-div d-none d-sm-block px-3" style="background-image:url('<?php echo get_template_directory_uri(); ?>/public/img/card2.jpg')">
      </div>
    </div>
  </div>
  <!--  -->
  <div class="card bg-1">
    <div class="row ">
      <div class="col-md-6 px-3 p-sm-5 l">
        <div class="card-block px-3 text-sm-center d-none d-sm-block ">
          <h2 class="card-title">After Dinner</h2>
        </div>
        <div class="card-block px-3 pb-4 text-sm-center">
          <h2 class="card-title">Cake</h2>
          <p class="card-text">
            Couture Buttercream Wedding Cake designed by renown<br>
            Edda's Cake Designs<br>
            Tasting to take place based on availability at Edda's Cake<br>
            Designs in South Miami<br>
          </p>
        </div>
        <div class="card-block px-3 pb-4 text-sm-center">
          <h2 class="card-title">Tasting</h2>
          <p class="card-text">
            Eleven-course prix-fixe menu<br>
            Tablescape design based on selection<br>
            Uniformed butler<br>
            Take Place on Thursday at The Boardroom in Coral Gables<br>
          </p>
        </div>
        <div class="card-block px-3 text-sm-center">
          <h2 class="card-title">Service</h2>
          <p class="card-text">
            Floor Manager to oversee team<br>
            Head Waiter to oversee waiters<br>
            Uniformed waiters<br>
            Executive Chef<br>
            Professional mixologist<br>
            <hr class="d-sm-none d-block ">
          </p>
        </div>
      </div>
      <div class="col-md-6 image-div d-none d-sm-block " style="background-image:url('<?php echo get_template_directory_uri(); ?>/public/img/card4.jpg')">
      </div>
    </div>
  </div>
  <!--  -->
  <div class="card bg-2">
    <div class="row ">
      <div class="col-md-6 px-3 p-sm-5 l">
        <div class="card-block px-3 pb-4 text-sm-center">
          <h2 class="card-title">Tables Design</h2>
          <p class="card-text">
            Round tables for every ten guests Bride and Groom Table<br>
            Seating Arrangement Table<br>
            Cake Table<br>
          </p>
        </div>
        <div class="card-block px-3 pb-4 text-sm-center">
          <h2 class="card-title">Chairs</h2>
          <p class="card-text">
            Mahogany chivari chair<br>
          </p>
        </div>
        <div class="card-block px-3 pb-4 text-sm-center">
          <h2 class="card-title">Linen Selection</h2>
          <p class="card-text">
            Selection of poly cotton floor length linens<br>
            Napkin selection based upon linen choice<br>
          </p>
        </div>
        <div class="card-block px-3 text-sm-center">
          <h2 class="card-title">Dinnerware</h2>
          <p class="card-text">
            Arcrylic Chargers upon selection<br>
            Fine white rimless bread, salad, dinner and dessert china<br>
            Fine water goblets and champagne flutes<br>
            Fine dining silverware<br>
          </p>
        </div>
      </div>
      <div class="col-md-6 image-div" style="background-image:url('<?php echo get_template_directory_uri(); ?>/public/img/card3.jpg')">
      </div>
    </div>
  </div>
</section>
<!-- END HORIZONTAL CARD -->
<div class="d-none d-sm-block">
  <div class="row subtitle-bar dark py-3">
    <div class="col-md-12 text-sm-center p-sm-5">
      <h2>Entertainment Services available upon request</h2>
    </div>
  </div>
  <div class="row subtitle-bar py-3 ">
    <div class="col-md-12 text-sm-center p-sm-5">
      <h2>Client's Testimonials</h2>
    </div>
  </div>
  <!-- CLIENT TESTIMONIALS -->
  <?php get_template_part('partials/client','testimonial'); ?>
</div>
<!-- FOOTER FULL -->
  <?php get_template_part('partials/footer','social-media'); ?>
  <?php get_template_part('partials/footer','our-customers'); ?>
  <?php get_template_part('partials/footer','menu'); ?>
<!-- END FOOTER FULL -->
  <?php get_footer(); ?>