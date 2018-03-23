<?php get_header() ?>

    <?php
    if( have_posts() ):
        while( have_posts() ): the_post(); echo 'THIS IS THE FORMAT: '.get_post_format(); ?>
        <!-- Get content template if no other format file -->
        <?php get_template_part('content', get_post_format()); ?>

        <?php endwhile;
    endif;
    ?>

<?php get_sidebar() ?>

<?php get_footer() ?>
