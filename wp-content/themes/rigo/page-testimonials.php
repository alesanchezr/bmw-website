<?php 
/* Template Name: Wedding Testimonials */
$args = wpas_get_view_data();
// debug($args);
get_header(); ?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- JUMBOTROM -->
    <div class="parent">
      <div class="jumbotron text-center py-5 my-0 justify-content-md-center" style="background-image: url('<?php echo wp_get_attachment_image_src($args['testimonials']['testimonial-img-banner'],'full')[0] ?>">
        <div class="card logo medium mx-auto">
          <span class="card-img-top mx-auto" id="bmw-logo"></span>
        </div>
        <div class="jb-text d-block text-center">
          <div class="container px-5 mx-auto w-75">
            <h2 class="my-0 px-5 mx-5">Work with the best, our reputation precede us</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- END JUMBOTROM -->
    <?php 
      $testimonialScore = [4.8];
      $scoreTestimonial = $args['new_array_testimonial'][0]['score_point'];
      $scorePrint = $scoreTestimonial($testimonialScore);
    ?>
  <div class="row p-2">
    <div class="text-center p-5 w-100">
        <?php  
          $printStar = $args['new_array_testimonial'][0]['printStars'];
          echo $printStar($scorePrint); 
        ?>
      <p class="mt-2">Average <?php echo $scorePrint; ?> rating within all available review systems, <a class="click-here color-dark"href="">Learn more</a> </p>
      <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
    </div>
  </div>
  <div class="container p-3">
      <div class="card-columns">
        <?php 
        for ($i = 0; $i < count($args['new_array_testimonial']); $i++){ ?>
          <div class="card p-5 testimonial">
            <div class="card-body text-center card-content">
              <img class=" img-fluid mounted-image mb-4" src="<?php echo $args['new_array_testimonial'][$i]['thumbnail'] ?>" alt="card image">
              <p class="card-text"><?php echo $args['new_array_testimonial'][$i]['testimonial'] ?></p>
              <p><?php echo $args['new_array_testimonial'][$i]["post_title"]; ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
  </div>
<!-- FOOTER FULL -->
<?php get_footer(); ?>