<?php
$args = wpas_get_view_data();
$landingClass = $args['wp_query']['category-template'];
get_header('small');
?>
<body class="category-landing <?php echo $landingClass ?>">
<!--MENU MOBILE-->
<div class="container jumbo" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['background-banner'],'full')[0] ?>');">
  <div class="row">
    <div class="col-4 col-lg-6 d-none d-md-block">
      <a class="brand" href="/">
        <span id="bmw-logo-dark" style="max-width: 150px; margin-left: 5px;margin-top: 6px;"></span>
      </a>
    </div>
    <div class="col-12 col-lg-6 right-side">
      <h1><?php echo $args['wp_query']['category_h1'];  ?></h1>
      <h2 class="mb-5"><?php echo $args['wp_query']['category_h2'];  ?></h2>
      <div class="row mt-5">
        <div class="col-md-5 call-now">
          <p class="m-0" >Call now!</p>
          <a class="phone-number" href="tel:+1<?php echo get_option('phone_number'); ?>"><?php echo get_option('phone_number'); ?></a>
        </div>
        <div class="col-md-7 p-3">
          <!--<h2><?php echo $args['wp_query']['description'];  ?></h2>-->
          <p>To request more information and pricing, or fill the following form:</p>
        </div>
      </div>
      <div class="form-content text-light mb-5">
        <?php gravity_form( 
          $id_or_title = get_option('single_planners_form_id'), 
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

<div class="d-sm-none d-block text-center">
  <p class="p-4"><?php echo $args['wp_query']['description'];  ?></p>
</div>
<!-- CARD -->
<section class="section-venues">
  <div class="card-deck text-sm-center container mx-auto"> 
    <?php for ($x=0; $x< count($args['items']); $x++){ ?>
      <div class="row venue-row col-md-4  mx-auto p-1">
        <div class="col-md-12 col-4 p-0 m-0 center-vertical-div hover-effect">
          <a href="<?php echo get_permalink( $args['items'][$x]["id"] )?>">
            <div class="card-img-top venue-thumb" style="background-image: url(<?php echo $args['items'][$x]['thumbnail'] ?>);"></div>
          </a>
        </div>
        <a class="color-dark" href="<?php echo get_permalink( $args['items'][$x]["id"] )?>">
          <div class="col-md-12 col-8">
            <div class="card text-sm-center">
              <div class="card-body px-0 px-sm-2 ">
                <h5 class="card-title"><?php echo $args['items'][$x]["post_title"]; ?></h5>
                <p class="card-text"><?php echo (empty($args['items'][$x]["address"])) ? '': $args['items'][$x]["address"]; ?></p>
                <hr class="d-sm-none d-block">
              </div>
              <div class="card-footer d-none d-sm-block">
                <a href="<?php echo get_permalink( $args['items'][$x]["id"] )?>"><small class=" click-here">Read more</small></a>
              </div>
            </div>
          </div>
        </a>
      </div>
    <?php  }; ?>
  </div>
</section>
  <!--    -->
<!-- AWARDA RECOGNITION -->
<?php get_template_part('partials/awards','recognition'); ?>
<!-- FOOTER FULL -->
<?php get_footer(); ?>