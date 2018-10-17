<?php  
$args = wpas_get_view_data();
?>

<div class="container py-md-4">
  <div class="row">
    <div class="card-group text-center testimonial-client">
      <?php for ( $i= 0; $i< count($args['testimonials']); $i++ ){ ?>
        <div class="row col-md-6  mx-auto ">
          <div class='col-md-5'></div>
          <div class="col-md-12 col-10 ">
            <div class="card text-center">
              <div class="p-sm-4">
                <p class="card-text media-body">
                  <?php echo $args['testimonials'][$i]['testimonial-description'] ?>
                </p>
              </div>
              <div class="card-footer py-0">
                <p class="media-body"><?php echo $args['testimonials'][$i]["post_title"]; ?></p>
              </div>
            </div>
          </div>
        </div>
      <!--    -->
      <?php }; ?>
    </div>
  </div>
  <div class="row  d-none d-sm-block">
      <div class="col-md-12 text-center">
        <p class="foot-client">Read more testimonial by <a class="click-here color-dark" href="<?php echo get_permalink( get_page_by_path('testimonials' ) ); ?>"> click here </a></p>
      </div>
    </div>
</div>
