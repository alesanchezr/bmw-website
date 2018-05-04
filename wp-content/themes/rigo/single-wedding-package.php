<?php  
$args = wpas_get_view_data();
// debug($args);
?>
<?php get_header(); ?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- JUMBOTROM -->
  <div class="parent p-3 p-sm-0">
      <div class="jumbotron text-sm-center pt-4 pb-3 my-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['package']['package-img-banner'],'full')[0] ?>')">
          <div class="card logo medium mx-auto d-none d-sm-block">
              <span class="card-img-top mx-auto" id="bmw-logo"></span>
          </div>
          <div class="jb-text d-none d-sm-block">
            <h1><?php echo $args["package"]["post_title"]; ?> Wedding Package</h1>
            <p>Start customizing your wedding by choosing one of our wedding packages</p>
          </div>
      </div>
  </div>
<!-- CONTACT -->
  <!-- FORM -->
  <div class="container-fluid body-request contact my-2 py-5">
    <div class="row">
      <div class="col-md-5 ml-5">
        <div class="text-center ml-5 pl-5 pr-4">
          <a  class='click-here color-light' style="text-decoration: none !important;"href="tel:+3056624742">
            <h5 class="h8" >Call now! </h5>
            <h5 class="h7">  305-662-4742</h5>
          </a>
          <p>to request more information and pricing or fill the follow form: </p>
        </div>
      </div>
      <!--  -->
      <div class=" col-md-6 pl-1">
        <form class="ml-5">
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
            <input type="email" class="form-control mt-0 mb-1" id="" placeholder="Email">
          </div>
          <div class="form-inline-block pt-5">
            <button  class="btn form-control light-background" type="button" name="button">Request Pricing and PDF</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- END CONTACT -->
<div class="d-sm-none d-block px-3">
  <h1><?php echo $args["package"]["post_title"]; ?></h1>
      <p>maintaining the great Best Miami Award Winning Quiality. Sit back, relax, and enjoy the ride</p>
  <hr>
  <h1>Catering Experience</h1>
</div>
<div class="row subtitle-bar d-none d-sm-block">
  <div class="col-md-12 text-sm-center p-sm-5">
    <h2>Catering Experience</h2>
  </div>
</div>
<!-- HORIZONTAL CARD -->
<section>
  <div class="card bg-1">
    <div class="row ">
      <div class="col-md-6 px-3 py-sm-5 l">
        <div class="card-block px-3 text-sm-center">
          <?php echo $args["package"]["package-card-1"]; ?>
        </div>
      </div>
      <div class="col-md-6 image-div d-none d-sm-block" style="background-image:url('<?php echo wp_get_attachment_image_src( $args['package']['package-img-card-1'],'full')[0] ?>')">
      </div>
    </div>
  </div>
  <!--  -->
<div class="card bg-2">
  <div class="row ">
    <div class="col-md-6 px-3 p-sm-5 l">
      <div class="card-block px-3  text-sm-center">
      <?php echo $args["package"]["package-card-2"]; ?>
      </div>
    </div>
    <div class="col-md-6 image-div d-none d-sm-block px-3" style="background-image:url('<?php echo wp_get_attachment_image_src( $args['package']['package-img-card-2'],'full')[0] ?>')">
    </div>
  </div>
</div>
  <!--  -->
<div class="card bg-1">
  <div class="row ">
    <div class="col-md-6 px-3 p-sm-5 l">
      <div class="card-block px-3 text-sm-center d-none d-sm-block ">
        <?php echo $args["package"]["package-card-3"]; ?>
      </div>
    </div>
    <div class="col-md-6 image-div d-none d-sm-block " style="background-image:url('<?php echo wp_get_attachment_image_src( $args['package']['package-img-card-3'],'full')[0] ?>')">
    </div>
  </div>
</div>
  <!--  -->
  <div class="card bg-2">
    <div class="row ">
      <div class="col-md-6 px-3 p-sm-5 l">
        <div class="card-block px-3 pb-4 text-sm-center">
          <?php echo $args["package"]["package-card-4"]; ?>
        </div>
      </div>
      <div class="col-md-6 image-div" style="background-image:url('<?php echo wp_get_attachment_image_src( $args['package']['package-img-card-4'],'full')[0] ?>')">
      </div>
    </div>
  </div>
</section>
<!-- END HORIZONTAL CARD -->
<div class="d-none d-sm-block">
  <div class="row subtitle-bar dark py-3">
    <div class="col-md-12 text-sm-center p-sm-5">
      <h2>Entertainment Services available upon request</h2>
    </div>
  </div>
  <div class="row subtitle-bar py-3 ">
    <div class="col-md-12 text-sm-center p-sm-5">
      <h2>Client's Testimonials</h2>
    </div>
  </div>
  <!-- CLIENT TESTIMONIALS -->
  <?php get_template_part('partials/client','testimonial'); ?>
</div>

  <?php get_footer(); ?>