<?php  
$args = wpas_get_view_data();
// debug($args["wp_query"]->post_title);
?>
<!DOCTYPE html>
<html>
 <head>
 <title><?php wp_title(''); ?></title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <?php  wp_head(); ?>
</head>
<body>
 <?php get_template_part('partials/header','menu'); ?>
