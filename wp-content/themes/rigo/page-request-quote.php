<?php  wp_head('small'); ?>
</head>
<body class="body-request" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/request-2.jpg')">
<div class="container">
  <div class="row">
    <div class="col-md-6 ">
      <div class="card logo large mx-auto pb-5 ">
          <span class="card-img-top mx-auto d-none d-sm-block" id="bmw-logo"></span>

      </div>
      <div class=" d-sm-none d-block">
          <div class="jumbotron text-center pt-4 pb-3 my-0" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/package-banner-1.jpg');"> </div>
         <br>
            <h2>Call now! </h2>
            <h1>305-662-4742</h1>
            <h5> to request more information and pricing</h5>
            <h5>or fill the following form: </h5>
      </div>
      <div class="text-center info d-none d-sm-block">

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
<div class="mt-2 d-sm-none d-block">
  <?php get_template_part('partials/footer','social-media'); ?>
</div>
</body>
<!---->
<?php get_footer('clean'); ?>