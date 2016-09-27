<?php

// To display a hero banner used within a page/post/cpt

?>
<!-- Hero Banner -->
<div class="parallax hero-banner" style="background-image: url(
  <?php
   if(has_post_thumbnail()) {
     $thumb_url = the_post_thumbnail_url();
     echo $thumb_url;
   }
   else {
     echo get_stylesheet_directory_uri();
     echo "/images/placeholders/icor-building.jpg";
   }
  ?>
  );">
  <div class="hero-image scanLines">

  </div>
</div>
