<?php  
$args = wpas_get_view_data();
//debug($args);
?>
<?php get_header(); ?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
  <!-- JUMBOTROM -->
  <div class="row sub-menu d-none d-sm-block" >
    <div class="container">
      <ul class="p-2 container text-uppercase large text-center m-auto"  role="tablist">


        <a class=" p-2" href="" >General Info</a>


        <a class=" p-2" href="">Venues areas</a>


        <a class=" p-2" href="">360 tour</a>


        <a class=" p-2" href="">Gallery</a>


        <a class=" p-2" href="">Location</a>


        <a class=" p-2" href="">weddings</a>

      </ul>
    </div>


  </div>
  <div class="parent d-none d-sm-block">
    <div class="jumbotron  text-center pt-4 pb-3 my-0" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/pexels-photo-265871.jpeg')">
      <div class="card logo medium mx-auto">
        <span class="card-img-top mx-auto" id="bmw-logo"></span>
      </div>
      <div class="jb-text d-block">
        <h1 class="my-0"><?php echo $args["wp_query"]["post_title"]; ?></h1>
        <p class="p-2 mb-0">Start customizing your wedding by choosing one of our wedding packages</p>
        <button class="btn btw-l align-text-bottom" href="./page.html" role="button">Get a fast a quote</button><br>
        <h2 class="p-2" style="color:#993399;">or call now! 305 662 7442</h2>
      </div>

    </div>
  </div>
  <!-- HORIZONTAL CARD -->
  <section>
    <div class="card bg-1">
      <div class="row ">
        <div class="col-md-7 px-4 p-sm-5 l">
          <div class="p-0 p-sm-3 max-h text-sm-right text-center pt-4">
            <h1 class="d-sm-none d-block pb-4">The Bath Club</h1>
            <div class="d-sm-none d-block text-left">
              <p class="px-3">Call now</p>
              <h2 class="d-sm-none d-block px-3">305 662 7442</h2>
              <hr>
            </div>

            <p class="card-text"><?php echo $args["wp_query"]["venue-description"]; ?></p>
          </div>

        </div>
        <div class="col-md-5 px-4 p-sm-5 l">
          <div class="p-0 p-sm-3 max-h text-left text-sm-center p-0 p-sm-3 d-none d-sm-block">
            <p></p>

            <p class="card-text ">   400 people capacity</p>

            <p class="card-text">The event must end by 01:00 am</p>
          </div>

          <div class="px-2 text-left d-sm-none d-block ">
            <hr>
            <div class="row text-left">
              <div class="col-2">
                <i class="fas fa-users text-purple fa-2x"></i>
              </div>
              <div class="col-10">
                <p> 400 people capacity</p>
              </div>

            </div>
            <hr>
            <div class="row text-left">
              <div class="col-2">
                <i class="fas fa-clock text-purple fa-2x"></i>
              </div>
              <div class="col-10">
                <p> The event must end by 01:00 am</p>
              </div>

            </div>

            <hr>

          </div>
          <div class="d-sm-none d-block">

          </div>
        </div>
      </div>

      <!--  -->
      <div class="card bg-1 d-none d-sm-block">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="0">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class= "col-4 px-0">
                  <img class="d-block w-100 px-0" src="<?php echo get_template_directory_uri(); ?>/public/img/card1.jpg" alt="First slide">
                </div>
                <div class= "col-4 px-0">
                  <img class="d-block w-100 px-0" src="<?php echo get_template_directory_uri(); ?>/public/img/card2.jpg" alt="First slide">
                </div>
                <div class= "col-4 px-0">
                  <img class="d-block w-100 px-0" src="<?php echo get_template_directory_uri(); ?>/public/img/card6.jpg" alt="First slide">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class= "col-4 px-0">
                  <img class="d-block w-100 px-0" src="<?php echo get_template_directory_uri(); ?>/public/img/card7.jpg" alt="First slide">
                </div>
                <div class= "col-4 px-0">
                  <img class="d-block w-100 px-0" src="<?php echo get_template_directory_uri(); ?>/public/img/card4.jpg" alt="First slide">
                </div>
                <div class= "col-4 px-0">
                  <img class="d-block w-100 px-0" src="<?php echo get_template_directory_uri(); ?>/public/img/card2.jpg" alt="First slide">
                </div>
              </div>
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!--  -->
      <div class="card bg-2">
        <div class="row ">
          <div class="col-md-6 px-4 p-sm-5 l p-0 p-sm-3 d-none d-sm-block">
            <div class="p-0 p-sm-3 max-h text-center">
              <p class="h8 card-title">Address and location for The Bath Club</p>
              <h5> <strong></strong> </h5>
              <p>5937 Collins Avenue, Miami Beach, FL 33140</p>
            </div>
          </div>
          <div class="col-md-6 col-12 image-div p-0"  style="min-height:200px;">
            <div id="map" style="width:100%;height:100%;"></div>
          </div>
        </div>
      </div>
      <div class="card bg-1">
        <div class="row tab-content d-none d-sm-flex ">
          <div class="col-md-4 p-5  text-center tab-content">
            <h5> <strong>Acommodations</strong> </h5>
            <br>
            <p>Mare Azur Luxury Suites</p>
            <p>Hilton Cabana Miami Beach</p>
          </div>
          <div class="col-md-4 p-5 l text-center tab-content">
            <h5> <strong>Parking</strong> </h5>
            <br>
            <p> Valet parking mandatory</p>
          </div>
          <div class="col-md-4 p-5 l text-center">
            <h5> <strong>Transportation</strong> </h5>
            <br>
            <p>Public transportation less than one block away from the venue. And easy access to all the principal traffic arteries of the city.</p>
          </div>
        </div>
        <div class="px-4 text-left d-sm-none d-block">
          <hr>
          <div class="row text-left">
            <div class="col-2">
              <i class="fas fa-map-marker-alt text-purple fa-2x"></i>
            </div>
            <div class="col-10">
              <p>Valet parking mandatory</p>
            </div>
          </div>
          <hr>
          <div class="row text-left">
            <div class="col-2">
              <i class="fas fa-bell text-purple fa-2x"></i>
            </div>
            <div class="col-10">
              <p> Mare Azur Luxury Suites</p>
              <p>Hilton Cabana Miami Beach</p>
            </div>
          </div>
          <hr>
          <div class="row text-left">
            <div class="col-2">
              <i class="fas fa-bus text-purple fa-2x"></i>
            </div>
            <div class="col-10">
              <p> Public transportation less than one block away from the venue</p>
            </div>
          </div>
          <hr>
          <div class="row text-left">
            <div class="col-2">
              <i class="fas fa-comments text-purple fa-2x"></i>
            </div>
            <div class="col-10">
              <p>   Aggregated score 4.4</p>
            </div>
          </div>
          <hr>
          <div class="text-center">
            <h2>The Bottom Half</h2>
            <p>The Bath Club is a hidden gem located on the beach in the beautful City of Miami Beach and is the ideal setting for a romantic and memorable wedding. With over 26.000 square of feet of event space, your guests will experience a different era as they enter our unique and charismatic rooms. <br> From a simple yet distinctive cocktail to an 8-course sit-down meal, The Bath Club Offers the ideal rental venue for an unforgettable event.</p>
          </div>
        </div>
      </div>
      <div class="card separators awards-recognition d-none d-sm-block" >
        <div class="row ">
          <div class="col-md-6 p-5 l mb-md-auto mt-md-5 pt-md-5 text-center">
            <span class="logo small px-1 pb-1 pb-md-4" id="bmw-logo-white-alone"></span>
            <p class="h8 card-title pb-md-5">Layout for The Bath Club</p>
            <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/public/img/tcok.png" alt="Generic placeholder image">
          </div>
          <div class="col-md-6  p-sm-5 l">
            <div class="p-5 text-center">
              <b>BALLROOM</b>
              <p>
                The elegant ballroom is a perfect canvas for all types of events. The unique ballroom features high ceilings, dramatic chandeliers, and floor to ceiling windows</p>
                <!--         <br> -->
                <b>  GOVERNOR'S LOGGIA:</b>
                <p>
                  The Governor's Loggia features cathedral ceilings and modern furnishings. This space is ideal for cocktail functions, wedding ceremonies and an alternate to outdoor spaces in case of inclimate weather.</p>

                  <b>COURTYARD:</b>
                  <p>Our tree lined courtyard offers an outdoor oasis perfect for dining or cocktail parties. The modern patio furniture creates intimate spaces for your guests to enjoy the beautiful Miami weather.</p>
                  <b>DRIFTWOOD:</b>
                  <p>Overlooking our pool deck, the Driftwood Dining Room combines contemporary décor with a functional gathering space. The floor to ceiling windows fill the space with natural light, making it the perfect space for luncheons, showers and parties.</p>
                  <b>LOUNGE:</b>
                  <p>The lounge is where classic meets cutting edge. The original inlaid wood dance floor is balanced by the modern décor and furnishings.</p>
                  <b>PRIVATE BEACH EVENT:</b>
                  <p>Whether you are looking to host a beachfront meeting or a sunset wedding ceremony, let the pristine private beaches of the Bath Club serve as your backdrop. The Bath Club features South Florida’s only private beach where event hosting possibilities are endless. Enjoy dinner directly on the sand or host a photo shoot.</p>
                </div>


              </div>

            </div>
          </div>

        </section>
        <!-- CLIENT REVIEW -->
        <div class="card bg-1 d-none d-sm-block">
          <div class="row ">
            <div class="col-md-12 px-4 p-sm-5 l p-0 p-sm-3">
              <div class="p-0 p-sm-3 max-h text-center">
                <p class="h8 card-title">The Bath Club's Reviews</p>
                <h5> <strong></strong> </h5>
                <p class="mb-0">Agregated Score</p>
                <p class="mb-0">4.4</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star-half"></span>
                <p>The aggregated rating was compiled from multiple sources (WeddingWire, Facebook, Yelp, Google, etc.), including merchants, third party aggregators, editorial sites and users. Collected from all reviews total across all sources. We strive for accuracy and fairness. If you see something that doesn't look right, Contact us.</p>
              </div>
            </div>
            <div class="col-md-6 image-div p-0" >
              <div id="map" style="width:100%;height:100%;"></div>

            </div>
          </div>
        </div>

        <div class="card bg-2 d-none d-sm-block">
          <div class="row  ">
            <div class="col-md-4 py-5  text-center tab-content">
              <h5> <strong>The Pro's</strong> </h5>
              <br>
              <p>Built in 1926, old stunning architecture that is different with exposed wooden beams vs. the modern look of most spaces on the beach. Several ballrooms, lounges and a pool area: each with their own decor where you can have your wedding ceremony, cocktail hour and wedding reception without any restriction for the curfew.</p>

            </div>
            <div class="col-md-4 py-5 l text-center tab-content">
              <h5> <strong>The Con's</strong> </h5>
              <br>
              <p>The venue is expensive. Parking can be a problem in Miami Beach, valet service only. You should not consider The Bath Club if you like modern venues.</p>
            </div>
            <div class="col-md-4 py-5 l text-center tab-content">
              <h5> <strong>The Bottom Half</strong> </h5>
              <br>
              <p>The venue is expensive. Parking can be a problem in Miami Beach, valet service only. You should not consider The Bath Club if you like modern venues.</p>
            </div>
          </div>
        </div>
        <!-- END CLIENT REVIEW -->
        <?php get_template_part('partials/rating'); ?>
      <!-- FOOTER FULL -->
      <!-- SCRIPT -->
      <script>
      function myMap() {
        var mapOptions = {
          center: new google.maps.LatLng(51.5, -0.12),
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.HYBRID
        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAt-lB10hTDXd46U-sD1h7noxltIVauxfc
    &callback=myMap"></script>
    <!-- END FOOTER FULL -->
  <?php get_footer(); ?>