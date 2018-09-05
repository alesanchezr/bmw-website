<?php 
$args = wpas_get_view_data();
// debug($args);
?>
<div class="men d-none d-sm-block fixed-top">
  <nav class="navbar navbar-expand-lg navbar-light mx-auto p-0 top-nav">
    <div class="container">
      <a class="navbar-brand d-none d-sm-inline-block" href="/">
        <span id="bmw-logo-dark" style="max-width: 150px; margin-left: 5px;margin-top: 6px;"></span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="nav nav-tabs container text-uppercase large navbar-nav" id="myTab" role="tablist">
          <li class="nav-item mt-2 p-0">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Pick your location</a>
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
    </div>
  </nav>
  <nav class="navbar navbar-dark mx-auto contact-navbar navbar-expand secondary-navbar"  >
    <div class="container">
        <ul class="nav nav-tabs text-uppercase navbar-nav ml-auto d-none d-sm-block mr-3">
          <li class="nav-item p-0 d-inline-block">
            <a id="phone-icon" class="nav-link text-right" href="tel:+1<?php echo get_option('phone_number'); ?>">+1<?php echo get_option('phone_number'); ?></a>
          </li>
          <li class="nav-item p-0 d-inline-block">
            <a href="#quote-modal" class="btn btn-success request-quote">Request a quote</a>
          </li>
        </ul>          
    </div>
  </nav>
  
  <div class="tab-content subnavbar" id="myTabContent">
    <div class="tab-pane menu-content fade container text-center p-3" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class="row m-4 pt-5">
        <div class="col-sm-2 ml-auto">
          <span id="menu-award" class="logo d-inline-block"></span>
        </div>
        <div class="col-sm-7">
          <h5> <strong>Pick from the most beautiful venue selection in Miami, classic and modern wedding venues appoved by Best Miami Weddings</strong> </h5>
        </div>
        <div class="col-sm-2 mr-auto">
          <span id="menu-award1" class="logo d-inline-block ml-2"></span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mt-3">
          <h5><strong>Unique Venues</strong></h5>
          <?php for ($x=0; $x< count($args['menu-venues']['unique']); $x++){ ?>
            <a class="click-here menu-hover" href="<?php echo get_permalink( $args['menu-venues']['unique'][$x]->ID )?>"> <li><?php echo $args['menu-venues']['unique'][$x]->post_title ?></li> </a>
          <?php } ?>
        </div>
        <div class="col-md-4 mt-3">
          <h5><strong>Garden Venues</strong> </h5>
          <?php for ($x=0; $x< count($args['menu-venues']['garden']); $x++){ ?>
            <a class="click-here menu-hover" href="<?php echo get_permalink( $args['menu-venues']['garden'][$x]->ID )?>"> <li><?php echo $args['menu-venues']['garden'][$x]->post_title ?></li> </a>
          <?php } ?>
        </div>
        
        <div class="col-md-4 mt-3">
          <h5><strong>Historical Venues</strong> </h5>
          <?php for ($x=0; $x< count($args['menu-venues']['historical']); $x++){ ?>
            <a class="click-here menu-hover" href="<?php echo get_permalink( $args['menu-venues']['historical'][$x]->ID )?>"> <li><?php echo $args['menu-venues']['historical'][$x]->post_title ?></li> </a>
          <?php } ?>
        </div>
        <div class="col-md-12">
          <div class="p-5">
            <a class="btn btw-l align-text-bottom" href="<?php echo get_permalink( get_page_by_path('wedding-venues-locations' ) ); ?>" role="button">View all venues</a><br>
          </div>
        </div>
      </div>
    </div>
    
    <div class="tab-pane menu-content fade text-center container p-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div class="row menu-list mt-5">
        <div class="col-sm-2 ml-auto mt-5">
          <span id="menu-award" class="logo d-inline-block"></span>
        </div>
        <div class="col-sm-5  mt-5">
          <h5><strong>Give only World-class to your guests, your wedding will make you shine</strong> </h5>
        </div>
        <div class="col-sm-2 mr-auto mt-5">
          <span id="menu-award2" class="logo d-inline-block ml-2"></span>
        </div>
      </div>
      <div class="row">
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
            <a class="btn btw-l align-text-bottom" href="<?php echo get_permalink( get_page_by_path('wedding-packages' ) ); ?>" role="button">View all packages</a><br>
          </div>
        </div>
      </div>
    </div>
    
    <div class="tab-pane menu-content fade  menu-aditional" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <div class="row sub-menu" >
        <div class="container sub-menu-wp">
          <ul class="nav container text-uppercase large"  role="tablist">
            <li class="inactiveLink nav-item d-none d-md-inline-block pr-0  ml-auto">
              <a class="" href="" style='letter-spacing: 2.6px;'>From our weddings...</a>
            </li>
            <?php wp_nav_menu( array('theme_location' => 'submenu_inspired', 'menu_class'=> 'nav submenu-nav',) ); ?>
        </div>
      </div>
      <div class="container">
        <div class="row text-center p-3">
          <div class="p-4 col-md-8 offset-md-2 mt-5">
            <h5><strong>Have a #BestMiamiWedding inspired from our blog...</strong> </h5>
          </div>
          <div class="col-md-4 mt-3">
            <h5><strong> Before the wedding</strong></h5>
            <a class="click-here color-dark menu-hover" href="https://blog.bestmiamiweddings.com/before-the-wedding/top-five-miami-wedding-venues/"> <li>Top Five Miami Wedding Venues</li></a>
            <a class="click-here color-dark menu-hover" href="https://blog.bestmiamiweddings.com/before-the-wedding/choose-catering-menu-for-wedding/"> <li>How tho Choose a Catering Menu of Your Weding in Miami</li></a>
            <a class="click-here color-dark menu-hover" href="https://blog.bestmiamiweddings.com/before-the-wedding/top-5-christian-churches-in-miami/"> <li>Top 5 Christian Churches in Miami</li></a>
            <a class="click-here color-dark menu-hover" href="https://blog.bestmiamiweddings.com/before-the-wedding/find-the-perfect-wedding-dress-color-just-for-you/"> <li>Find The Perfect Wedding Dress Color Just For You!</li></a>
          </div>
          
          <div class="col-md-4 mt-3">
            <h5><strong> During the wedding</strong></h5>
            <a class="click-here color-dark menu-hover" href="https://blog.bestmiamiweddings.com/during-the-wedding/aisle-runner-messages-of-love/"> <li>Aisle Runner: Messages Of Love</li></a>
            <a class="click-here color-dark menu-hover" href="https://blog.bestmiamiweddings.com/during-the-wedding/top-10-songs-to-play-at-your-wedding-this-2016/"> <li>Top 10 Songs To Play At Your Wedding</li></a>
            <a class="click-here color-dark menu-hover" href="https://blog.bestmiamiweddings.com/during-the-wedding/waffle-bar-party-for-a-wedding-in-miami/"> <li>Waffle Bar Party for a Wedding in Miami</li></a>
            <a class="click-here color-dark menu-hover" href="https://blog.bestmiamiweddings.com/during-the-wedding/why-every-wedding-in-miami-should-use-a-water-cooler-to-dispense-your-alcohol/"> <li>Why Every Miami Wedding Should Use A Water Cooler For The Alcohol</li></a>
          </div>
          
          <div class="col-md-4 mt-3">
            <h5><strong> After the wedding</strong></h5>
            <a class="click-here color-dark menu-hover" href="https://blog.bestmiamiweddings.com/after-the-wedding/top-10-honeymoon-destinations/"> <li>Top 10 Honeymoon Destination</li></a>
            <a class="click-here color-dark menu-hover" href="https://blog.bestmiamiweddings.com/wp-content/uploads/sites/2/2016/05/Madten.jpg"> <li>Party planninf: Flip Cup After-Party</li></a>
            <a class="click-here color-dark menu-hover" href="https://blog.bestmiamiweddings.com/after-the-wedding/wedding-checklist-after-your-wedding-day/"> <li>Wedding Checklist: After Your Wedding Day</li></a>
            <a class="click-here color-dark menu-hover" href="https://blog.bestmiamiweddings.com/after-the-wedding/the-best-honeymoon-destinations-for-the-next-year-on-a-budget/"> <li>Honewmoon Destinations on a Budget</li></a>
          </div>
          
          <div class="col-md-12">
            <div class="p-5">
              <a class="btn btw-l align-text-bottom" href="https://blog.bestmiamiweddings.com" role="button">Read our blog</a><br>
            </div>
          </div>
        </div>
      </div>
    </div>
      
    <div class="tab-pane menu-content fade text-center" id="about" role="tabpanel" aria-labelledby="about-tab">
      <div class="row sub-menu">
        <div class="sub-menu-wp container">
            <?php  wp_nav_menu( array(
              'theme_location' => 'menu_about_us',
              'menu_class'=> 'nav submenu-nav text-uppercase large',
             )); ?>
        </div>
      </div>
    </div>
    <!---->
  </div>
  
</div>
