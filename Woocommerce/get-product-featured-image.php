<?php 

  //Inside the post loop
   $image = wp_get_attachment_image_src(get_post_thumbnail_id($loop->post->ID), 'single-post-thumbnail');
?>

  <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ">