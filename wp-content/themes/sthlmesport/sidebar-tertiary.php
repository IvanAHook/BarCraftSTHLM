<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package sthlmesport
 */
?>
    <div id="tertiary" class="notice-area" role="complementary">

        <aside class="widget">
            <h1 class="widget-title">Fler nyheter</h1>

            <!-- Notice Widgets 1 -->

            <?php dynamic_sidebar( 'noticewidgets1' ); ?>


            <!-- First Two Notices -->

            <?php $query_aside1 = new WP_Query( array( 'post_type'=>'post', 'posts_per_page'=>2 ) );
                  if ( $query_aside1->have_posts() ) : ?>

            <?php while ( $query_aside1->have_posts() ) : $query_aside1->the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-meta">
                 <?php the_time('j F, Y H:i'); ?>
                </div><!-- .entry-meta -->

                
                <h2 class="entry-title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                        <div class="entry-icon"></div>
                        <?php the_title(); ?></h2>
                    </a>
                </h2>
                
            </article>
            <?php endwhile; ?>
            <?php endif; ?>


            <!-- Notice Widgets 2 -->

            <?php dynamic_sidebar( 'noticewidgets2' ); ?>


            <!-- Next Twelve Notices -->

            <?php $query_aside2 = new WP_Query( array( 'post_type'=>'post', 'posts_per_page'=>12, 'offset'=>2 ) );
                  if ( $query_aside2->have_posts() ) : ?>

            <?php while ( $query_aside2->have_posts() ) : $query_aside2->the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-meta">
                 <?php the_time('j F, Y H:i'); ?>
                </div><!-- .entry-meta -->

                <h2 class="entry-title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                        <div class="entry-icon"></div>
                        <?php the_title(); ?></h2>
                    </a>
                </h2>

            </article>
            <?php endwhile; ?>
            <?php endif; ?>

        </aside>

    </div><!-- #secondary -->
