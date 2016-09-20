<?php

// Display of an individual events article - to be used within "the loop"

?>
<div class="events-item">
    <a href="<?php the_permalink();?>">
        <div class="events-img filter-grey">
            <img src="<?php
                 if(has_post_thumbnail()) {
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                        $thumb_url = $thumb_url_array[0];
                        echo $thumb_url;
                 }
                 else {
                     echo get_stylesheet_directory_uri();
                     echo "/images/placeholders/robot-footer.png";
                 }
                ?>" style="top: 0px;" />
        </div>
    </a>
    <div class="events-content">
        <p class="date">
            <?php echo get_the_date(); ?>
        </p>
        <h2><a href="<?php the_permalink();?>" /><?php the_title(); ?></a></h2>

        <p><?php the_excerpt(); ?></p>
        <div class="info-button">
            <a href="<?php the_permalink();?>">Read More</a>
        </div>
    </div>
</div><!-- End .events-item -->
