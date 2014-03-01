<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package sthlmesport
 */
?>
    <div id="tertiary" class="notice-area" role="complementary">

        Loop igenom notiser, på nåt sätt:<br><br>
<?php $query_aside = new WP_Query( array( 'post_type'=>'post', 'posts_per_page'=>8 ) );
      if ( $query_aside->have_posts() ) : ?>

    <?php while ( $query_aside->have_posts() ) : $query_aside->the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-meta">
                 <?php the_time('j F, Y H:i'); ?>
                </div><!-- .entry-meta -->

                <h1 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark">
                    <?php the_title(); ?>
                </a>
                </h1>
                    <?php the_content(); ?>
        </article>
    <?php endwhile; ?>
    <?php endif; ?>

    </div><!-- #secondary -->
