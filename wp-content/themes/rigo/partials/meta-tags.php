<?php $args = wpas_get_view_data(); ?>
<meta http-equiv="content-language" content="es">
<link rel="alternate" href="https://bestmiamiweddings.com/" hreflang="en"/>
<?php if(is_page('gallery')){ ?>
<meta name="description" content="<?php echo get_the_title($args['venue']['ID']) ?> Gallery Pictures and Photos: <?php echo $args['venue']['venue-description'] ?>">
<?php } ?>
