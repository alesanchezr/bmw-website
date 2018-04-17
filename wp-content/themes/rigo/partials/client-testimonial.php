<?php  
$args = wpas_get_view_data();
// debug($args);
// debug(wp_get_attachment_image_src( $args['wp_query']['venue-img-layout']));
?>
<div class="container py-md-4">
  <div class="row">
    <div class="card-group text-center testimonial-client">
    <div class="row col-md-6  mx-auto ">
      <div class="col-md-12 col-2 center-vertical-div p-0 p-sm-2">
        <img class="mx-auto rounded-circle w-12 pb-0" src="<?php echo get_template_directory_uri(); ?>/public/img/person2.jpg" alt="Generic placeholder image">
      </div>
      <div class="col-md-12 col-10 ">
        <div class="card text-center">
          <div class="p-sm-4">
            <p class="card-text media-body">
              "My best recommandation is that if you are looking for a wedding veneus that first your budget Best Miami Wedding is a great place. They have great wedding packages according to your budget, lovely staff, and above all the staff are very professional".
            </p>
          </div>
          <div class="card-footer py-0">
            <p class="media-body">Lorena</p>
          </div>
        </div>
      </div>
    </div>
    <!--    -->
    <div class="row col-md-6  mx-auto ">
      <div class="col-md-12 col-2 center-vertical-div p-0 p-sm-2">
        <img class="mx-auto rounded-circle w-12 pb-0" src="<?php echo get_template_directory_uri(); ?>/public/img/person2.jpg" alt="Generic placeholder image">
      </div>
      <div class="col-md-12 col-10 ">
        <div class="card text-center">
          <div class="p-sm-4">
            <p class="card-text media-body">
              "We cannot be happiers with our decision to go with Best Miami Wedding. We selected the Club of Knights veneu because it was small and quaint and had everything we needed for the ceremony cocktail hour, and reception."
            </p>
          </div>
          <div class="card-footer py-0">
            <p class="media-body">Ivette</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  <div class="row  d-none d-sm-block">
      <div class="col-md-12 text-center">
        <p class="foot-client">Read more testimonial by <a class="click-here color-dark" href="../bmw-testimonials.html"> clickng here </a></p>
      </div>
    </div>
</div>

