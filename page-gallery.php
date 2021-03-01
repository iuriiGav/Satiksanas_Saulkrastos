<?php get_header(); 
include 'inc/backgorundImageAndGradient.php';
include 'inc/lightboxSquareGallery.php';
?>

<?php while(have_posts()): the_post(); ?>

<main class="page-gallery-main" style=<?php setBackgroundImage(true, null, 'page_gallery_background_image')?>>
    <div class="row">

        <h4 class="section-header text-color-light">
            GALLERY
        </h4>
<div class="col-md-8">
    <?php lightboxSquareGallery(false, 'col-12', 'gallery-page', '4', get_the_id())  ?>

</div>

<div class="col-md-4">
<div class="sidebar" style="background-color: green; margin-top: 500px; position: fixed; top: 0;">

  Sidebar placeholder
</div>
</div>
    </div>
   
    
    
</main>

<?php endwhile; ?>

<?php get_footer(); ?>