<?php  
/* Template Name: Wedding Planners */
$args = wpas_get_view_data();
get_header();
?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- JUMBOTROM -->
  <div class="parent p-3 p-sm-0 d-none d-sm-block">
      <div class="jumbotron text-center pt-4 pb-3 my-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['planners']['planners-img-banner'],'full')[0] ?>');">
          <!--<div class="card logo medium mx-auto d-none d-sm-block">-->
          <!--    <span class="card-img-top mx-auto" id="bmw-logo" style="visibility: hidden;"></span>-->
          <!--</div>-->
          <div class="jb-text d-none d-sm-block">
            <h1 class="my-0 pb-3">Top Miami Wedding Planners</h1>
            <p class="p-2 mb-0">Planner that we trust and recomend.</p>
            <a href="#quote-modal" class="request-quote"><button class="btn btw-l align-text-bottom" role="button">Schedule a call with a planner</button></a><br>
            <p class="py-3 h2 call-now" >or call now! <a class="phone-number" href="tel:+1<?php echo get_option('phone_number'); ?>"><?php echo get_option('phone_number'); ?></a></p>
          </div>
      </div>
  </div>
  <!--MOBILE-->
  <div class="container-fluid d-sm-none d-block">
    <h1 class="my-0">Top Miami Wedding Planners</h1>
    <a class='click-here color-dark' style="color:#993399; text-decoration: none !important;" href="tel:+1<?php echo get_option('phone_number'); ?>" >
      <h5>Call now</h5>
      <h4 class="phone-number"><?php echo get_option('phone_number'); ?></h4>
    </a>
    <hr>
    <ul class="nav nav-tabs  large navbar-nav  ">
      <?php  for( $i= 0; $i< count($args['new_array_planner']); $i++){ ?>
        <li class="nav-item p-2 ">
          <a class="nav-link" href="<?php echo get_permalink( $args['new_array_planner'][$i]["id"] )?>"><h4 ><?php echo $args['new_array_planner'][$i]["post_title"]; ?></h4></a>
          <hr class="m-0">
        </li>
      <?php } ?>
    </ul>
  </div>
  <!---->
    <div class="row subtitle-bar py-3 d-none d-md-block">
      <div class="col-md-12 text-center padding-all">
        <h2>Top Certified Miami Wedding Planners</h2>
      </div>
    </div>
    <!-- CARGROUP -->
      <div class="row planners">
        <?php for( $j= 0; $j< count($args['new_array_planner']); $j++){ ?>
        <div class="card col-sm-6 col-md-4 px-0">
          <a class="hover-effect" href="<?php echo get_permalink( $args['new_array_planner'][$j]["id"] )?>">
            <div class="card-img-top venue-thumb" style="background-image:url(<?php echo $args['new_array_planner'][$j]['thumbnail'] ?>);" alt="Card image cap"></div>
          </a>
          <div class=" card-body text-center p-0">
            <div class="subtitle-bar p-2">
            <p class="h8 card-title m-0"><b><?php echo $args['new_array_planner'][$j]["post_title"]; ?></b></p>
            <p class="m-1"><?php echo $args['new_array_planner'][$j]["location"]; ?>.</p>
              <p class="m-0"><?php echo $args['new_array_planner'][$j]["succesfully"]; ?> weddings successfully planned.</p>
              <p class=" "><?php echo $args['new_array_planner'][$j]["experience"]; ?> years in the industry</p>
            </div>
          <!--</div>-->
            <div class="p-3">
              <p class="card-text text-center p-3 align-top"><?php echo $args['new_array_planner'][$j]["description"]; ?></p>
            </div>
          </div>
            <div class="text-center pb-3 pt-0">
              <a href="<?php echo get_permalink( $args['new_array_planner'][$j]["id"] )?>"><small class="click-here">Read more</small></a>
            </div>
        </div>
        <?php } ?>
      </div>
  <!---->
    <div class="row subtitle-bar py-3 d-none d-md-block">
      <div class="col-md-12 text-center padding-all">
        <h2>What our clients say about our planners</h2>
      </div>
    </div>
  </div>
  <!-- CLIENT TESTIMONIALS -->
  <div class='d-none d-md-block'>
  <?php get_template_part('partials/client','testimonial'); ?>
    
  </div>
    <!-- END CLIENT TESTIMONIALS -->
    <div class="row subtitle-bar py-3 d-none d-md-block">
      <div class="col-md-12 text-center padding-all">
        <h5>Why Best Miami Weddings</h5>
      </div>
    </div>
    <!-- JUMBOTROM -->
<div class="jumbotron text-dark jb-medium my-0 p-5 d-none d-md-block" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['planners']['planners-img-banner-2'],'full')[0] ?>');">
  <div class="container text-center px-5 py-0">
    <div class='row px-5 mb-2'>
      <div class='col-md-12 text-center'>
        <?php echo $args['planners']['planners-description'] ?>
      </div>
    </div>
    <div class='row px-5' >
      <div class='col-12 px-0'>
        <img class="logo" style="max-width: 100px;" src="<?php echo wp_get_attachment_image_src($args['planners']['planners-logo'],'full')[0] ?>" alt="First slide"> </img>
      </div>
      <div class='col-md-10 px-5'>
        <?php echo $args['planners']['planners-benefits'] ?>
      </div>
    </div>
  </div>
</div>
    <!-- END JUMBOTROM -->
</div>
<!-- FOOTER FULL -->
  <?php get_footer('small'); ?>
