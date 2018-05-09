<?php  
$args = wpas_get_view_data();
// debug($args);
?>
<?php get_header(); ?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<div class="jumbotron text-center p-0 my-0 " style="background-color: #666666;">
    <div class="row">
      <div class="col-md-7">
        <div class="card logo large mx-auto">
          <span class="card-img-top mx-auto" id="bmw-logo"></span>
        </div>
        <div class="jb-text d-block pb-3">
          <div class="container mx-auto">
            <h1 class="my-0 px-5 mx-5 mb-3"><?php echo $args["planner"]["post_title"]; ?></h1>
            <p><?php echo $args['planner']['planner-description']; ?>.</p>
          </div>
        </div>
      </div>
      <div class="col-md-5" style="background-image: url('<?php echo wp_get_attachment_image_src($args['planner']['planner-img-banner'],'full')[0] ?>'); background-repeat: no-repeat; background-attachment: cover; background-position: center; background-size: cover;">
        <!--PHOTO-->
      </div>
    </div>
  </div>
  <!-- FORM -->
  <div class="container-fluid my-2 py-5">
    <div class="row container mx-auto">
      <div class="col-md-5 ml-5">
        <div class="text-center ml-5 pl-5 pr-4">
          <a class='click-here color-dark' style="text-decoration: none !important;"href="tel:+3056624742">
            <h5 class="h8" >Call now! </h5>
            <h5 class="h7">  305-662-4742</h5>
          </a>
          <p>Call now! 305-662-4742 to schedule an appointment with <?php echo $args["planner"]["post_title"]; ?>,
            or fill the following form and we will email you with availability:</p>
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
            <button  class="btn form-control light-background" type="button" name="button">Request Callback</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--  -->
  <div class="tab-content-dark d-none d-sm-flex">
    <div class="container">
      <div class="row">
        <div class="col-md-6 pl-4 pr-1 pt-5 pb-3 text-center tab-content-dark">
          <h2> <strong><?php echo $args["planner"]["post_title"]; ?>'s uniqueness</strong> </h2>
          <br>
          <p class="mx-5"><?php echo $args['planner']['planner-uniqueness'] ?>.</p>
          <a href="<?php echo $args['planner']['planner-link-uniqueness'] ?>" <p class="click-here">Read more</p> </a>
        </div>
        <div class="col-md-6 pl-1 pr-4 pt-5 pb-3 text-center tab-content-dark">
          <h2> <strong>Fun Facts about <?php echo $args["planner"]["post_title"]; ?></strong> </h2>
          <br>
          <p class="mx-5"><?php echo $args["planner"]["planner-about"]; ?></p>
          </div>
        </div>
      </div>
    </div>
  <!--  -->
  <div class="row justify-content-md-center py-3">
    <div class="col-md-2 text-center">
      <h2 class="h5"><?php echo $args['planner']['planner-planned-succesfully'] ?></h2>
      <p class="h5 py-0">Weddings Planned Succesfully</p>
    </div>
    <div class="col-md-2 text-center">
      <h2 class="h5"><?php echo $args['planner']['planner-each-year'] ?></h2>
      <p class="h5 py-0">Weddings each year</p>
    </div>
    <div class="col-md-2 text-center">
      <h2 class="h5"><?php echo $args['planner']['planner-experience']?> years</h2>
      <p class="h5 py-0">Of experience</p>
    </div>
  </div>
  <!--  -->
  <div class="tab-content-dark d-none d-sm-flex">
    <div class="container">
      <div class="row mx-5 px-5 py-5">
        <div class="col-md-12 text-center tab-content-dark">
          <h2> <strong>Pricing</strong> </h2>
          <br>
          <p class="mx-5 px-5 text-center"><?php echo $args["planner"]["post_title"]; ?>'s prices can vary from $<?php echo $args['planner']['planner-amount-from'] ?> to $<?php echo $args['planner']['planner-amount-to'] ?> depending on the number of hours, vendors and other factors.</p>
        </div>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="row py-3 ">
      <div class="col-md-12 text-sm-center p-sm-5">
        <h2>Client's Testimonials</h2>
      </div>
      <?php get_template_part('partials/client','testimonial'); ?>
      
        <div class="text-center p-5 w-100">
          <p ><?php echo $args["planner"]["post_title"]; ?>'s online reviews are still being procesed by our team, please come back in a few days. 
            <?php $printStar = $args["planner"]["printStars"];
                  echo $printStar($args["planner"]["planner-score-point"]); 
            ?>
          </p>
      </div>
    </div>    

 <!-- FOOTER FULL -->
  <?php get_footer('small'); ?>