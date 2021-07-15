<div class="news-body d-flex flex-column justify-content-center">
    <h3 class="news-pusblish-date"><?php echo get_the_date() ?> </h3>
    <?php
    $news_content = get_the_content();
    $desired_description_length = 200;
    if (strlen($news_content) <= $desired_description_length) :
    ?>
        <h2 class="news-post__title text-title text-color-darkest">
            <?php the_title() ?>
        </h2>
    <?php else : ?>

        <a href="<?php echo get_permalink() ?>">
            <h2 class="news-post__title text-title text-color-darkest">
                <?php the_title() ?>
            </h2>
        </a>

    <?php endif; ?>


    <div class="news-post__content text-long">
        <?php custom_length_excerpt($news_content, $desired_description_length, get_the_permalink()) ?>
    </div>
</div>