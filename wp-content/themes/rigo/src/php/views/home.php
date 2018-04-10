<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body log-template-requests="true" class="home">
    <!-- JUMBOTROM -->
    <?php get_template_part('partials/menu','home'); ?>
    <div class="parent">
      <div class="jumbotron jb-large text-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/img/home-banner-1.jpg');">
        <div class="card logo medium mx-auto">
          <span class="card-img-top mx-auto" id="bmw-logo"></span>
        </div>
        <div class="jb-button py-5">
          <a href="#openModal"><button class="btn btw-l align-text-bottom d-block mx-auto mb-4" role="button">Request a quote</button></a>
          <!-- <button class="btn btw-l align-text-bottom d-block mx-auto mb-4" href="./request-quote.html" role="button">Request a quote</button> -->
          <a class="d-none d-sm-block" href="#services"><span class="logo xsmall" id="arrow-down"></span></a>
        </div>
      </div>
    </div>
    <!-- END -->
    <div class="row subtitle-bar py-3">
      <div id="services" class="col-md-12 text-center padding-all">
        <h2>Our services</h2>
      </div>
    </div>
    <!-- CARD GROUP -->
    <div class="card-group">
      <div class="card">
        <div class="img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/img/home-card-1.jpg');"></div>
        <div class="card-body text-center">
          <div class="card-middle-button">
            <p class="card-title h7">Wedding Venues</p>
            <a href="./bmw-wedding-veneus.html"><button src="./bmw-wedding-veneus.html" type="button" class="btn btw-m">Tour the venues</button></a>
          </div>
          <div class="col-md-8 mx-auto text-center">
            <p class="card-text pt-md-4 pb-md-5">Picking date should be the first step of every wedding, that's why the first things you should do is booking your venue on a specific date. We have a selection of more then 25 spectacular locations.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/img/home-card-2.jpg');"></div>
        <div class="card-body text-center">
          <div class="card-middle-button">
            <p class="card-title h7">Wedding Packages</p>
            <a href="./bmw-wedding-packages.html"><button type="button" class="btn btw-m">Review our wedding packages</button></a>
          </div>
          <div class="col-md-8 mx-auto text-center">
            <p class="card-text pt-md-4 pb-md-5">Choosing a wedding packages is the best way to get an aproximate budget, once you have a budget you can start customizing everythings to make it your way.</p>
            <div class="container">
            <hr class=" d-sm-none d-block">
          </div>
          </div>
        </div>
      </div>
    </div>
    <!--  -->
    <!-- AWARDA RECOGNITION -->
    <?php get_template_part('partials/awards','recognition'); ?>
    <!-- END AWARDA RECOGNITION -->
    <!-- JUMBOTROM -->
    <div class="jumbotron jb-award jumbotron-cover d-none d-sm-block py-4 px-auto mb-0" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/img/home-banner-2.jpg');">
      <div class="col-md-6 text-center ">
        <span class="logo medium-dark my-auto" id="bmw-logo-dark"></span>
        <p class=" col-md-10 my-0 mx-auto px-sm-5 pb-sm-3">This is your opportunity to trusly share and celebrate the beginningfo your journey. Let us take the work out of wedding planning and put the fun into your life...for a lifetime of memories.</p>

        <div class="col-md-12 mt-3">
          <span class="logo small" id="wedding-wire-point-b"></span>
          <span class="logo small" id="lwpi-b"></span>
          <span class="logo small" id="wedding-wire-awards-b"></span>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="row subtitle-bar py-sm-3">
      <div class="col-md-12 text-center py-md-5">


        <h2>Client's Testimonials</h2>
      </div>
    </div>
    <!-- CLIENT TESTIMONIALS -->
    <?php get_template_part('partials/client','testimonial'); ?>
    <!-- FOOTER FULL -->
    <?php get_template_part('partials/footer','our-social-media'); ?>
    <?php get_template_part('partials/footer','our-customers'); ?>
    <?php get_template_part('partials/footer','our-menu'); ?>
    <!-- END FOOTER FULL -->

    <!-- MODAL -->
    <div id="openModal" class="modalDialog d-none">
      <div class="body-request p-5" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/img/request-2.jpg')">
        <a href="#close" title="Close" class="close"><i class="fas fa-times " style="color:#ffffff;"></i></a>
        <div class="container">
          <div class="row">
            <div class="col-md-6 ">
              <div class="card logo large mx-auto pb-5">
                  <span class="card-img-top mx-auto" id="bmw-logo"></span>
              </div>
              <div class="text-center info">
                <h5>Call now! </h5>
                <h5>305-662-4742</h5>
                <h5> to request more information and pricing</h5>
                <h5>or fill the following form: </h5>
              </div>
            </div>
            <!-- FORM -->
            <div class="col-md-6">
              <form>
                <div class="form-inline-block">
                  <label class="mb-0" for="fullName">Full Name</label>
                  <input type="fullName" class="form-control mt-0 mb-2" id="" placeholder="Full Name">
                </div>
                <div class="form-inline-block">
                  <label class=" mb-0" for="phoneNumber">Phone Number</label>
                  <input type="phoneNumber" class="form-control mt-0 mb-2" id="" placeholder="Phone number">
                </div>
                <div class="form-inline-block">
                  <label class=" mb-0" for="email">Email</label>
                  <input type="email" class="form-control mt-0 mb-2" id="" placeholder="Email">
                </div>
                <div class="form-inline-block">
                  <label class=" mb-0" for="dayEven">Day of event</label>
                  <input type="dayEven" class="form-control mt-0 mb-2" id="" placeholder="Day of event">
                </div>
                <div class="form-inline-block mb-4">
                  <label  class=" mb-0" for="observation">Observation</label>
                  <textarea class="form-control mt-0 mb-0" id="observation" placeholder="Observation" rows="6"></textarea>
                  <a>0 de 60 max character.</a>
                </div>
                <button  class="btn form-control" type="button" name="button">Send</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>


  <!-- SCRIPT -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/bundle.js?v2"></script>
  <!--  -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
  <!-- BOOTSTRAP -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
