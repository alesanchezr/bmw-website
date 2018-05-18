<?php  
$args = wpas_get_view_data();
// debug($args["wp_query"]->post_title);
?>
<!DOCTYPE html>
<html>
 <head>
 <?php get_template_part('partials/script','tagmanager-head'); ?>
 <title><?php wp_title(''); ?></title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
 <?php  wp_head(); ?>
</head>
<body>
    <?php get_template_part('partials/script','tagmanager-body'); ?>
 <nav class="navbar navbar-dark mx-auto contact-navbar navbar-expand"  >
    <div class="container">
        <ul class="nav nav-tabs text-uppercase navbar-nav mr-auto d-none d-sm-block">
          <li class="nav-item p-0">
            <a class="nav-link" href="/">Home</a>
          </li>
        </ul>          
        <ul class="nav nav-tabs text-uppercase ml-auto navbar-nav">
          <li class="nav-item p-0">
            <a class="nav-link text-right" href="#">Contact us:</a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link text-right" href="<?php echo get_permalink( get_page_by_path('contact-us' ) ); ?>">Email</a>
          </li>
          <li class="nav-item p-0">
            <a id="phone-icon" class="nav-link text-right" href="tel:+13056624742">+1 305.6624742</a>
          </li>
        </ul>          
    </div>
</nav>
 <?php get_template_part('partials/header','menu'); ?>
