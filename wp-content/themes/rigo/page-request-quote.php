<?php 
 /* Template Name: Wedding Request Quote */
 $args = wpas_get_view_data();
 get_header('small'); 
?>
<body class="body-request" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['request']['request-img-banner'],'full')[0] ?>)">
  <!--<span require-file="./components/menu-others.html"></span>-->
  <?php get_template_part('partials/menu','others'); ?>
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
          <div class="form-inline-block  d-none d-sm-block">
            <label class=" mb-0 " for="dayEven">Day of event</label>
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
  <div class="mt-2">
    <span class="d-sm-none d-block" require-file="./components/footer-social-media.html"></span>
  </div>

</body>
    <!-- SCRIPT -->
    <script type="text/javascript" src="/dist/bundle.js?v2"></script>
    <!--  -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>


<!--</head>-->
<!--<body class="body-request" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['request']['request-img-banner'],'full')[0] ?>')">-->
<!--<div class="container">-->
<!--  <div class="row">-->
<!--    <div class="col-md-6 ">-->
<!--      <div class="card logo large mx-auto pb-5 ">-->
<!--          <span class="card-img-top mx-auto d-none d-sm-block" id="bmw-logo"></span>-->

<!--      </div>-->
<!--      <div class=" d-sm-none d-block">-->
<!--          <div class="jumbotron text-center pt-4 pb-3 my-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['request']['request-img-banner'],'full')[0] ?>')" </div>-->
<!--         <br>-->
<!--            <h2>Call now! </h2>-->
<!--            <h1><a style="text-decoration: none !important;"href="tel:+3056624742">305-662-4742</a></h1>-->
<!--            <h5> to request more information and pricing</h5>-->
<!--            <h5>or fill the following form: </h5>-->
<!--      </div>-->
<!--      <div class="text-center info d-none d-sm-block">-->

<!--        <h5>Call now! </h5>-->
<!--        <h5>305-662-4742</h5>-->
<!--        <h5> to request more information and pricing</h5>-->
<!--        <h5>or fill the following form: </h5>-->
<!--      </div>-->
<!--    </div>-->
    <!-- FORM -->
<!--    <div class="col-md-6">-->
<!--      <form>-->
<!--        <div class="form-inline-block">-->
<!--          <label class="mb-0" for="fullName">Full Name</label>-->
<!--          <input type="fullName" class="form-control mt-0 mb-2" id="" placeholder="Full Name">-->
<!--        </div>-->
<!--        <div class="form-inline-block">-->
<!--          <label class=" mb-0" for="phoneNumber">Phone Number</label>-->
<!--          <input type="phoneNumber" class="form-control mt-0 mb-2" id="" placeholder="Phone number">-->
<!--        </div>-->
<!--        <div class="form-inline-block">-->
<!--          <label class=" mb-0" for="email">Email</label>-->
<!--          <input type="email" class="form-control mt-0 mb-2" id="" placeholder="Email">-->
<!--        </div>-->
<!--        <div class="form-inline-block  d-none d-sm-block">-->
<!--          <label class=" mb-0 " for="dayEven">Day of event</label>-->
<!--          <input type="dayEven" class="form-control mt-0 mb-2" id="" placeholder="Day of event">-->
<!--        </div>-->
<!--        <div class="form-inline-block mb-4">-->
<!--          <label  class=" mb-0" for="observation">Observation</label>-->
<!--          <textarea class="form-control mt-0 mb-0" id="observation" placeholder="Observation" rows="6"></textarea>-->
<!--          <a>0 de 60 max character.</a>-->
<!--        </div>-->
<!--        <button  class="btn form-control" type="button" name="button">Send</button>-->
<!--      </form>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!--<div class="mt-2 d-sm-none d-block">-->
<?php/* get_template_part('partials/footer','social-media'); ?>-->
<!--</div>-->
<!--</body>-->
<!---->
<!--<?php get_footer('clean'); ?>-->


