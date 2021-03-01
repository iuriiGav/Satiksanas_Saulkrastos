<?php
/* 
* Template Name : Concerts
*/

get_header(); 

global $post;
$current_date = date('j M Y');
$end_date = date('j M Y', strtotime('1 month'));
echo 'Start Date:'. $current_date;

$all_events = tribe_get_events(
    array(
        'start_date' => $current_date,
        'posts_per_page' => 10
    )
);

foreach($all_events as $post) {
setup_postdata($post);
?>

    <h3 class="entry-title"><a href="<?= tribe_get_event_link($post) ?>"><?php the_title(); ?></a></h3>
    <div style="margin-bottom: 1em">
    <span class="event-date"><a href="<?= tribe_get_event_link($post) ?>"><?php echo tribe_get_start_date($post->ID, true, 'M j, Y'); ?></a></span>

    <?php if ( has_post_thumbnail() ) { ?>

        <div class="event-thumb">
            <a href="<?= tribe_get_event_link($post) ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
        </div>
        <div class="event-excerpt">
            <?php the_excerpt(); ?>
        </div>

    <?php } else { ?>

        <div class="event-content">
            <?php the_content(); ?>
            
        </div>
        <div> <?php next_posts_link('Older posts'); ?></div>
            <div><?php previous_posts_link('Newer posts'); ?></div>
        

    <?php } ?>
    </div>

    <a href="<?php echo tribe_get_listview_past_link()?>">past</a>
    <a href="<?php echo tribe_get_next_events_link()?>">next</a>

<?php } ?>
<?php wp_reset_query(); 


get_footer(); ?>