<?php 
$args = wpas_get_view_data();
get_header(); 
?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- JUMBOTROM -->
    <div class="parent bg-dark">
      <div class="jumbotron text-center pt-4 pb-3 my-0 bg-1 bg-dark">
        <div class="card logo medium mx-auto my-5">
          <span class="card-img-top mx-auto" id="bmw-logo"></span>
        </div>
        <div class="container mx-auto my-5">
          <?php echo $args['wp_query']->post_content; ?>
        </div>
      </div>
    </div>
 <!-- FOOTER FULL -->
  <?php get_footer('small'); ?>