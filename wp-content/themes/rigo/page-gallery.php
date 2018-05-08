<?php  
/* Template Name: Wedding Gallery */
$args = wpas_get_view_data();
get_header();
?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
  <div class="parent">
    <div class="jumbotron  text-center pt-4 pb-3 my-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['gallery']['gallery-img-banner'],'full')[0] ?>')">
      <div class="card logo medium mx-auto">
        <span class="card-img-top mx-auto" id="bmw-logo"></span>
      </div>
      <div class="jb-text d-block">
        <h1 class="my-0"><?php echo get_the_title($_GET['postId']) ?></h1>
        <h1>Photos</h1>
      </div>
    </div>
  </div>
  <!-- HORIZONTAL CARD -->
<<<<<<< HEAD
<section>
  <div class="card bg-1 m-5">
    <div class="container">
      <div class="row mazonri-gallery mx-5">
        <?php for ($i=0; $i< count($args['gallery']['gallery-page-gallery']); $i++){  ?>
          <div class="col-md-3 img-mazonri hover-effect p-0 m-0" style="background-image: url(<?php echo $args['gallery']['gallery-page-gallery'][$i]['thumbnail'];?>)"           
              href="<?php echo $args['gallery']['gallery-page-gallery'][$i]['default'];?>">
              <img class="" 
                href="<?php echo $args['gallery']['gallery-page-gallery'][$i]['default'];?>"
                src="<?php echo $args['gallery']['gallery-page-gallery'][$i]['thumbnail'];?>" 
                alt="<?php echo $args['gallery']['gallery-page-gallery'][$i]['alt'];?>">
              </img>
=======
  <section>
    <div class="card bg-1 mx-5">
      <div class="container my-5 ">
          <div class="row mazonri-gallery mx-5">
            <?php for ($i=0; $i< count($args['gallery']['gallery-page-gallery']); $i++){  ?>
              <div class="col-md-3 p-0 hover-effect">
                <a class="card img-mazonri p-0 m-0" href="<?php echo $args['gallery']['gallery-page-gallery'][$i]['default'];  ?>">
                  <img class=" galleryImg d-block w-100 px-0" src="<?php echo $args['gallery']['gallery-page-gallery'][$i]['thumbnail'];  ?>" alt="<?php echo $args['gallery']['gallery-page-gallery'][$i]['alt']; ?>">
                </a>
              </div>
            <?php  } ?>
>>>>>>> b6bd7a918d5ee43f59a8f7e4da77b9e94ea4185b
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
    <?php get_template_part('partials/rating'); ?>
    <!-- END FOOTER FULL -->
    <?php get_footer(); ?>