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

            <?php   // filter
                if ( empty($_COOKIE['filter']) ) {
                    $selected_cats = '';
                } else {
                    $selected_cats = 'esport,' . $_COOKIE['filter'];
                }

                $aside_counter = 1;
            ?>

            <?php $query_aside1 = new WP_Query( array( 'post_type'=>'post',
                                                'posts_per_page'=>15,
                                                'category_name'=>$selected_cats,
                                                'tax_query'=>array(array( // why double array? i dont know...
                                                    'taxonomy'=>'post_format',
                                                    'field'=>'slug',
                                                    'terms'=>'post-format-aside',
                                                    'operator'=>'IN',
                                                    ) ),
                                                ) );
                  if ( $query_aside1->have_posts() ) : ?>

            <?php while ( $query_aside1->have_posts() ) : $query_aside1->the_post(); ?>

            <?php   // insert widget areas at position 1 and 3
                if ($aside_counter == 1) {
                    dynamic_sidebar( 'noticewidgets1' );
                } elseif ($aside_counter == 3) {
                    dynamic_sidebar( 'noticewidgets2' );
                }
            ?>

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

            <?php $aside_counter++ ?>
            <?php endwhile; ?>
            <?php endif; ?>

        </aside>

    </div><!-- #secondary -->
