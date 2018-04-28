<?php 
 /* Template Name: Wedding Home */
 $args = wpas_get_view_data();
// debug($args);
 get_header('small'); 
 ?>
<?php get_template_part('partials/menu-home','others'); ?>
  <!-- JUMBOTROM -->
  <div class="parent">
    <div class="jumbotron jb-large text-center" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['home']['home-img-banner'],'full')[0] ?>');">
      <div class="card logo medium mx-auto">
        <span class="card-img-top mx-auto" id="bmw-logo"></span>
      </div>
      <div class="jb-button py-5">
        <button class="btn btw-l align-text-bottom d-block mx-auto mb-4" role="button" data-toggle="modal" data-target="#openModal">Request a quote</button>
          
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Launch demo modal
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <div class="modal-body">
                  ...
                </div>
              </div>
            </div>
          </div>

      
      </div>

        
        
        <a class="d-none d-sm-block" href="#services"><span class="logo xsmall" id="arrow-down"></span></a>
      </div>
    </div>
  </div>
  <!-- -->
  <div class="row subtitle-bar py-3">
    <div id="services" class="col-md-12 text-center padding-all">
      <h2>Our services</h2>
    </div>
  </div>
  <!-- CARD GROUP -->
  <div class="home card-group">
    <div class="card">
      <div class="img mx-md-0 mx-3" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['home']['home-img-venues'],'full')[0] ?>;"></div>
      <div class="card-body text-center">
        <div class="card-middle-button">
          <p class="card-title h7">Wedding Venues</p>
          <a href="./bmw-wedding-veneus.html"><button src="./bmw-wedding-veneus.html" type="button" class="btn btw-m">Tour the venues</button></a>
        </div>
        <div class="col-md-8 mx-auto text-center">
          <p class="card-text pt-md-4 pb-md-5">Picking date should be the first step of every wedding, that's why the first things you should do is booking your venue on a specific date. We have a selection of more then 25 spectacular locations.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="img mx-md-0 mx-3" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['home']['home-img-packages'],'full')[0] ?>"></div>
      <div class="card-body text-center">
        <div class="card-middle-button">
          <p class="card-title h7">Wedding Packages</p>
          <a href="./bmw-wedding-packages.html"><button type="button" class="btn btw-m">Review our wedding packages</button></a>
        </div>
        <div class="col-md-8 mx-auto text-center">
          <p class="card-text pt-md-4 pb-md-5">Choosing a wedding packages is the best way to get an aproximate budget, once you have a budget you can start customizing everythings to make it your way.</p>
          <div class="container">
          <hr class=" d-sm-none d-block">
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- AWARDA RECOGNITION -->
  <?php get_template_part('partials/awards','recognition'); ?>
  <!-- JUMBOTROM -->
  <div class="jumbotron jb-award jumbotron-cover d-none d-sm-block py-4 px-auto mb-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['home']['home-img-banner-2'],'full')[0] ?>');">
    <div class="col-md-6 text-center ">
      <span class="logo medium-dark my-auto" id="bmw-logo-dark"></span>
      <p class=" col-md-10 my-0 mx-auto px-sm-5 pb-sm-3">This is your opportunity to trusly share and celebrate the beginningfo your journey. Let us take the work out of wedding planning and put the fun into your life...for a lifetime of memories.</p>
      <div class="col-md-12 mt-3">
        <span class="logo small" id="wedding-wire-point-b"></span>
        <span class="logo small" id="lwpi-b"></span>
        <span class="logo small" id="wedding-wire-awards-b"></span>
      </div>
    </div>
  </div>
  <!--  -->
  <div class="row subtitle-bar py-sm-3">
    <div class="col-md-12 text-center padding-all">
      <h2>Client's Testimonials</h2>
      <br class="d-sm-none d-block">
    </div>
  </div>
  <!-- CLIENT TESTIMONIALS -->
  <?php get_template_part('partials/client','testimonial'); ?>
  <!-- MODAL -->
  <div id="openModal" class="modalDialog">
    <div class="body-request p-5" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/request-2.jpg')">
      <a href="#close" title="Close" class="close"><i class="fas fa-times " style="color:#ffffff;"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <div class="card logo large mx-auto pb-5">
                <span class="card-img-top mx-auto" id="bmw-logo"></span>
            </div>
            <div class="text-center info">
              <h5>Call now! </h5>
              <h5>305-662-4742</h5>
              <h5> to request more information and pricing</h5>
              <h5>or fill the following form: </h5>
            </div>
          </div>
          <!-- FORM -->
          <div class="col-md-6">
            <form>
              <div class="form-inline-block">
                <label class="mb-0" for="fullName">Full Name</label>
                <input type="fullName" class="form-control mt-0 mb-2" id="" placeholder="Full Name">
              </div>
              <div class="form-inline-block">
                <label class=" mb-0" for="phoneNumber">Phone Number</label>
                <input type="phoneNumber" class="form-control mt-0 mb-2" id="" placeholder="Phone number">
              </div>
              <div class="form-inline-block">
                <label class=" mb-0" for="email">Email</label>
                <input type="email" class="form-control mt-0 mb-2" id="" placeholder="Email">
              </div>
              <div class="form-inline-block">
                <label class=" mb-0" for="dayEven">Day of event</label>
                <input type="dayEven" class="form-control mt-0 mb-2" id="" placeholder="Day of event">
              </div>
              <div class="form-inline-block mb-4">
                <label  class=" mb-0" for="observation">Observation</label>
                <textarea class="form-control mt-0 mb-0" id="observation" placeholder="Observation" rows="6"></textarea>
                <a>0 de 60 max character.</a>
              </div>
              <button  class="btn form-control" type="button" name="button">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- FOOTER FULL -->
  <?php get_footer(); ?>
  </html>