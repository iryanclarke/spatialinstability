<?php

// To display a hero banner used within a page/post/cpt

?>
<!-- Hero Banner -->
<div class="parallax hero-banner" style="background-image: url(
  <?php
   if(has_post_thumbnail()) {
      $thumb_id = get_post_thumbnail_id();
      $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
      $thumb_url = $thumb_url_array[0];
      echo $thumb_url;
   }
   else {
     echo get_stylesheet_directory_uri();
     echo "/images/placeholders/spatialinstability-building.jpg";
   }
  ?>
  ">
  <div class="hero-image scanLines">

  </div>
</div>
<div class="hero-sub-banner">
  <div class="sub-text">
    <h1><?php the_title(); ?></h1>
  </div>
</div>
