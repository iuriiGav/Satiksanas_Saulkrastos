<?php wp_footer(); ?>
<footer class="website-general-footer main-footer">


    <section class="sponsors d-flex justify-content-around logo-wrapper ">

        <?php
        // Check rows exists.
        $front_page_ID = get_option('page_on_front');

        if (have_rows('homepage__footer__sponsor_logos', $front_page_ID)) :

            // Loop through rows.
            while (have_rows('homepage__footer__sponsor_logos', $front_page_ID)) : the_row();

                $logo_image_ID = get_sub_field('image');
                $link_to_sponsor = !empty(get_sub_field('link')) ? get_sub_field('link') : '';

                $logo_img_src = wp_get_attachment_image_src($logo_image_ID, 'full'); ?>

                <a href="<?php echo $link_to_sponsor ?>" target="_blank">
                    <img src="<?php echo $logo_img_src[0] ?>" alt="" class="img-fluid sponsor-logo">

                </a>


        <?php
            endwhile;
        endif;




        ?>
    </section>

    <p class="rights-and-developer">all rights reserved © Satikšanās Saulkrastos Kamermūzikas festivāls <?php echo date('Y') ?> | created by <a href="mailto:iurii.gavryliuk@gmail.com">iurii gavryliuk</a> </p>

</footer>

</div><!-- .container-fluid -->
</body>

</html>