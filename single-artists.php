<?php get_header(); ?>



<?php while (have_posts()) : the_post(); ?>


<main class="artist-post" style="background: linear-gradient(180deg, #2C2929 0%, rgba(142, 140, 140, 0.72) 100%), url(<?php echo esc_url(wp_get_attachment_image_src(get_field('background_image_for_post_about_artist', 11), 'full')[0])  ?>);   background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;">

<section class="artist">

<div class="row">
<div class="col-md-6 artist-photo ">
<img class="img-fluid" src="<?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'mediumSize')?>">
<div class="concert-card concert-card--narrow mb-5  align-content-center justify-content-around">
                        <div class="row flex-wrap align-items-center  w-100">
                            <div class="col-md-2 col-6 concert-date">
                                <h4 class="date-number">7</h4>
                                <h5 class="date-month">augusts</h5>
                            </div>
                            <div class="col-md-5 text-center d-flex order-3 order-md-2   justify-content-center concert-program">
                                <p class="mb-0">Concert program name here</p>
                            </div>
                            <div class="col-md-2 col-6 order-2 order-md-3 d-flex justify-content-center concert-time">
                                <h3 class="mb-0">16:00</h3>
                            </div>

                         
                            <div class="col-md-3 d-flex order-5 justify-content-center concert-action-btn">
                                <button class="btn btn-primary-ig btn-lg w-100">get tickets</button>
                            </div>
                        </div>
                    </div>
</div>
<div class="col-md-6 artist-bio offset-md-6">
    <h1 class="artist-name-title">
        <?php the_title() ?> <span class="instrument">(<?php esc_html_e(get_field('post_artist_artist_instrument'), 'satiksanos-saulkrastos') ?>)</span>
    </h1>
<?php echo the_content(); ?>
</div>
</div>

</section>


</main>


<?php endwhile; ?>

<!-- <h5 style='color: red; font-style: italic; margin-top:300px'> <?php echo 'this is from ' . basename(__FILE__); ?></h5> -->
<?php get_footer(); ?>
