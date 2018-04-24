<!-- CARD -->
    <div class="photo-person col-md-4 px-0" style="background-image: url('<?php echo wp_get_attachment_image_src( $args['about_us']['about_us-photo'],'full')[0] ?>');">
      <div class="label text-center py-4 px-auto">
        <?php echo $args["about_us"]["post_title"]; ?> / <?php echo $args['about_us']['about_us-position']; ?>
      </div>
    </div>
<!--  -->