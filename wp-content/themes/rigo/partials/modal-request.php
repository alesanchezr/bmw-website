<!--MODAL-->
<div id="quote-modal">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="card logo large mx-auto pb-5 d-none d-sm-block">
            <a href="<?php echo get_permalink( get_page_by_path('home') ); ?>">
              <span class="card-img-top mx-auto d-none d-sm-block" id="bmw-logo"></span>
            </a>
          </div>
          <div class="d-sm-none d-block text-center">
             <br>
                <a  class='click-here color-light' style="text-decoration: none !important;"href="tel:+3056624742">
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
        <div class="col-md-6 mb-4">
            <?php gravity_form( 
                    $id_or_title = 3, 
                    $display_title = false, 
                    $display_description = false,
                    $display_inactive = false, 
                    $field_values = null, 
                    $ajax = true, 
                    $tabindex = 1, 
                    $echo = true 
                  ); ?>
        </div>
      </div>
    </div>            
    </div>
  </div>
</div> 