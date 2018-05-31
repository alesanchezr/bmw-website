<?php  
$args = wpas_get_view_data();

?>
<?php get_header(); ?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
  <div class="parent d-none d-sm-block">
    <div class="jumbotron  text-center pt-4 pb-3 my-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['church']['church-img-banner'],'full')[0] ?>')">
      <div class="card logo medium mx-auto">
        <span class="card-img-top mx-auto" id="bmw-logo"></span>
      </div>
      <div class="jb-text d-block">
        <h1 class="mt-0 mb-4"><?php echo $args["church"]["post_title"]; ?></h1>
        <button class="btn btw-l align-text-bottom" href="./page.html" role="button">Get a fast a quote</button><br>
        <h2 class="p-2" style="color:#993399;">or call now! <?php echo get_option('phone_number'); ?></h2>
      </div>

    </div>
  </div>
  <!-- HORIZONTAL CARD -->
  <div class="row sub-menu d-none d-sm-block venue-menu" >
    <div class="container">
      <ul class="container text-uppercase large text-center mx-auto"  role="tablist">
        <a href="#generalInfo" >General Info</a>
        <?php if($args['church']['church-360-tour'] != null) {?>
          <a id="a-360-tour" href="#animatedModal">360 tour</a>
        <?php } ?>
        <a href="/gallery/?postId=<?php echo $args['church']['ID'] ?>">Gallery</a>
        <a href="#location">Location</a>
        <?php if($args['church']['church-wedding']  != null) {?>
          <a href="<?php echo $args['church']['church-wedding'] ?>">Weddings</a>
        <?php } ?>
      </ul>
    </div>
  </div>
  <section>
    <div class="card bg-1">
      <div class="row ">
        <div class="col-md-7 px-4 p-sm-5 l">
          <div class="p-0 p-sm-3 max-h text-sm-right text-center pt-4">
            <h1 class="d-sm-none d-block pb-4"><?php echo $args["church"]["post_title"]; ?></h1>
            <div class="d-sm-none d-block text-left">
              <p class="px-3">Call now</p>
              <h2 class="d-sm-none d-block px-3"><?php echo get_option('phone_number'); ?></h2>
              <hr>
            </div>

            <p class="card-text"><?php echo $args["church"]["church-description"]; ?></p>
          </div>

        </div>
        <div class="col-md-5 px-4 p-sm-5 l">
          <div class="p-0 p-sm-3 max-h text-left text-sm-center p-0 p-sm-3 d-none d-sm-block">
            <p></p>
            <p class="card-text "><?php echo $args["church"]["church-capacity"]; ?></p>
            <p class="card-text"><?php echo $args["church"]["church-time"]; ?></p>
          </div>
          <div class="px-2 text-left d-sm-none d-block ">
            <hr>
            <div class="row text-left">
              <div class="col-2">
                <i class="fas fa-users text-purple fa-2x"></i>
              </div>
              <div class="col-10">
                <p><?php echo $args["church"]["church-capacity"]; ?></p>
              </div>
            </div>
            <hr>
            <div class="row text-left">
              <div class="col-2">
                <i class="fas fa-clock text-purple fa-2x"></i>
              </div>
              <div class="col-10">
                <p><?php echo $args["church"]["church-time"]; ?></p>
              </div>
            </div>
            <hr>
          </div>
          <div class="d-sm-none d-block">
          </div>
        </div>
      </div>
      <!--  -->
      <div class="card bg-2">
        <div class="row ">
          <div class="col-md-6 px-4 p-sm-5 l p-0 p-sm-3 d-none d-sm-block">
            <div class="p-0 p-sm-3 max-h text-center">
              <p class="h8 card-title">Address and location for <?php echo $args["church"]["post_title"]; ?></p>
              <h5> <strong></strong> </h5>
              <p><?php echo $args["church"]["church-address"]; ?></p>
            </div>
          </div>
          <!--<div class="col-md-6 col-12 image-div p-0"  style="min-height:200px;">-->
            <!--<div id="map" style=""><?php /*echo $args["church"]["church-google-maps"]; */?></div>-->
            <?php 
              if( !empty($args["church"]["church-google-maps"]) ):
              ?>
              <div class="acf-map col-md-6 col-12 image-div p-0">
              	<div class="marker" data-lat="<?php echo $args["church"]["church-google-maps"]['lat']; ?>" data-lng="<?php echo $args["church"]["church-google-maps"]['lng']; ?>"></div>
              </div>
              <?php endif; ?>
            
          <!--</div>-->
        <!--</div>-->
      </div>
      <div class="card bg-1">
        <div class="row tab-content d-none d-sm-flex ">
          <div class="col-md-4 p-5  text-center tab-content">
            <h5> <strong>Near by Acommodations</strong> </h5>
            <br>
            <ul>
              <?php echo $args["church"]["church-acommodations"]; ?>
            </ul>
          </div>
          <div class="col-md-4 p-5 l text-center tab-content">
            <h5> <strong>Parking</strong> </h5>
            <br>
            <p><?php echo $args["church"]["church-parking"]; ?></p>
          </div>
          <div class="col-md-4 p-5 l text-center">
            <h5> <strong>Transportation</strong> </h5>
            <br>
            <p><?php echo $args["church"]["church-transportation"]; ?></p>
          </div>
        </div>
        <div class="px-4 text-left d-sm-none d-block">
          <hr>
          <div class="row text-left">
            <div class="col-2">
              <i class="fas fa-map-marker-alt text-purple fa-2x"></i>
            </div>
            <div class="col-10">
              <p><?php echo $args["church"]["church-parking"]; ?></p>
            </div>
          </div>
          <hr>
          <div class="row text-left">
            <div class="col-2">
              <i class="fas fa-bell text-purple fa-2x"></i>
            </div>
            <div class="col-10">
              <ul>
                <?php echo $args["church"]["church-acommodations"]; ?>
              </ul>
            </div>
          </div>
          <hr>
          <div class="row text-left">
            <div class="col-2">
              <i class="fas fa-bus text-purple fa-2x"></i>
            </div>
            <div class="col-10">
              <p><?php echo $args["church"]["church-transportation"]; ?></p>
            </div>
          </div>
          <hr>
    </div>
      </div> 
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