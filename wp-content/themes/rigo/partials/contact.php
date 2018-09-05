<div class="body-request contact mt-5">
  <div class="container">
  <div class="row">
    <div class="col-md-6 text-center center-vertical-div">
        <h5>Call now! </h5>
        <h5 class="phone-number"><?php echo get_option('phone_number'); ?></h5>
        <h5> to request more information and pricing</h5>
        <h5>or fill the following form: </h5>
    </div>
    <!-- FORM -->
    <div class="col-md-6 pr-5 body-request mt-1">
      <form>
        <div class="form-inline-block">
          <label class="mt-2 mb-0" for="fullName">Full Name</label>
          <input type="fullName" class="form-control mt-0 mb-2" id="" placeholder="Full Name">
        </div>
        <div class="form-inline-block">
          <label class="mt-2 mb-0" for="phoneNumber">Phone Number</label>
          <input type="phoneNumber" class="form-control mt-0 mb-2" id="" placeholder="Phone number">
        </div>
        <div class="form-inline-block mb-4">
          <label class="mt-2 mb-0" for="email">Email</label>
          <input type="email" class="form-control mt-0 mb-2" id="" placeholder="Email">
        </div>
        <button  class="btn form-control mb-4" type="button" name="button">Request Pricing and PDF</button>
      </form>
    </div>
  </div>
</div>
