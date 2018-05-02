<?php 
$args = wpas_get_view_data();
// debug($args);
?>
<div class="men-mobile d-sm-none d-block">
<nav class="navbar navbar-expand-lg navbar-light  mx-auto p-0"  >
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".homeMenu" aria-controls="homeMenu" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>


  </button>
   <div class="logo-mid" >
     <span class=" logo-mobile-white" id="bmw-logo-white-alone"></span>


  </div>
  <div>
<button class="navbar-toggler collapse homeMenu" type="button" data-toggle="collapse" data-target=".homeMenu" aria-controls="homeMenu" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-times"></i>


  </button>
  </div>

  <div class="collapse navbar-collapse menu-color homeMenu" id="homeMenu">

     <ul class="nav nav-tabs container text-uppercase large navbar-nav  " id="myTab" role="tablist">

      <li class="nav-item p-2 ">
        <a class="nav-link"  href="<?php echo get_permalink( get_page_by_path('home' ) ); ?>">Home</a>
        <hr class="m-0">
      </li>
      <li class="nav-item p-2">
        <a class="nav-link" href="<?php echo get_permalink( get_page_by_path('wedding-venues-locations' ) ); ?>">Miami Wedding Venue </a>

        <hr class="m-0">

      </li>
      <li class="nav-item p-2 " >
        <a class="nav-link " href="<?php echo get_permalink( get_page_by_path('wedding-packages' ) ); ?>">Miami Wedding Packages</a>
        <hr class="m-0">

      </li>

      <li class="nav-item p-2 ">
        <a class="nav-link" href="https://blog.bestmiamiweddings.com/">The Wedding Blog</a>
        <hr class="m-0">

      </li>
    </ul>
  </div>


</nav>


</div>
