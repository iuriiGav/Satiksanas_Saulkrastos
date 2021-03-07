<?php 
function setBackgroundImage($isDefaultGradient, $customGradient, $imageField, $page_id, $is_medium_cover) { ?>


"background-image: <?php echo $isDefaultGradient === true ? 'linear-gradient(180deg, #2C2929 0%, rgba(142, 140, 140, 0.72) 100%)' : $customGradient ?> , url(<?php echo wp_get_attachment_image_src(get_field($imageField, $page_id), $is_medium_cover ? 'mediumCover' : 'full')[0] ?>)";   
    

<?php } ?>


