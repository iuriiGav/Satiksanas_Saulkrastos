<div class="prev-next-post-btn-container">
    <?php if (get_previous_post()) : ?>

        <div class="next-prev-post-link next-prev-post-link--prev"> <?php next_posts_link('Older posts'); ?></div>



    <?php endif;
    if (get_previous_posts_link()) : ?>
        <div class="next-prev-post-link next-prev-post-link--next"><?php previous_posts_link('Newer posts'); ?></div>
    <?php endif; ?>
</div>