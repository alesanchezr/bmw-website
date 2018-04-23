<?php
/* Template Name: Wedding Venues and Location */
$newArrayVenues = wpas_get_view_data();
$args = wpas_get_view_data();
get_header();
?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- JUMBOTROM -->
<div class="parent d-none d-sm-block">
  <div class="jumbotron text-center my-0" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/banner1.jpg');">
    <div class="card logo medium mx-auto">
      <span class="card-img-top mx-auto" id="bmw-logo"></span>
    </div>
    <div class="">
      <h1 class="mb-5">Wedding Miami Packages for Miami</h1>
      <button class="btn btw-l align-text-bottom" href="./page.html" role="button">Request a quote</button><br>
      <h2 class="p-2" style="color:#993399;">or call now! 305 662 7442</h2>
    </div>
  </div>
</div>
<!-- END JUMBOTROM -->
<div class="row subtitle-bar light ">
  <div class="col-md-12 text-center py-5 d-none d-sm-block">
    <h2>Wow your guests, you need a venue that will make you shine!</h2>
  </div>
</div>

<div class="d-sm-none d-block text-center">
  <h1>Wedding Venues</h1>
</div>
<!-- CARD -->
  <div class="card-deck text-sm-center"> 
    <?php for ($x=0; $x< count($newArrayVenues); $x++){ ?>
      <div class="row col-md-4  mx-auto ">
        <div class="col-md-12 col-4 p-0 p-sm-2 center-vertical-div">
          <img class="card-img-top" src="<?php echo $newArrayVenues[$x]['thumbnail'] ?>" alt="Card image cap">
        </div>
        <a class="color-dark" href="">
          <div class="col-md-12 col-8">
            <div class="card text-sm-center">
              <div class="card-body px-0 px-sm-2 ">
                <h5 class="card-title"><?php echo $newArrayVenues[$x]["post_title"]; ?></h5>
                <p class="card-text"><?php echo $newArrayVenues[$x]["address"]; ?></p>
                <hr class="d-sm-none d-block">
              </div>
              <div class="card-footer d-none d-sm-block">
                <a href="<?php echo get_permalink( $newArrayVenues[$x]["id"] )?>"><small class=" click-here">Read more</small></a>
              </div>
            </div>
          </div>
        </a>
      </div>
    
    <?php  }; ?>
  </div>


  
  <!--    -->
</div>
<!--  -->
</div>
<!-- AWARDA RECOGNITION -->
<?php get_template_part('partials/awards','recognition'); ?>
<!-- FOOTER FULL -->
<?php get_template_part('partials/footer','social-media'); ?>
<?php get_template_part('partials/footer','our-customers'); ?>
<?php get_template_part('partials/footer','menu'); ?>
<!-- END FOOTER FULL -->
<?php get_footer(); ?>