<?php if (!empty(get_field('post_concerts_program_description'))) : ?>
    <h4 class="single-concert-program-and-artists--title mt-5">
        <?php esc_html_e(get_field('page_concerts_about_the_concert_label', 7), 'satiksanos-saulkrastos') ?>
    </h4>
    <div class="single-concert-program-description">
        <?php echo wp_kses_post(wpautop(get_field('post_concerts_program_description'))) ?>
    </div>
<?php endif;
