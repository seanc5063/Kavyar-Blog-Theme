<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if( has_post_thumbnail() ): ?>

        <div id="<?php echo post_name; ?>" class="page-<?php
        echo $post_id; ?>" style="background: url(<?php
        echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>) no-repeat top center / cover;">


    <?php endif; ?>


    <div class="title-container">

        <?php the_title(
            sprintf( '<a href="%s"><div class="entry-title">',
            esc_url( get_permalink() ) ), '</div></a>'
        );
        ?>

        <div class="exerpt">
            <?php the_excerpt(); ?>
        </div>


    </div>
</div>
