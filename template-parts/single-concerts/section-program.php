<div class="col-md-7 single-concert-program-and-artists--program">

    <h4 class="single-concert-program-and-artists--title">
        <?php esc_html_e(get_field('page_concerts_program_label', 7), 'satiksanos-saulkrastos') ?>
    </h4>

    <?php if (have_rows('post_concerts_program_composer_and_piece')) : while (have_rows('post_concerts_program_composer_and_piece')) : the_row();
            $composer = get_sub_field('composer');
            $note = get_sub_field('optional_note');
            $piece = get_sub_field('piece');
    ?>
            <div class="single-concert-program-and-artists--piece-and-composer-wrapper">
                <h5 class="single-concert-program-and-artists--composer">
                    <?php echo esc_html_e($composer, 'satiksanos-saulkrastos');
                    if ($note) : ?>
                        <span class="single-concert-program-and-artists--note">
                            <?php echo esc_html_e($note, 'satiksanos-saulkrastos') ?>
                        </span>
                    <?php endif; ?>
                </h5>
                <p class="single-concert-program-and-artists--piece">
                    <?php echo esc_html_e($piece, 'satiksanos-saulkrastos') ?>
                </p>
            </div>


    <?php endwhile;
    endif; ?>
</div>