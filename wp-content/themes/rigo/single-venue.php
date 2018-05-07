<?php  
$args = wpas_get_view_data();
// debug($args);
?>
<?php get_header(); ?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- MENU VENUE-->
  <div class="row sub-menu d-none d-sm-block venue-menu" >
    <div class="container">
      <ul class="container text-uppercase large text-center mx-auto"  role="tablist">
        <a href="" >General Info</a>
        <a href="">Venues areas</a>
        <a href="">360 tour</a>
        <a href="https://bmw-website-caenavgu.c9users.io/gallery/?postId=<?php $args['venue']['ID']?> ">Gallery</a>
        <a href="">Location</a>
        <a href="">Weddings</a>
      </ul>
    </div>
  </div>
  <!-- JUMBOTROM -->
  <div class="parent d-none d-sm-block">
    <div class="jumbotron  text-center pt-4 pb-3 my-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['venue']['venue-img-banner'],'full')[0] ?>')">
      <div class="card logo medium mx-auto">
        <span class="card-img-top mx-auto" id="bmw-logo"></span>
      </div>
      <div class="jb-text d-block">
        <h1 class="mt-0 mb-4"><?php echo $args["venue"]["post_title"]; ?></h1>
        <a href="<?php echo get_permalink( get_page_by_path('request-quote' ) ); ?>"><button class="btn btw-l align-text-bottom" role="button">Get a fast a quote</button></a><br>
        <p class="py-3 h2 call-now" >or call now! <a class="phone-number" href="tel:+1305 662 7442">305 662 7442</a></p>
      </div>
    </div>
  </div>
  <!-- HORIZONTAL CARD -->
  <section>
    <div class="card bg-1">
      <div class="row ">
        <div class="col-md-7 px-4 p-sm-5 l">
          <div class="p-0 p-sm-3 max-h text-sm-right text-center pt-4">
            <h1 class="d-sm-none d-block pb-4"><?php echo $args["venue"]["post_title"]; ?></h1>
            <div class="d-sm-none d-block text-left">
              <a  class='click-here color-dark' style="text-decoration: none !important;"href="tel:+3056624742">
                <p class="px-3">Call now</p>
                <h2 class="d-sm-none d-block px-3">305 662 7442</h2>
              </a>
              <hr>
            </div>

            <p class="card-text"><?php echo $args["venue"]["venue-description"]; ?></p>
          </div>

        </div>
        <div class="col-md-5 px-4 p-sm-5 l">
          <div class="p-0 p-sm-3 max-h text-left text-sm-center p-0 p-sm-3 d-none d-sm-block">
            <p></p>
            <p class="card-text "><?php echo $args["venue"]["venue-capacity"]; ?></p>
            <p class="card-text"><?php echo $args["venue"]["venue-time"]; ?></p>
          </div>
          <div class="px-2 text-left d-sm-none d-block ">
            <hr>
            <div class="row text-left">
              <div class="col-2">
                <i class="fas fa-users text-purple fa-2x"></i>
              </div>
              <div class="col-10">
                <p><?php echo $args["venue"]["venue-capacity"]; ?></p>
              </div>
            </div>
            <hr>
            <div class="row text-left">
              <div class="col-2">
                <i class="fas fa-clock text-purple fa-2x"></i>
              </div>
              <div class="col-10">
                <p><?php echo $args["venue"]["venue-time"]; ?></p>
              </div>
            </div>
            <hr>
          </div>
          <div class="d-sm-none d-block">
          </div>
        </div>
      </div>
      <!--  -->
      <div class="bg-1 d-none d-sm-block horizontal-gallery">
          <div class="card-deck">
          <?php for ($i=0; $i< 4; $i++){  ?>
            <a class="card img-slide p-0 m-0" href="<?php echo $args['venue']['venue-post-gallery'][$i]['default'];  ?>"
                style="background-image: url(<?php echo $args['venue']['venue-post-gallery'][$i]['thumbnail'];  ?>)">
                <img class=" galleryImg d-none w-100 px-0" src="<?php echo $args['venue']['venue-post-gallery'][$i]['thumbnail'];  ?>" alt="<?php echo $args['venue']['venue-post-gallery'][$i]['alt'];  ?>">
            </a>
          <?php  } ?>
        </div>
      </div>
      <!--  -->
      <div class="card bg-2">
        <div class="row ">
          <div class="col-md-6 px-4 p-sm-5 l p-0 p-sm-3 d-none d-sm-block">
            <div class="p-0 p-sm-3 max-h text-center">
              <p class="h8 card-title">Address and location for <?php echo $args["venue"]["post_title"]; ?></p>
              <h5> <strong></strong> </h5>
              <p><?php echo $args["venue"]["venue-address"]; ?></p>
            </div>
          </div>
          <!--<div class="col-md-6 col-12 image-div p-0"  style="min-height:200px;">-->
            <?php 
              if( !empty($args["venue"]["venue-google-maps"]) ):
              ?>
              <div class="acf-map col-md-6 col-12 image-div p-0">
              	<div class="marker" data-lat="<?php echo $args["venue"]["venue-google-maps"]['lat']; ?>" data-lng="<?php echo $args["venue"]["venue-google-maps"]['lng']; ?>"></div>
              </div>
              <?php endif; ?>
          <!--</div>-->
        </div>
      </div>
      <div class="card bg-1">
        <div class="row tab-content d-none d-sm-flex ">
          <div class="col-md-4 p-5  text-center tab-content">
            <h5> <strong>Acommodations</strong> </h5>
            <br>
            <ul>
              <?php echo $args["venue"]["venue-acommodations"]; ?>
            </ul>
          </div>
          <div class="col-md-4 p-5 l text-center tab-content">
            <h5> <strong>Parking</strong> </h5>
            <br>
            <p><?php echo $args["venue"]["venue-parking"]; ?></p>
          </div>
          <div class="col-md-4 p-5 l text-center">
            <h5> <strong>Transportation</strong> </h5>
            <br>
            <p><?php echo $args["venue"]["venue-transportation"]; ?></p>
          </div>
        </div>
        <div class="px-4 text-left d-sm-none d-block">
          <hr>
          <div class="row text-left">
            <div class="col-2">
              <i class="fas fa-map-marker-alt text-purple fa-2x"></i>
            </div>
            <div class="col-10">
              <p><?php echo $args["venue"]["venue-parking"]; ?></p>
            </div>
          </div>
          <hr>
          <div class="row text-left">
            <div class="col-2">
              <i class="fas fa-bell text-purple fa-2x"></i>
            </div>
            <div class="col-10">
              <ul>
                <?php echo $args["venue"]["venue-acommodations"]; ?>
              </ul>
            </div>
          </div>
          <hr>
          <div class="row text-left">
            <div class="col-2">
              <i class="fas fa-bus text-purple fa-2x"></i>
            </div>
            <div class="col-10">
              <p><?php echo $args["venue"]["venue-transportation"]; ?></p>
            </div>
          </div>
          <hr>
          <div class="row text-left">
            <div class="col-2">
              <i class="fas fa-comments text-purple fa-2x"></i>
            </div>
            <div class="col-10">
              <p>   Aggregated score <?php echo $args["venue"]["venue-score-point"]; ?></p>
            </div>
          </div>
          <hr>
          <div class="text-center">
            <h2><?php echo $args["venue"]["post_title"]; ?></h2>
            <p><?php echo $args["venue"]["venue-score-description"]; ?></p>
          </div>
        </div>
      </div>
      <div class="card separators awards-recognition d-none d-sm-block" >
        <div class="row ">
          <div class="col-md-6 p-5 l mb-md-auto mt-md-5 pt-md-5 text-center venue-layout">
            <span class="logo small px-1 pb-1 pb-md-4" id="bmw-logo-white-alone"></span>
            <p class="h8 card-title pb-md-5">Layout for <?php echo $args["venue"]["post_title"]; ?></p>
            <img class="mx-auto" src="<?php echo wp_get_attachment_image_src( $args['venue']['venue-img-layout'],'full')[0]?>" alt="Generic placeholder image">
          </div>
          <div class="col-md-6  p-sm-5 l">
            <div class="p-5 text-center">
            <?php echo $args["venue"]["venue-layout-description"]; ?>
            </div>
          </div>
        </div>
      </div>
      <!-- CLIENT SCORE -->
        <div class="card bg-2 d-none d-sm-block">
          <div class="row ">
            <div class="col-md-12 px-4 p-sm-5 l p-0 p-sm-3">
              <div class="p-0 p-sm-3 max-h text-center">
                <p class="h8 card-title"><?php echo $args["venue"]["post_title"]; ?>'s Reviews</p>
                <h5> <strong></strong> </h5>
                <p class="mb-0">Agregated Score</p>
                <p class="mb-0"><?php echo $args["venue"]["venue-score-point"]; ?></p>
                <!--imprimir estrellas -->
                <?php  
                  $printStar = $args["venue"]["printStars"];
                  echo $printStar($args["venue"]["venue-score-point"]); 
                ?>
                <p><?php echo $args["venue"]["venue-score-description"]; ?>, <a  href="" class="click-here color-dark">contact us</a>!</p>
              </div>
            </div>
            <div class="col-md-6 image-div p-0" >
              <!--google maps-->
              
              <div id="map" style="width:100%;height:100%;"></div>
            </div>
          </div>
        </div>

        <div class="card bg-2 d-none d-sm-block">
          <div class="row">
            <div class="col-md-4 p-5 text-center tab-content">
              <h5> <strong>The Pro's</strong> </h5>
              <br>
              <p></p><?php echo $args["venue"]["venue-pros"]; ?></p>
            </div>
            <div class="col-md-4 p-5 text-center tab-content">
              <h5> <strong>The Con's</strong> </h5>
              <br>
              <p></p><?php echo $args["venue"]["venue-cons"]; ?></p>
            </div>
            <div class="col-md-4 p-5 text-center tab-content">
              <h5> <strong>The Bottom Half</strong> </h5>
              <br>
              <p></p><?php echo $args["venue"]["venue-bottom-half"]; ?></p>
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