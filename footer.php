<?php wp_footer(); ?>     
<footer class="website-general-footer main-footer">


<section class="sponsors d-flex justify-content-around logo-wrapper ">



<?php

$logos = get_post_gallery(65, false);   
$logo_ids = explode(',', $logos['ids']);



foreach ($logo_ids as $id) :
    $logo = wp_get_attachment_image_src($id, ''); ?>

    <a href="">
        <img src="<?php echo $logo[0] ?>" alt="" class="img-fluid sponsor-logo">

    </a>


<?php endforeach; ?>
</section>

<p class="rights-and-developer">all rights reserved © Satikšanās Saulkrastos Kamermūzikas festivāls <?php echo date('Y') ?> | created by <a href="mailto:iurii.gavryliuk@gmail.com">iurii gavryliuk</a> </p>

</footer>

</div><!-- .container-fluid -->
</body>
</html>