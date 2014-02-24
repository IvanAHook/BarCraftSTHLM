<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 *                    if ( has_post_thumbnail( $post->ID )) {
 *                       echo '<a href="' . get_permalink( $post->ID ) . '"title="' . esc_attr( $post->post_title ) . '">';
 *                       echo get_the_post_thumbnail( $post->ID, 'thumbnail' );
 *                   }
 *
 * @package sthlmesport
 */

get_header(); ?>

<div id="content" class="site-content">

    <?php
        $selected_cats = array( 1,2,3,4,5 ); // change this array depending on filter choices, create set/get_filter() functions?
        $query_article = new WP_Query( array( 'post_type'=>'Article', 'posts_per_page'=>10, 'cat'=>$selected_cats ) );
        $query_event = new WP_Query( array( 'post_type'=>'Event', 'posts_per_page'=>10, 'cat'=>$selected_cats ) );
    ?>

    <div id="featured-area">
        <div id="featured-post">
            <?php
                $featured_post = get_posts( 'numberposts=1&category=2' );
                foreach($featured_post as $post) :?>
                    <?php $featured_id = get_the_ID(); ?>
                    <a href="<?php the_permalink(); ?>">
                    	<?php echo get_the_post_thumbnail( $post->ID, 'top-image' ); ?>
                    	<p id="featured-description"><?php the_title(); ?></p>
                    </a>
            <?php endforeach; ?>
		</div>
		<div id="schedule">
			<div id="comminty-viewer">

			</div>
		</div>
	</div>

	<div id="primary" class="content-area">

		<?php get_sidebar('events'); ?>
        <?php get_sidebar('notifications'); ?>

		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>


			<?php while ( have_posts() ) : the_post(); ?>
				<?php
                    if ( $post->ID !== $featured_id ) {
                    /* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
                    }
				?>

			<?php endwhile; ?>

			<?php sthlmesport_paging_nav(); ?>

        <?php else : ?>

            <?php get_template_part( 'content', 'none' ); ?>

        <?php endif; ?>

        </main><!-- #main -->

    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
