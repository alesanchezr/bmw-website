<?php 
$args = wpas_get_view_data();
get_header(); 
?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- JUMBOTROM -->
    <div class="parent">
      <div class="jumbotron text-center pt-4 pb-3 my-0 " style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/img/crying-bride.jpg'); background-position: top right;">
        <!--<div class="card logo medium mx-auto my-5">-->
        <!--  <span class="card-img-top mx-auto" id="bmw-logo"></span>-->
        <!--</div>-->
        <div class="jb-text d-block">
          <div class="container mx-auto">
            <h2 class="my-0 px-5 mx-sm-5 mb-sm-3 mt-4 mt-sm-0">Please forgive us, the website you are looking for is missing, continue to our website to enjoy all of our content. 
		</h2>
          </div>
        </div>
      </div>
    </div>
 <!-- FOOTER FULL -->
  <?php get_footer(); ?>