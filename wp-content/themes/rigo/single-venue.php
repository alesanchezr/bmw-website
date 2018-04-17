<?php  
$args = wpas_get_view_data();
debug($args);
?>
<?php get_header(); ?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- MENU VENUE-->
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
  <!-- JUMBOTROM -->
  </div>
  <div class="parent d-none d-sm-block">
    <div class="jumbotron  text-center pt-4 pb-3 my-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['wp_query']['venue-img-banner'])[0] ?>')">
      <div class="card logo medium mx-auto">
        <span class="card-img-top mx-auto" id="bmw-logo"></span>
      </div>
      <div class="jb-text d-block">
        <h1 class="my-0"><?php echo $args["wp_query"]["post_title"]; ?></h1>
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
            <h1 class="d-sm-none d-block pb-4"><?php echo $args["wp_query"]["post_title"]; ?></h1>
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
            <p class="card-text "><?php echo $args["wp_query"]["venue-capacity"]; ?></p>
            <p class="card-text"><?php echo $args["wp_query"]["venue-time"]; ?></p>
          </div>
          <div class="px-2 text-left d-sm-none d-block ">
            <hr>
            <div class="row text-left">
              <div class="col-2">
                <i class="fas fa-users text-purple fa-2x"></i>
              </div>
              <div class="col-10">
                <p><?php echo $args["wp_query"]["venue-capacity"]; ?></p>
              </div>
            </div>
            <hr>
            <div class="row text-left">
              <div class="col-2">
                <i class="fas fa-clock text-purple fa-2x"></i>
              </div>
              <div class="col-10">
                <p><?php echo $args["wp_query"]["venue-time"]; ?></p>
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
                  <img class="d-block w-100 px-0" src="<?php echo wp_get_attachment_image_src( $args['wp_query']['venue-img-carousel-1'])[0] ?>" alt="First slide">
                </div>
                <div class= "col-4 px-0">
                  <img class="d-block w-100 px-0" src="<?php echo wp_get_attachment_image_src( $args['wp_query']['venue-img-carousel-2'])[0] ?>" alt="First slide">
                </div>
                <div class= "col-4 px-0">
                  <img class="d-block w-100 px-0" src="<?php echo wp_get_attachment_image_src( $args['wp_query']['venue-img-carousel-3'])[0] ?>" alt="First slide">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class= "col-4 px-0">
                  <img class="d-block w-100 px-0" src="<?php echo wp_get_attachment_image_src( $args['wp_query']['venue-img-carousel-2'])[0] ?>" alt="First slide">
                </div>
                <div class= "col-4 px-0">
                  <img class="d-block w-100 px-0" src="<?php echo wp_get_attachment_image_src( $args['wp_query']['venue-img-carousel-3'])[0] ?>" alt="First slide">
                </div>
                <div class= "col-4 px-0">
                  <img class="d-block w-100 px-0" src="<?php echo wp_get_attachment_image_src( $args['wp_query']['venue-img-carousel-1'])[0] ?>" alt="First slide">
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
              <p class="h8 card-title">Address and location for <?php echo $args["wp_query"]["post_title"]; ?></p>
              <h5> <strong></strong> </h5>
              <p><?php echo $args["wp_query"]["venue-address"]; ?></p>
            </div>
          </div>
          <div class="col-md-6 col-12 image-div p-0"  style="min-height:200px;">
            <div id="map" style=""><?php echo $args["wp_query"]["venue-google-maps"]; ?></div>
          </div>
        </div>
      </div>
      <div class="card bg-1">
        <div class="row tab-content d-none d-sm-flex ">
          <div class="col-md-4 p-5  text-center tab-content">
            <h5> <strong>Acommodations</strong> </h5>
            <br>
            <ul>
              <?php echo $args["wp_query"]["venue-acommodations"]; ?>
            </ul>
          </div>
          <div class="col-md-4 p-5 l text-center tab-content">
            <h5> <strong>Parking</strong> </h5>
            <br>
            <p><?php echo $args["wp_query"]["venue-parking"]; ?></p>
          </div>
          <div class="col-md-4 p-5 l text-center">
            <h5> <strong>Transportation</strong> </h5>
            <br>
            <p><?php echo $args["wp_query"]["venue-transportation"]; ?></p>
          </div>
        </div>
        <div class="px-4 text-left d-sm-none d-block">
          <hr>
          <div class="row text-left">
            <div class="col-2">
              <i class="fas fa-map-marker-alt text-purple fa-2x"></i>
            </div>
            <div class="col-10">
              <p><?php echo $args["wp_query"]["venue-parking"]; ?></p>
            </div>
          </div>
          <hr>
          <div class="row text-left">
            <div class="col-2">
              <i class="fas fa-bell text-purple fa-2x"></i>
            </div>
            <div class="col-10">
              <ul>
                <?php echo $args["wp_query"]["venue-acommodations"]; ?>
              </ul>
            </div>
          </div>
          <hr>
          <div class="row text-left">
            <div class="col-2">
              <i class="fas fa-bus text-purple fa-2x"></i>
            </div>
            <div class="col-10">
              <p><?php echo $args["wp_query"]["venue-transportation"]; ?></p>
            </div>
          </div>
          <hr>
          <div class="row text-left">
            <div class="col-2">
              <i class="fas fa-comments text-purple fa-2x"></i>
            </div>
            <div class="col-10">
              <p>   Aggregated score <?php echo $args["wp_query"]["venue-score-point"]; ?></p>
            </div>
          </div>
          <hr>
          <div class="text-center">
            <h2><?php echo $args["wp_query"]["post_title"]; ?></h2>
            <p><?php echo $args["wp_query"]["venue-score-description"]; ?></p>
          </div>
        </div>
      </div>
      <div class="card separators awards-recognition d-none d-sm-block" >
        <div class="row ">
          <div class="col-md-6 p-5 l mb-md-auto mt-md-5 pt-md-5 text-center">
            <span class="logo small px-1 pb-1 pb-md-4" id="bmw-logo-white-alone"></span>
            <p class="h8 card-title pb-md-5">Layout for <?php echo $args["wp_query"]["post_title"]; ?></p>
            <img class="mx-auto" src="<?php echo wp_get_attachment_image_src( $args['wp_query']['venue-img-layout'])[0] ?>" alt="Generic placeholder image">
          </div>
          <div class="col-md-6  p-sm-5 l">
            <div class="p-5 text-center">
            <?php echo $args["wp_query"]["venue-layout-description"]; ?>
            </div>
          </div>
        </div>
      </div>
      <!-- CLIENT SCORE -->
        <div class="card bg-1 d-none d-sm-block">
          <div class="row ">
            <div class="col-md-12 px-4 p-sm-5 l p-0 p-sm-3">
              <div class="p-0 p-sm-3 max-h text-center">
                <p class="h8 card-title"><?php echo $args["wp_query"]["post_title"]; ?>'s Reviews</p>
                <h5> <strong></strong> </h5>
                <p class="mb-0">Agregated Score</p>
                <p class="mb-0"><?php echo $args["wp_query"]["venue-score-point"]; ?></p>
                <!--imprimir estrellas -->
                <?php  echo $args['wp_query']['printStars'](); ?>
                <!--<span class="fa fa-star checked"></span>-->
                <!--<span class="fa fa-star checked"></span>-->
                <!--<span class="fa fa-star checked"></span>-->
                <!--<span class="fa fa-star"></span>-->
                <!--<span class="fa fa-star-half"></span>-->
                <p><?php echo $args["wp_query"]["venue-score-description"]; ?>, <a  href="" class="click-here color-dark">contact us</a>!</p>
              </div>
            </div>
            <div class="col-md-6 image-div p-0" >
              <div id="map" style="width:100%;height:100%;"></div>
            </div>
          </div>
        </div>

        <div class="card bg-2 d-none d-sm-block">
          <div class="row">
            <div class="col-md-4 p-5 text-center tab-content">
              <h5> <strong>The Pro's</strong> </h5>
              <br>
              <p></p><?php echo $args["wp_query"]["venue-pros"]; ?></p>
            </div>
            <div class="col-md-4 p-5 text-center tab-content">
              <h5> <strong>The Con's</strong> </h5>
              <br>
              <p></p><?php echo $args["wp_query"]["venue-cons"]; ?></p>
            </div>
            <div class="col-md-4 p-5 text-center tab-content">
              <h5> <strong>The Bottom Half</strong> </h5>
              <br>
              <p></p><?php echo $args["wp_query"]["venue-bottom-half"]; ?></p>
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