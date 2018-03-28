<div class="article-title"><?php the_title();?></div>
<div class="post-cover"><?php the_post_thumbnail('large'); ?></div>
<div class="article-container">
    <small> Posted on:
        <?php the_time('F j, Y'); ?> at
        <?php the_time('g:i a'); ?>, in
        <?php the_category(); ?>
        <?php if ( function_exists( 'wpsabox_author_box' ) ) echo wpsabox_author_box(); ?>
    </small>
    <div class="article">
        <p><?php the_content();?></p>
    </div>
</div>
<hr>
