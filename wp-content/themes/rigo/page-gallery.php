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
        <h1 class="my-0">The Bath Club</h1>
        <h1>Photos</h1>
      </div>

    </div>
  </div>
  <!-- HORIZONTAL CARD -->
  <section>
    <div class="card bg-1">
      <div class="container  p-4 ">
          <div class="row horizontal-gallery">
            <?php for ($i=0; $i< count($args['gallery']['gallery-page-gallery']); $i++){  ?>
              <div class="col-md-3 p-0">
                <a class="card img-slide p-0 m-0" href="<?php echo $args['gallery']['gallery-page-gallery'][$i]['default'];  ?>">
                  <img class=" galleryImg d-block w-100 px-0 w-100 h-100" src="<?php echo $args['gallery']['gallery-page-gallery'][$i]['thumbnail'];  ?>" alt="<?php echo $args['gallery']['gallery-page-gallery'][$i]['alt'];  ?>">
                </a>
              </div>
            <?php } ?>
          </div>
    </div>
    <!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
    <!--  <div class="modal-dialog" role="document">-->
    <!--    <div class="modal-content">-->
    <!--      <div class="modal-body">-->
    <!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
    <!--          <span aria-hidden="true">&times;</span>-->
    <!--        </button>-->
    <!--        <img src="" alt="" id="image" class="img-fluid w-100 rounded mt-0">-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
  </section>
    <?php get_template_part('partials/rating'); ?>
    <!-- END FOOTER FULL -->
    <?php get_footer(); ?>
    
    
  <script>
  var $imageSrc;
  $('.gallery img').click(function() {
    $imageSrc = $(this).data('bigimage');
  });
  console.log($imageSrc);
  // when the modal is opened autoplay it
  $('#myModal').on('shown.bs.modal', function (e) {
  // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#image").attr('src', $imageSrc  );
  })
  // reset the modal image
  $('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#image").attr('src','');
  })
  </script>
</html>
