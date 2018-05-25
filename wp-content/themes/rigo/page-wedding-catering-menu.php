<?php
/* Template Name: Wedding Catering */
$args = wpas_get_view_data();
get_header();
?>
<!--MENU MOBILE-->
<?php get_template_part('partials/menu','others'); ?>
<!-- JUMBOTROM -->
  <div class="parent">
      <div class="jumbotron text-center pt-4 pb-3 my-0" style="background-image: url('<?php echo wp_get_attachment_image_src($args['catering']['catering-img-banner'],'full')[0] ?>');">
          <div class="card logo medium mx-auto">
              <span class="card-img-top mx-auto" id="bmw-logo"></span>
          </div>
          <div class="jb-text d-block">
            <h1 class="my-0">Wedding Miami Packages for Miami</h1>
            <p class="p-2 mb-0">Pick a packages and start customizing your own wedding</p>
            <a href="#quote-modal" class="request-quote"><button class="btn btw-l align-text-bottom" role="button">Get a fast a quote</button></a><br>
            <p class="py-3 h2 call-now" >or call now! <a class="phone-number" href="tel:+1<?php echo get_option('phone_number'); ?>"><?php echo get_option('phone_number'); ?></a></p>
          </div>
      </div>
  </div>
<!-- END JUMBOTROM -->
<nav class="navbar navbar-expand-lg menu-color navbar-light  mx-auto p-0"  >
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
     <ul class="nav nav-tabs container text-uppercase large navbar-nav   " id="tabContent" role="tablist">
      <li class="nav-item  ml-auto ">
        <a class="nav-link active show" id="starters-tabc" data-toggle="tab" href="#starters" role="tab" aria-controls="starters" aria-selected="false">Starters</a>
      </li>
      <li class="nav-item m-0">
        <a class="nav-link" id="main-tabc" data-toggle="tab" href="#main" role="tab" aria-controls="main" aria-selected="false">Main</a>
      </li>
      <li class="nav-item mr-auto">
        <a class="nav-link " id="sides-tabc" data-toggle="tab" href="#sides" role="tab" aria-controls="sides" aria-selected="false">Sides</a>
      </li>
    </ul>
  </div>
</nav>

  <div class="tab-content" id="myTabContent">
    <!--starters-->
      <div class="tab-pane fade container text-center active show" id="starters" role="tabpanel" aria-labelledby="starters-tabc">
        <div class="row p-4">
            <div class="col-md-6 mt-3"><?php echo $args['catering']['catering-starters-left'] ?></div>
            <div class="col-md-6 mt-3"><?php echo $args['catering']['catering-starters-right'] ?></div>
        </div>
      </div>
      <!--main-->
      <div class="tab-pane fade text-center container" id="main" role="tabpanel" aria-labelledby="main-tabc">
        <div class="row">
            <div class="col-md-6 mt-3"><?php echo $args['catering']['catering-main-left'] ?></div>
            <div class="col-md-6 mt-3"><?php echo $args['catering']['catering-main-right'] ?></div>
            <div class="col-md-12">
                <div class="p-5">
                    <a href="<?php echo get_permalink( get_page_by_path('wedding-venues-locations') ); ?>"><button class="btn btw-l align-text-bottom" href="./page.html" role="button">View all venues</button></a><br>
                </div>
            </div>
        </div>
      </div>
      <!--sides-->
      <div class="tab-pane fade  menu-aditional" id="sides" role="tabpanel" aria-labelledby="sides-tabc">
        <div class="container">
          <div class="row text-center">
                <div class="col-md-6 mt-3"><?php echo $args['catering']['catering-sides-left'] ?></div>
                <div class="col-md-6 mt-3"><?php echo $args['catering']['catering-sides-right'] ?></div>
          </div>
        </div>
      </div>
      <!---->
    </div>
<!-- FOOTER FULL -->
  <?php get_footer('small'); ?>