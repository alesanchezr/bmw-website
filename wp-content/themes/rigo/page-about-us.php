<?php 
/* Template Name: Wedding About Us */
$args = wpas_get_view_data();
get_header(); 
?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
  <!-- JUMBOTROM -->
  <div class="parent">
    <div class="jumbotron text-center my-0 " style="background-image: url('<?php echo wp_get_attachment_image_src( $args['about_us']['about_us-img-banner'],'full')[0] ?>');">
      <!--<div class="card logo medium mx-auto">-->
      <!--  <span class="card-img-top mx-auto" id="bmw-logo" style="visibility: hidden;"></span>-->
      <!--</div>-->
      <div class="jb-text d-block">
        <div class="container mx-auto">
          <h1 class="my-0 text-center">It takes a great team to plan a memorable wedding.</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- END JUMBOTROM -->
<div class="row subtitle-bar justify-content-md-center py-3">
  <div class="col-md-2 text-center">
    <h2 class="mb-2"><?php echo $args["about_us"]["events_planned"]; ?>+</h2>
    <p class="py-0 mb-0">Events Planned</p>
  </div>
  <div class="col-md-2 text-center">
    <h2 class="mb-2"><?php echo $args["about_us"]["satisfied_brides"]; ?></h2>
    <p class="py-0 mb-0">Satisfied Brides</p>
  </div>
  <div class="col-md-2 text-center">
    <h2 class="mb-2"><?php echo $args["about_us"]["experience"]; ?> years</h2>
    <p class="py-0 mb-0">Of experience</p>
  </div>
</div>

<!--  -->
<section class="text-center px-5 py-4 mx-5">
  <div class="container" style="padding: 5px 14%;">
    <p class="pb-0" style="margin-bottom=2 rem;"><?php echo $args["about_us"]["description"]; ?>
    <!--<p class="pb-0">Behind him, there is something else: a team comprised of beautiful minds. A team that strives to turn your wedding day into an unforgettable moment: we make everything simple, we have a passion and eye for details, we believe in what we do and we make your dreams come true. This is us, this is Best Miami Weddings!-->
  </div>
</section>
<!-- AWARDA RECOGNITION -->
  <?php get_template_part('partials/awards','recognition'); ?>
<!--  -->
<div class="row subtitle-bar py-3">
  <div class="col-md-12 text-center padding-all">
    <h2>Our Team</h2>
  </div>
</div>
<!-- CARD -->
<div class="container-fluid px-0">
  <div class="card-group">
     <?php for ( $x= 0; $x< count( $args['new_array_about_us']); $x++ ){ ?>
        <div class="photo-person col-md-4 px-0" style="background-image: url('<?php echo $args['new_array_about_us'][$x]['thumbnail'] ?>');">
          <div class="label text-center py-4 px-auto">
            <?php echo $args["new_array_about_us"][$x]["post_title"]; ?> / <?php echo $args['new_array_about_us'][$x]["position"]; ?>;
          </div>
        </div>
     <?php } ?>
  </div>
</div>
<!--  -->
</div>
<!-- END CARD -->
<div class="row subtitle-bar py-3">
  <div class="col-md-12 text-center padding-all">
    <h2>What our clients say about Fetes & Events</h2>
  </div>
</div>
<!-- CLIENT TESTIMONIALS -->
  <?php get_template_part('partials/client','testimonial-small'); ?>
<!--  -->
<div class="row subtitle-bar py-3">
  <div class="col-md-12 text-center padding-all">
    <h2>Some of our partners</h2>
  </div>
</div>
<!--  -->
<section class="awards-recognition text-center px-2 d-none d-md-block inverted">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-5 px-0">
          <span class="logo costumers width px-1" id="bacardi"></span>
          <span class="logo costumers width px-1" id="nbc"></span>
        </div>
        <div class="col-md-2 center-vertical-div px-0">
          <h2>Our customers</h2>
        </div>
        <div class="col-md-5 px-0">
          <span class="logo costumers width px-1" id="del-monte"></span>
          <span class="logo costumers width px-3 mt-3" id="first-bank"></span>
        </div>
      </div>
    </div>
</section>
<!-- FOOTER FULL -->
  <?php get_footer('small'); ?>