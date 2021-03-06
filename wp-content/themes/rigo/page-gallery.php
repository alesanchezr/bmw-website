<?php  
/* Template Name: Wedding Gallery */
$args = wpas_get_view_data();
// debug($args);
get_header();
?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
  <div class="parent">
    <div class="jumbotron  text-center pt-4 pb-3 my-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['gallery']['gallery-img-banner'],'full')[0] ?>')">
      <!--<div class="card logo medium mx-auto">-->
      <!--  <span class="card-img-top mx-auto" id="bmw-logo" style="visibility: hidden;"></span>-->
      <!--</div>-->
      <div class="jb-text d-block">
        <h1 class="my-0"><?php echo get_the_title($args['venue']['ID']) ?></h1>
        <h2>Pictures and Photos</h2>
      </div>
    </div>
  </div>
  <!---->
    <div class="row sub-menu d-none d-sm-block venue-menu" >
    <div class="container">
      <ul class="container text-uppercase large text-center mx-auto"  role="tablist">
        <a href="<?php echo get_permalink( $args['venue']['ID'] ); ?>#generalInfo" >General Info</a>
        <a href="#venuesAreas">Venues areas</a>
        <?php if($args['venue']['venue-google-360-field'] != null) {?>
          <a id="a-360-tour" href="#animatedModal">360 tour</a>
        <?php } ?>
        <a href="<?php echo get_permalink( get_page_by_path('gallery' ) ); ?>?postId=<?php $args['venue']['ID']; ?>&is_event=false">Gallery</a>
        <a href="<?php echo get_permalink( $args['venue']['ID'] ); ?>#location">Location</a>
        <?php /*if($args['venue']['venue-wedding']  != null) {*/?>
          <a href="<?php /*echo $args['venue']['venue-wedding'] */?>">Weddings</a>
        
      </ul>
    </div>
  </div>
  <!-- HORIZONTAL CARD -->
  <section>
    <div class="card bg-1 m-5">
      <div class="container">
        <div class="row mazonri-gallery mx-5">
          <?php for ($i=0; $i< count($args['gallery']['gallery-page-gallery']); $i++){  ?>
          <div class="hover-effect col-md-3 p-0 m-0">
            <a class="img-mazonri" style="background-image: url(<?php echo $args['gallery']['gallery-page-gallery'][$i]['thumbnail'];?>)"           
                href="<?php echo $args['gallery']['gallery-page-gallery'][$i]['default'];?>">
                <img class="" 
                  href="<?php echo $args['gallery']['gallery-page-gallery'][$i]['default'];?>"
                  src="<?php echo $args['gallery']['gallery-page-gallery'][$i]['thumbnail'];?>" 
                  alt="<?php echo $args['gallery']['gallery-page-gallery'][$i]['alt'];?>">
                </img>
            </a>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <!--MODAL-->
  <div id="animatedModal">
    <div class="col-md-12 modal-menu">
      <div class="top-venue-menu">
        <div class="close-animatedModal btn-close"> 
          <span class="glyphicon glyphicon-remove" style="color:white"></span>
          <i class="fas fa-times-circle"></i>
        </div>
      </div>
    </div>
    <div class="modal-content">
      <iframe src=<?php /*echo $args['venue']['venue-google-360-field'] */?> width='100%' height='100%'></iframe>              
    </div>
  </div> 
<!---->
  <?php get_template_part('partials/rating'); ?>
  <!-- END FOOTER FULL -->
  <?php get_footer(); ?>