<?php get_header() ?>


<!-- Cover Section -->



<!-- Right Col  -->

<div class="most-recent-container">
    <?php

    $args = array(
        'type' => 'post',
        'posts_per_page' => 1,
        'category_name' => 'featured'
    );
        $lastBlog = new WP_Query($args);

        if( $lastBlog -> have_posts() ):

            while( $lastBlog -> have_posts() ): $lastBlog -> the_post();

    ?>

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


<!--  Masonry stuff -->
<div class="featured-posts-container" id="ms-container">
    <?php

    $args = array(
        'type' => 'post',
        'posts_per_page' => 15,
        // 'category' => '6'
    );
        $lastBlog = new WP_Query($args);

        if( $lastBlog -> have_posts() ):

            while( $lastBlog -> have_posts() ): $lastBlog -> the_post(); ?>

            <div class="ms-item">

                <div class="featured-post-img"><?php the_post_thumbnail('medium'); ?></div>
                <div class="featured-post-title"><?php the_title();?></div>
                <div class="featured-post-exerpt"><?php the_excerpt(); ?></div>
                    <!-- Get content template if no other format file -->
                    <?php //get_template_part('content', 'masonry'); ?>

            </div>

            <?php endwhile;

        endif;

        // reset so we don't effect future
        wp_reset_postdata();
    ?>
</div>





<?php // get_sidebar() ?>




<!-- Masonry Script -->
<script type="text/javascript">

    jQuery(window).load(function() {
  var container = document.querySelector('#ms-container');
  var msnry = new Masonry( container, {
    itemSelector: '.ms-item',
    columnWidth: '.ms-item',
  });
    });
</script>
<!--  -->

<?php get_footer() ?>
