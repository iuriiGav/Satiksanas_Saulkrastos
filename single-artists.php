<?php get_header(); ?>



<?php while (have_posts()) : the_post(); ?>

<?php 
$fullname = get_the_title();
$firstname = explode(' ', trim($fullname))[0];

  echo '<pre>';
 var_dump($firstname);
  echo '</pre>';
?>

    <main class="artist-post" style="background: linear-gradient(180deg, #2C2929 0%, rgba(142, 140, 140, 0.72) 100%), url(<?php echo esc_url(wp_get_attachment_image_src(get_field('background_image_for_post_about_artist', 11), 'full')[0])  ?>);   background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;">

        <section class="artist">
            <div class="row">


                <div class="col-md-6 artist-photo ">
                    <h1 class="artist-name-title artist-name-title--mobile text-color-light text-font-secondary text-xxl ">
                        <?php the_title() ?> <span class="instrument">(<?php esc_html_e(get_field('post_artist_artist_instrument'), 'satiksanos-saulkrastos') ?>)</span>
                    </h1>

                  
                    <img class="img-fluid" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'square')[0] ?>">

                    <div class="artists-concert-in-artist-page--desctop">

                        <h3 class="listen-artist-on-concert text-color-light text-md-small text-font-secondary">
                            Listen to <?php echo esc_html($firstname, 'satiksanos-saulkrastos') ?> on:
                        </h3>

                        <a href="">
                            <div class="artists-concerts-container d-flex justify-content-around flex-wrap">


                                <div class="concert-date-box mt-3">
                                    <h4 class="date-number me-2 text-color-darkest text-md-small text-heavy text-font-ternary">7</h4>
                                    <h5 class="date-month text-color-darkest text-md-small text-font-ternary">augusts</h5>
                                </div>
                                <div class="concert-date-box mt-3">
                                    <h4 class="date-number me-2 text-color-darkest text-md-small text-heavy text-font-ternary">7</h4>
                                    <h5 class="date-month text-color-darkest text-md-small text-font-ternary">augusts</h5>
                                </div>
                                <div class="concert-date-box mt-3">
                                    <h4 class="date-number me-2 text-color-darkest text-md-small text-heavy text-font-ternary">7</h4>
                                    <h5 class="date-month text-color-darkest text-md-small text-font-ternary">augusts</h5>
                                </div>
                                <div class="concert-date-box mt-3">
                                    <h4 class="date-number me-2 text-color-darkest text-md-small text-heavy text-font-ternary">7</h4>
                                    <h5 class="date-month text-color-darkest text-md-small text-font-ternary">augusts</h5>
                                </div>
                                <div class="concert-date-box mt-3">
                                    <h4 class="date-number me-2 text-color-darkest text-md-small text-heavy text-font-ternary">7</h4>
                                    <h5 class="date-month text-color-darkest text-md-small text-font-ternary">augusts</h5>
                                </div>
                                <div class="concert-date-box mt-3">
                                    <h4 class="date-number me-2 text-color-darkest text-md-small text-heavy text-font-ternary">7</h4>
                                    <h5 class="date-month text-color-darkest text-md-small text-font-ternary">augusts</h5>
                                </div>

                            </div>

                        </a>

                    </div>



                    <!-- <div class="concert-card concert-card--narrow mb-2  align-content-center justify-content-around">
                        <div class="row flex-wrap align-items-center  w-100">

                            <div class="col-md-3 col-6 flex-row concert-date concert-date--text-small">
                                <h4 class="date-number me-2">7</h4>
                                <h5 class="date-month">augusts</h5>
                            </div>
                            <div class="col-md-6 text-center d-flex order-3 order-md-2  justify-content-center concert-program">
                                <p class="mb-0 text-start">Concert program name here</p>
                            </div>
                          


                            <div class="col-md-3 d-flex order-5 justify-content-center concert-action-btn px-0">
                                <button class="btn btn-primary-ig btn-primary-ig--small btn-lg w-100">get tickets</button>
                            </div>
                        </div>


                    </div> -->


                </div>



                <div class="col-md-6 artist-bio text-long text-long--normal offset-md-6">
                    <h1 class="artist-name-title artist-name-title--desctop text-color-darkest text-font-secondary text-md-lg text-medium ">
                        <?php the_title() ?> <span class="instrument">(<?php esc_html_e(get_field('post_artist_artist_instrument'), 'satiksanos-saulkrastos') ?>)</span>
                    </h1>
                    <?php echo the_content(); ?>
                </div>
            </div>


            <div class="artists-concert-in-artist-page--mobile">

                <h3 class="listen-artist-on-concert text-color-light text-xxl text-center text-font-secondary mt-5">
                    Listen to <?php echo esc_html($firstname, 'satiksanos-saulkrastos') ?> on:
                </h3>

                <a href="">
                    <div class="artists-concerts-container d-flex justify-content-around flex-wrap">


                        <div class="concert-date-box mt-3 text-center">
                            <h4 class="date-number me-2 text-color-darkest text-md-small text-heavy text-font-ternary">7</h4>
                            <h5 class="date-month text-color-darkest text-md-small text-font-ternary">augusts</h5>
                        </div>

                    </div>

                </a>

            </div>

        </section>


    </main>


<?php endwhile; ?>

<!-- <h5 style='color: red; font-style: italic; margin-top:300px'> <?php echo 'this is from ' . basename(__FILE__); ?></h5> -->
<?php get_footer(); ?>