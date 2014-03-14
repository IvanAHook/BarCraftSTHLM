<?php
/*
 * Template Name: Older Articles
 *
 * The template for displaying older posts.
 *
 * @package sthlmesport
 */

get_header(); ?>

	<section id="primary" class="content-area">
    <?php // i dont like the sound of 'posts_per_page'...
        delete_transient('event_query'); // safe to remove?
        $featured_post = new WP_Query( array( 'post_type'=>'post','numberposts'=>1, 'posts_per_page'=>1, 'category_name'=>'featured' ) );
        while ( $featured_post->have_posts() ) : $featured_post->the_post();
            $featured_id = get_the_ID();
        endwhile;
    ?>

        <?php   // filter
            if ( empty($_COOKIE['filter']) ) {
                $selected_cats = '';
            } else {
                $selected_cats = 'esport, uncategorized,' . $_COOKIE['filter'];
            }

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts(array(
                    'post_type'=>'post',
                    'posts_per_page'=>10,
                    'paged'=>$paged,
                    'category_name'=>$selected_cats,
                    'tax_query'=>array(array(
                        'taxonomy'=>'post_format',
                        'field'=>'slug',
                        'terms'=>'post-format-aside',
                        'operator'=>'NOT IN',
                    ) ),
                    'post__not_in'=>array($featured_id)
                ) );
        ?>

		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php sthlmesport_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
