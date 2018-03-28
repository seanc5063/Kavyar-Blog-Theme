<?php get_header() ?>


<!-- Cover Section -->



<!-- Right Col  -->

<div class="most-recent-container">
    <?php

    $args = array(
        'type' => 'post',
        'posts_per_page' => 1,
        'category' => '6'
    );
        $lastBlog = new WP_Query($args);

        if( $lastBlog -> have_posts() ):

            while( $lastBlog -> have_posts() ): $lastBlog -> the_post(); ?>

            <div class="most-recent-post">

                <div class="most-recent-post-box">

                    <!-- Get content template if no other format file -->
                    <?php get_template_part('content', 'featured'); ?>

                </div>
            </div>

            <?php endwhile;

        endif;

        // reset so we don't effect future
        wp_reset_postdata();
    ?>
</div>

<?php // get_sidebar() ?>

<?php get_footer() ?>
