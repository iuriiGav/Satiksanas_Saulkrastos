<section class="homepage-artists">
    <h4 class="section-header section-header--dark text-center"><?php esc_html_e(get_field('homepage_artists_section_heading'), 'satiksanos-saulkrastos') ?></h4>
    <?php getAllArtists('post_artist_is_this_artist_participating_this_year', 'is_this_artist_participating_this_year_yes', true)  ?>
</section>