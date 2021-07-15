<section class="previous-festival-info previous-festivals-content__top-section">
    <div class="row">
        <h2 class="section-header section-header__bigger more-padding-bottom top-header-padding text-center text-color-light">
            <?php esc_html_e(get_field('post_previous_festivals_dates_of_the_festival'), 'satiksanos-saulkrastos') ?>
        </h2>
        <h2 class="section-header section-header__bigger more-padding-bottom text-center text-color-light m-top-n7">
            <?php esc_html_e(get_field('history_year_of_archive'), 'satiksanos-saulkrastos') ?>
        </h2>
    </div>
    <div class="row ">

        <div class="col-md-2 prev-impressive-stats">


            <?php if (have_rows('post_previous_festivals__impresive_statistics')) : while (have_rows('post_previous_festivals__impresive_statistics')) : the_row();

            ?>
                    <div class="prev-impressive-stats-items text-color-white text-center d-flex flex-column justify-content-center align-items-center">
                        <h2 class="large-info-num"><?php the_sub_field('number') ?></h2>
                        <h3 class="large-info-text"><?php the_sub_field('text') ?></h3>
                    </div>

            <?php endwhile;
            endif; ?>




        </div>
        <div class="prev-text-wrapper">

            <div class="col-md-10 text-long text-color-darkest offset-md-2 prev-text">
                <?php echo wp_kses_post(wpautop((get_field('post_previous_previous_festival_text')))) ?>
            </div>
        </div>





    </div>
    </div>
</section>