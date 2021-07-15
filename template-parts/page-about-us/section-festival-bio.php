<section class="festival-bio">

    <div class="row">

        <div class="col-lg-5  col-md-7 col-sm-12 order-3  festival-bio-text text-long text-long--medium">
            <p class=""><?php echo wp_kses_post(wpautop((get_field('about_us_long_text')))) ?></p>
        </div>
        <div class="col-lg-6 col-md-4 order-md-5">
            <h1 class="section-header section-header--light section-header--about-us">
                <?php esc_html_e(get_field('about_us_page_heading'), 'satiksanos-saulkrastos') ?>
            </h1>
        </div>

    </div>
</section>