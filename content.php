<h3><?php the_title();?></h3>
<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>
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
<p><?php the_content();?></p>
<hr>
