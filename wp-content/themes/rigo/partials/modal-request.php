<!--MODAL-->
<div id="quote-modal">
  <div class="col-md-12 modal-menu">
    <div class="top-venue-menu">
      <div class="close-animatedModal btn-close"> 
        <span class="glyphicon glyphicon-remove" style="color:white"></span>
        <i class="fas fa-times-circle"></i>
      </div>
    </div>
  </div>
  <div class="modal-content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="card logo large mx-auto pb-5 ">
            <a href="<?php echo get_permalink( get_page_by_path('home') ); ?>">
              <span class="card-img-top mx-auto d-none d-sm-block" id="bmw-logo"></span>
            </a>
          </div>
          <div class=" d-sm-none d-block">
              <div class="jumbotron text-center pt-4 pb-3 my-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['request']['request-img-banner'],'full')[0] ?>');"> </div>
             <br>
                <a  class='click-here color-dark' style="text-decoration: none !important;"href="tel:+3056624742">
                  <p class='h2'>Call now! </p>
                  <p class='h2'>305-662-4742</p>
                </a>
                <h5> to request more information and pricing</h5>
                <h5>or fill the following form: </h5>
          </div>
          <div class="text-center info d-none d-sm-block">
            <a style="text-decoration: none !important;"href="tel:+3056624742">
            <h5>Call now! </h5>
            <h5>305-662-4742</h5>
            </a>
            <h5> to request more information and pricing</h5>
            <h5>or fill the following form: </h5>
          </div>
        </div>
        <!-- FORM -->
        <div class="col-md-6">
            <?php gravity_form( 
                    $id_or_title = 3, 
                    $display_title = false, 
                    $display_description = false,
                    $display_inactive = false, 
                    $field_values = null, 
                    $ajax = false, 
                    $tabindex = 1, 
                    $echo = true 
                  ); ?>
        </div>
      </div>
    </div>            
  </div>
</div> 