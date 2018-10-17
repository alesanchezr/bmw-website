<?php  
$args = wpas_get_view_data();
// debug($args);
?>
<?php get_header(); ?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
  <!-- JUMBOTROM -->


<div id="generalInfo">
  <div class="parent">
    <div class="jumbotron  text-center pt-4 pb-3 my-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['venue']['venue-img-banner'],'full')[0] ?>')">
      <!--<div class="card logo medium mx-auto" id="bmw-logo">-->
      <!--</div>-->
      <div class="jb-text d-block">
        <h1 class="mt-0 mb-4"><?php echo $args["venue"]["post_title"]; ?></h1>
        <a href="#quote-modal" class="request-quote"><button class="btn btw-l align-text-bottom" role="button">Get a fast a quote</button></a><br>
        <p class="py-3 h2 call-now" >or call now! <a class="phone-number" href="tel:+1<?php echo get_option('phone_number'); ?>"><?php echo get_option('phone_number'); ?></a></p>
      </div>
    </div>
  </div>
  
  <div class="row sub-menu d-none d-sm-block venue-menu" >
    <div class="container">
      <ul class="container text-uppercase large text-center mx-auto"  role="tablist">
        <a href="#generalInfo" >General Info</a>
        <a href="#venuesAreas">Venues areas</a>
        <?php if($args['venue']['venue-google-360-field'] != null) {?>
          <a id="a-360-tour" href="#animatedModal">360 tour</a>
        <?php } ?>
        <a href="/gallery/?postId=<?php echo $args['venue']['ID'] ?>">Gallery</a>
        <a href="#location">Location</a>
        <?php if($args['venue']['venue-wedding']  != null) {?>
          <a href="<?php echo $args['venue']['venue-wedding'] ?>">Weddings</a>
        <?php } ?>
      </ul>
    </div>
  </div>
  <!-- HORIZONTAL CARD -->
  <section>
    <div class="card bg-1">
      <div class="row container mx-auto my-5">
        <div class="col-md-7 px-4 p-sm-5 l">
          <div class="p-0 p-sm-3 max-h text-sm-right text-center pt-4">
            <p class="card-text"><?php echo $args["venue"]["venue-description"]; ?></p>
          </div>

        </div>
        <div class="col-12 col-md-5">
          <div class="p-0 p-sm-3 max-h text-left text-sm-center p-0 p-sm-3 d-none d-sm-block">
            <p>&nbsp;</p>
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
          <?php for ($i=0; $i< count($args['venue']['venue-post-gallery']); $i++){  ?>
            <div class="card p-0 m-0 hover-effect<?php if($i>2){ echo " d-none"; if($i<5) echo " d-xl-flex"; } ?>">
              <a class="img-slide" href="<?php echo $args['venue']['venue-post-gallery'][$i]['default'];  ?>"
                style="background-image: url(<?php echo $args['venue']['venue-post-gallery'][$i]['thumbnail']; ?>)">
                  <img class=" galleryImg d-none w-100 px-0" src="<?php echo $args['venue']['venue-post-gallery'][$i]['thumbnail'];  ?>" alt="<?php echo $args['venue']['venue-post-gallery'][$i]['alt'];  ?>">
              </a>
            </div>
          <?php  } ?>
        </div>
      </div>
      
      <div class="bg-1 d-block d-sm-none horizontal-gallery">
          <div class="card-columns">
          <?php for ($i=0; $i< count($args['venue']['venue-post-gallery']); $i++){  ?>
            <div class="card p-0 m-0 hover-effect<?php if($i>2){ echo " d-none"; if($i<5) echo " d-xl-flex"; } ?>">
              <a class="img-slide" href="<?php echo $args['venue']['venue-post-gallery'][$i]['default'];  ?>"
                style="background-image: url(<?php echo $args['venue']['venue-post-gallery'][$i]['thumbnail']; ?>)">
                  <img class=" galleryImg d-none w-100 px-0" src="<?php echo $args['venue']['venue-post-gallery'][$i]['thumbnail'];  ?>" alt="<?php echo $args['venue']['venue-post-gallery'][$i]['alt'];  ?>">
              </a>
            </div>
          <?php  } ?>
        </div>
      </div>
      <!--  -->
      <div class="card bg-2" id="location">
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
              <div class="acf-map col-md-6 col-12 image-div p-0 d-none d-sm-block">
              	<div class="marker" data-lat="<?php echo $args["venue"]["venue-google-maps"]['lat']; ?>" data-lng="<?php echo $args["venue"]["venue-google-maps"]['lng']; ?>"></div>
              </div>
              <?php endif; ?>
          <!--</div>-->
          <!--MOVIL-->
          <div class="col-12 px-0 d-block d-sm-none" style="background-color: white;">
            <div class="pt-3 pb-2 px-2 text-center">
              <p class="h8 card-title"><?php echo $args["venue"]["post_title"]; ?></p>
              <h5> <strong></strong> </h5>
              <p><?php echo $args["venue"]["venue-address"]; ?></p>
            </div>
             <?php 
              if( !empty($args["venue"]["venue-google-maps"]) ):
              ?>
              <div class="acf-map image-div px-5">
              	<div class="marker" data-lat="<?php echo $args["venue"]["venue-google-maps"]['lat']; ?>" data-lng="<?php echo $args["venue"]["venue-google-maps"]['lng']; ?>"></div>
              </div>
              <?php endif; ?>
          </div>
          <!---->
        </div>
      </div>
      <div class="card bg-1">
        <div class="row d-none d-sm-flex">
          <div class="col-md-4 p-5  text-center">
            <h5> <strong>Near by Acommodations</strong> </h5>
            <br>
            <ul class="p-0">
              <?php echo $args["venue"]["venue-acommodations"]; ?>
            </ul>
          </div>
          <div class="col-md-4 p-5 l text-center">
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
              <ul class="px-0">
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
      <?php if(!empty($args['venue']['venue-img-layout'])){ ?>
      <div class="card separators awards-recognition d-none d-sm-block" id="venuesAreas" >
        <div class="row ">
          <div class="col-sm-12 col-md-5 col-lg-4 p-5 l mb-md-auto mt-md-5 pt-md-5 text-center venue-layout">
            <span class="logo small px-1 pb-1 pb-md-4" id="bmw-logo-white-alone"></span>
            <p class="h8 card-title pb-md-5">Layout for <?php echo $args["venue"]["post_title"]; ?></p>
            <img class="mx-auto" src="<?php echo wp_get_attachment_image_src( $args['venue']['venue-img-layout'],'full')[0] ?>" alt="Generic placeholder image">
          </div>
          <div class="col-sm-12 col-md-7 col-lg-8 p-sm-5 l">
            <div class="p-5 text-center">
            <?php echo $args["venue"]["venue-layout-description"]; ?>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
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
                <p><?php echo $args["venue"]["venue-score-description"]; ?>, <a  href="<?php echo get_permalink( get_page_by_path('contact-us' ) ); ?>" class="click-here color-dark">contact us</a>!</p>
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
            <div class="col-md-4 p-5 text-center">
              <h5> <strong>The Pro's</strong> </h5>
              <br>
              <p></p><?php echo $args["venue"]["venue-pros"]; ?></p>
            </div>
            <div class="col-md-4 p-5 text-center">
              <h5> <strong>The Con's</strong> </h5>
              <br>
              <p></p><?php echo $args["venue"]["venue-cons"]; ?></p>
            </div>
            <div class="col-md-4 p-5 text-center">
              <h5> <strong>The Bottom Half</strong> </h5>
              <br>
              <p></p><?php echo $args["venue"]["venue-bottom-half"]; ?></p>
            </div>
          </div>
        </div>
        <!-- END CLIENT REVIEW -->
        <?php get_template_part('partials/rating'); ?>
</div>
    <!--MODAL-->
      <div id="animatedModal">
        <div class="col-md-12 modal-menu">
          <div class="top-venue-menu">
            <div class="close-animatedModal btn-close"> 
              <span class="glyphicon glyphicon-remove" style="color:white"></span>
              <i class="fas fa-times-circle"></i>
            </div>
          </div>
        </div>
        <div class="modal-content">
          <iframe src=<?php echo $args['venue']['venue-google-360-field'] ?> width='100%' height='100%'></iframe>              
        </div>
      </div> 
    <!---->
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