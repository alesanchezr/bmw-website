<?php
/* Template Name: Wedding Church */
$args = wpas_get_view_data();
get_header();
?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- JUMBOTROM -->
<div class="parent d-none d-sm-block">
  <div class="jumbotron text-center my-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['venue']['venue-img-banner'],'full')[0] ?>');">
    <div class="card logo medium mx-auto">
      <span class="card-img-top mx-auto" id="bmw-logo"></span>
    </div>
    <div class="">
      <h1 class="mb-5">Miami Wedding Venues</h1>
      <button class="btn btw-l align-text-bottom" href="./page.html" role="button">Request a quote</button><br>
      <a style="color:#993399; text-decoration: none !important;" href="tel:+1305 662 7442" ><p class="py-3 h2" >or call now! 305 662 7442</p></a>
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
    <?php for ($x=0; $x< count($args['new_array_venue']); $x++){ ?>
      <div class="row col-md-4  mx-auto p-1">
        <div class="col-md-12 col-4 p-0 m-0 center-vertical-div">
          <img class="card-img-top" src="<?php echo $args['new_array_venue'][$x]['thumbnail'] ?>" alt="Card image cap">
        </div>
        <a class="color-dark" href="">
          <div class="col-md-12 col-8">
            <div class="card text-sm-center">
              <div class="card-body px-0 px-sm-2 ">
                <h5 class="card-title"><?php echo $args['new_array_venue'][$x]["post_title"]; ?></h5>
                <p class="card-text"><?php echo (empty($args['new_array_venue'][$x]["address"])) ? '': $args['new_array_venue'][$x]["address"]; ?></p>
                <hr class="d-sm-none d-block">
              </div>
              <div class="card-footer d-none d-sm-block">
                <a href="<?php echo get_permalink( $args['new_array_venue'][$x]["id"] )?>"><small class=" click-here">Read more</small></a>
              </div>
            </div>
          </div>
        </a>
      </div>
    
    <?php  }; ?>
  </div>
  <!--    -->
<!-- AWARDA RECOGNITION -->
<?php get_template_part('partials/awards','recognition'); ?>
<!-- FOOTER FULL -->
<?php get_footer(); ?>