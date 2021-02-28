<?php function lightboxSquareGallery($contentBefore ,$col_size, $custom_class, $wrapper_cols, $gallery_id) { ?>


<div class="<?php echo $col_size?> <?php echo $custom_class?>">

<?php if($contentBefore) : ?>   
     <h2 class="section-header text-color-light mb-5 text-center">
                        <?php echo $contentBefore ?>
                    </h2>

                    <?php endif; ?>

<ul class="gallery-images">
<div class="gallery-wrapper gallery-wrapper--<?php echo $wrapper_cols ?>">
    <?php

    $gallery = get_post_gallery($gallery_id, false);
    $gallery_img_ids = explode(',', $gallery['ids']);
    foreach ($gallery_img_ids as $id) :
        $image = wp_get_attachment_image_src($id,  'square');
        $imageLg =   wp_get_attachment_image_src($id,  'full');
    ?>
        <div class="gallery-container">
            <div class="gallery-item">

                <li class="image">
                    <a href="<?php echo $imageLg[0] ?>" data-lightbox="gallery">

                        <img class="about-us-gallery-img" src="<?php echo $image[0] ?>" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', TRUE); ?>">

                    </a>

                </li>
            </div>
        </div>

    <?php
    endforeach; ?>


</div><!-- .gallery-wrapper -->
</ul>

</div>

<?php } ?>