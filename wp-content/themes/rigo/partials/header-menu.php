<?php 
$args = wpas_get_view_data();
// debug($args);
?>
<div class="men d-none d-sm-block">
  <nav class="navbar navbar-expand-lg menu-color navbar-light  mx-auto p-0"  >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="nav nav-tabs container text-uppercase large navbar-nav" id="myTab" role="tablist">
        <li class="nav-item mt-2 p-0">
          <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Pick your venue</a>
        </li>
        <li class="nav-item hidden-md-upp-3 mt-2 p-0">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Plan you Wedding</a>
        </li>
        <li class="nav-item d-lg-none mt-2 p-0">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Get inspired</a>
        </li>
        <li class="nav-item ml-auto d-none d-lg-block mt-2 p-0" >
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Get inspired</a>
        </li>
        <li class="nav-item mt-2 p-0">
          <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about"aria-selected="false">About us</a>
        </li>
        
      </ul>
    </div>
  </nav>
  
  <div class="tab-content subnavbar" id="myTabContent">
    <div class="tab-pane menu-content fade container text-center " id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class="row">
        <div class="p-4 col-md-8 offset-md-2">
          <h5> <strong>Pick from the most beautiful venue selection in Miami, classic and modern wedding venues appoved by Best Miami Weddings</strong> </h5>
        </div>
        <div class="col-md-4 mt-3">
          <h5><strong>Unique Venues</strong></h5>
          <?php for ($x=0; $x< count($args['menu-venues']['unique']); $x++){ ?>
            <a class="click-here color-dark menu-hover" href="<?php echo get_permalink( $args['menu-venues']['unique'][$x]->ID )?>"> <li><?php echo $args['menu-venues']['unique'][$x]->post_title ?></li> </a>
          <?php } ?>
        </div>
        <div class="col-md-4 mt-3">
          <h5><strong>Garden Venues</strong> </h5>
          <?php for ($x=0; $x< count($args['menu-venues']['garden']); $x++){ ?>
            <a class="click-here color-dark menu-hover" href="<?php echo get_permalink( $args['menu-venues']['garden'][$x]->ID )?>"> <li><?php echo $args['menu-venues']['garden'][$x]->post_title ?></li> </a>
          <?php } ?>
        </div>
        
        <div class="col-md-4 mt-3">
          <h5><strong>Historical Venues</strong> </h5>
          <?php for ($x=0; $x< count($args['menu-venues']['historical']); $x++){ ?>
            <a class="click-here color-dark menu-hover" href="<?php echo get_permalink( $args['menu-venues']['historical'][$x]->ID )?>"> <li><?php echo $args['menu-venues']['historical'][$x]->post_title ?></li> </a>
          <?php } ?>
        </div>
        <div class="col-md-12">
          <div class="p-5">
            <button class="btn btw-l align-text-bottom" href="<?php echo get_permalink( get_page_by_path('wedding-venues-locations' ) ); ?>" role="button">View all venues</button><br>
          </div>
        </div>
      </div>
    </div>
    
    <div class="tab-pane menu-content fade text-center container" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div class="row menu-list">
        <div class="p-4 col-md-8 offset-md-2">
          <h5><strong>Wedding CateringGive only World-class to your guests, your weddinf will make you shine</strong> </h5>
        </div>
        <div class="col-md-3 offset-md-3 mt-3">
          <h5><strong>Food & Beverage</strong> </h5>
          <?php wp_nav_menu( array('theme_location' => 'menu_food_beverage') ); ?>
        </div>
        <div class="col-md-3 mt-3">
          <h5><strong> Much more</strong></h5>
          <?php wp_nav_menu( array('theme_location' => 'menu_much_more') ); ?>
        </div>
        <div class="col-md-12">
          <div class="p-5">
            <button class="btn btw-l align-text-bottom" href="<?php echo get_permalink( get_page_by_path('wedding-venues-locations' ) ); ?>" role="button">View all venues</button><br>
          </div>
        </div>
      </div>
    </div>
    
    <div class="tab-pane menu-content fade  menu-aditional" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <div class="row sub-menu" >
        <div class="container sub-menu-wp">
          <ul class="nav container text-uppercase large "  role="tablist">
            <li class="inactiveLink nav-item d-none d-md-inline-block pr-0">
              <a class="" href="" style='letter-spacing: 2.6px;'>From our weddings...</a>
            </li>
          
            <?php wp_nav_menu( array('theme_location' => 'submenu_inspired', 'menu_class'=> 'nav submenu-nav',) ); ?>
          <!--  <li class="nav-item">-->
          <!--    <a class="nav-link" href="">Venues</a>-->
          <!--  </li>-->
          <!--  <li class="nav-item">-->
          <!--    <a class="nav-link" href="">Dress</a>-->
          <!--  </li>-->
          <!--  <li class="nav-item">-->
          <!--    <a class="nav-link" href="">Decor</a>-->
          <!--  </li>-->
          <!--  <li class="nav-item">-->
          <!--    <a class="nav-link" href="">Cuisine</a>-->
          <!--  </li>-->
          <!--  <li class="nav-item">-->
          <!--    <a class="nav-link" href="">Weddings</a>-->
          <!--  </li>-->
          <!--</ul>-->
          
        </div>
      </div>
      <div class="container">
        <div class="row text-center">
          <div class="p-4 col-md-8 offset-md-2">
            <h5><strong>Have a #BestMiamiWedding inspired from our blog...</strong> </h5>
          </div>
          <div class="col-md-4 mt-3">
            <h5><strong> Before the wedding</strong></h5>
            <a class="click-here color-dark menu-hover" href=""> <li>Top Five Miami Wedding Venues</li></a>
            <a class="click-here color-dark menu-hover" href=""> <li>How tho Choose a Catering Menu of Your Weding in Miami</li></a>
            <a class="click-here color-dark menu-hover" href=""> <li>Top 5 Christian Churches in Miami</li></a>
            <a class="click-here color-dark menu-hover" href=""> <li>Find The Perfect Wedding Dress Color Just For You!</li></a>
          </div>
          
          <div class="col-md-4 mt-3">
            <h5><strong> During the wedding</strong></h5>
            <a class="click-here color-dark menu-hover" href=""> <li>Aisle Runner: Messages Of Love</li></a>
            <a class="click-here color-dark menu-hover" href=""> <li>Top 10 Songs To Play At Your Wedding</li></a>
            <a class="click-here color-dark menu-hover" href=""> <li>Waffle Bar Party for a Wedding in Miami</li></a>
            <a class="click-here color-dark menu-hover" href=""> <li>Why Every Miami Wedding Should Use A Water Cooler For The Alcohol</li></a>
          </div>
          
          <div class="col-md-4 mt-3">
            <h5><strong> After the wedding</strong></h5>
            <a class="click-here color-dark menu-hover" href=""> <li>Top 10 Honeymoon Destination</li></a>
            <a class="click-here color-dark menu-hover" href=""> <li>Party planninf: Flip Cup After-Party</li></a>
            <a class="click-here color-dark menu-hover" href=""> <li>Wedding Checklist: After Your Wedding Day</li></a>
            <a class="click-here color-dark menu-hover" href=""> <li>Honewmoon Destinations on a Budget</li></a>
          </div>
          
          <div class="col-md-12">
            <div class="p-5">
              <button class="btn btw-l align-text-bottom" href="<?php echo get_permalink( get_page_by_path('wedding-venues-locations' ) ); ?>" role="button">View all venues</button><br>
            </div>
          </div>
        </div>
      </div>
    </div>
      
    <div class="tab-pane menu-content fade text-center" id="about" role="tabpanel" aria-labelledby="about-tab">
      <div class="row sub-menu" >
        <div class="text-uppercase large sub-menu-wp mx-auto">
        <?php  wp_nav_menu( array(
          'theme_location' => 'menu_about_us',
          'menu_class'=> 'nav submenu-nav',
        // 'items_wrap'=>'<ul>%3$s</ul>',
         )); ?>
          <!--<ul class=" nav "  role="tablist">-->
              
          <!--  <li class="nav-item" style="margin-left: 20px;">-->
          <!--    <a class="nav-link" href="">About Us</a>-->
          <!--  </li>-->
            <!--<li class="nav-item">-->
            <!--  <a class="nav-link" href="">Press & Awards</a>-->
            <!--</li>-->
            <!--<li class="nav-item">-->
            <!--  <a class="nav-link" href="">Testimonials</a>-->
            <!--</li>-->
            <!--<li class="nav-item">-->
            <!--  <a class="nav-link" href="">Contact Us</a>-->
            <!--</li>-->
          <!--</ul>-->
        </div>
      </div>
    </div>
    <!---->
  </div>
  
</div>
