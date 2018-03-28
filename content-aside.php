<h3>This is an aside post<?php the_title();?></h3>
<small> Posted on:
    <?php the_time('F j, Y'); ?> at
    <?php the_time('g:i a'); ?>, in
    <?php the_category(); ?>
    <div class="author-img">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
    </div>
    <?php the_author_firstname(); ?>
    <?php the_author_lastname(); ?>
</small>
<hr>
