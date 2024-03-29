<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <p class="lead">by <?php the_author_posts_link(); ?></p>
        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php the_date( $format = 'l, F j, Y, \a\t g:i A' ); ?>

        <hr>

        <!--display thumbnail if has thumbnail -->
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail( $size = 'post-thumbnail', $attr = 'class=img-responsive');
            ?><hr><?php
        } ?>
        <!--end display thumbnail-->

        <!--display excerpt for posts page and content everywhere else-->
        <div class="entry-content">
            <?php the_excerpt(); ?>
            <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a><hr>

            <!--end display excerpt or content-->
    </article>

<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, there doesn\'t appear to be anything here.' ); ?></p>
<?php endif; ?>