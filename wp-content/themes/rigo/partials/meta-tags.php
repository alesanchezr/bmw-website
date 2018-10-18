<?php $args = wpas_get_view_data(); ?>
<?php if(is_page('gallery')){ ?>
<meta name="description" content="<?php echo get_the_title($args['venue']['ID']) ?> Gallery Pictures and Photos: <?php echo $args['venue']['venue-description'] ?>">
<?php } ?>
