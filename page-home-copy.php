<?php get_header() ?>

<div class="cover-story">
    <?php
    $args = array(
        'type' => 'post',
        'posts_per_page' => 3,
    );
        $lastBlog = new WP_Query($args);
        if( $lastBlog -> have_posts() ):
            while( $lastBlog -> have_posts() ): $lastBlog -> the_post(); ?>
            <!-- Get content template if no other format file -->
            <?php get_template_part('content', get_post_format()); ?>

            <?php endwhile;
        endif;
        // reset so we don't effect future
        wp_reset_postdata();
    ?>
</div>
After 1st post
    <?php
    if( have_posts() ):
        while( have_posts() ): the_post(); ?>
        <!-- Get content template if no other format file -->
        <?php get_template_part('content', get_post_format()); ?>

        <?php endwhile;
    endif;

    // PRINT OTHER 2 POSTS NOT THE FIRST ONE
    // $args = array(
    //     'type' => 'post',
    //     'posts_per_page' => 2,
    //     'offset' => 1,
    // );
    // $lastBlog = new WP_Query($args);
    // if( $lastBlog -> have_posts() ):
    //     while( $lastBlog -> have_posts() ): $lastBlog -> the_post(); ?>
    //     <!-- Get content template if no other format file -->
    //     <?php //get_template_part('content', get_post_format()); ?>
    //
    //     <?php //endwhile;
    // endif;
    // // reset so we don't effect future
    // wp_reset_postdata();
    // ?>
<hr>






<div class="tools">
    <h2>Tools</h2>
    <?php
    // PRINT ONLY ONE CAT
    $lastBlog = new WP_Query('type=post&posts_per_page=-1&cat=7');
    if( $lastBlog -> have_posts() ):
        while( $lastBlog -> have_posts() ): $lastBlog -> the_post(); ?>
        <!-- Get content template if no other format file -->
        <?php get_template_part('content', get_post_format()); ?>

        <?php endwhile;
    endif;
    // reset so we don't effect future
    wp_reset_postdata();
     ?>
</div>

<?php // get_sidebar() ?>

<?php get_footer() ?>
