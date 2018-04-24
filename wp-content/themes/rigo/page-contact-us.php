<?php 
/* Template Name: Wedding Contact Us */
$args = wpas_get_view_data();
get_header('small'); 
?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- JUMBOTROM -->
    <div class="parent">
      <div class="jumbotron text-center pt-4 pb-3 my-0 " style="background-image: url('<?php echo wp_get_attachment_image_src( $args['contact']['contact-img-banner'],'full')[0] ?>');">
        <div class="card logo medium mx-auto">
          <span class="card-img-top mx-auto" id="bmw-logo"></span>
        </div>
        <div class="jb-text d-block">
          <div class="container px-5 mx-5">
            <h1 class="my-0 px-5 mx-5">Responsiveness is one of our main values, we guarantee you a response in less than 10min</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- END JUMBOTROM -->
    <div class="container-fluid px-0">
      <div class="row body-request contact m-5 p-5">
        <div class="col-md-6 text-center align-top">
          <h5 class="h8" >Call now! </h5>
          <h5 class="h7">  305-662-4742</h5>
        </div>
        <!-- FORM -->
        <div class="col-md-6 pr-5 body-request mt-1">
          <form>
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
              <input type="email" class="form-control mt-0 mb-2" id="" placeholder="Email">
            </div>
            <div class="form-inline-block">
              <label class=" mb-0" for="dayEven">Day of event</label>
              <input type="dayEven" class="form-control mt-0 mb-2" id="" placeholder="Day of event">
            </div>
            <div class="form-inline-block mb-4">
              <label  class=" mb-0" for="observation">Observation</label>
              <textarea class="form-control mt-0 mb-0" id="observation" placeholder="Observation" rows="6"></textarea>
              <a>0 de 60 max character.</a>
            </div>
            <button  class="btn form-control" type="button" name="button">Send</button>
          </form>
        </div>
      </div>
    </div>
 <!-- FOOTER FULL -->
  <?php get_footer(); ?>