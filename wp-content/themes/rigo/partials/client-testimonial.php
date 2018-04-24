<?php  
$args = wpas_get_view_data();
?>

<div class="container py-md-4">
  <div class="row">
    <div class="card-group text-center testimonial-client">
      <?php for ( $i= 0; $i< count($args['testimonials']); $i++ ){ ?>
        <div class="row col-md-6  mx-auto ">
          <div class='col-md-5'></div>
          <div class="col-md-2 col-2 center-vertical-div p-0 p-sm-2">
            <img class="mx-auto rounded-circle w-12 pb-0" src="<?php echo wp_get_attachment_image_src($args['testimonials'][$i]['testimonial-photo'],'full')[0] ?>" alt="Generic placeholder image">
          </div>
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
        <p class="foot-client">Read more testimonial by <a class="click-here color-dark" href=" https://bmw-website-caenavgu.c9users.io/testimonials/"> clickng here </a></p>
      </div>
    </div>
</div>
