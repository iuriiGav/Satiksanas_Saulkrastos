<?php 
function setBackgroundImage($isDefaultGradient, $customGradient, $imageField, $page_id) { ?>


"background: <?php echo $isDefaultGradient === true ? 'linear-gradient(180deg, #2C2929 0%, rgba(142, 140, 140, 0.72) 100%)' : $customGradient ?> , url(<?php echo wp_get_attachment_image_src(get_field($imageField, $page_id), 'full')[0] ?>);   background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;"

<?php } ?>


