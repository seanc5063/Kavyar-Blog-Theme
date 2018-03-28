<?php get_header() ?>

    <?php
    if( have_posts() ):
        while( have_posts() ): the_post(); ?>
            <div class="article-container">
                <h3><?php the_title();?></h3>
                <p><?php the_content();?></p>
                <hr>
            </div>
        <?php endwhile;
    endif;
    ?>

<?php get_footer() ?>
