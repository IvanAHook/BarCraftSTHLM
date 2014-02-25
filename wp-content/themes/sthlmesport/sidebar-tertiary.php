<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package sthlmesport
 */
?>
    <div id="tertiary" class="notice-area" role="complementary">

        Loop igenom notiser, på nåt sätt:<br><br>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-meta">
                 <?php the_time('j F, Y H:i'); ?>
                </div><!-- .entry-meta -->

                <h1 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark">
                    <?php the_title(); ?>
                </a>
                </h1>
        </article>

        <div class="highlight">
            Puff 1
        </div>

    </div><!-- #secondary -->