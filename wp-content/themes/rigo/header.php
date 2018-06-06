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
    <?php get_template_part('partials/header','menu'); ?>
