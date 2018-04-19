<?php  
  $args = wpas_get_view_data();
  // debug($args);
?>
  <div class="card p-5">
    <div class="card-body text-center card-content">
      <p>
        <img class = "img-fluid mounted-image" src = "<?php echo wp_get_attachment_image_src( $args['testimonial']['testimonial-photo'],'full')[0]?>" alt="Image">
      </p>
      <p class="card-text"> <?php echo $args['testimonial']['testimonial-description'] ?> </p>
      <p> <?php echo $args["testimonial"]["post_title"]?> </p>
    </div>
  </div>