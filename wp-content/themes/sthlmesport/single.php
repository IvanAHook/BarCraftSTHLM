<?php
/**
 * The Template for displaying all single posts.
 *
 * @package sthlmesport
 */


get_header();
?>

<div id="content" class="site-content">

	<?php while ( have_posts() ) : the_post(); ?>

    <div id="featured-area">

			<div id="featured-post" <?php post_class(); ?>>
				<div class="entry-image"><?php

					if ( has_post_thumbnail() ) {
						the_post_thumbnail('top-image');
					}
					else {
						echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/thumbnail-fallback.png" />';
					}

				?></div>

				<?php
				$category = get_the_category();
				if ($category) {
				  echo '<div class="featured-category category-' . $category[0]->slug . '"><a href="' . get_category_link( $category[0]->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category[0]->name ) . '" ' . '>' . $category[0]->name.'</a></div>';
				}
				?>

			</div>

		<div id="schedule">
			<div id="comminty-viewer">
				<?php include("watch/esport-twitch-status.php"); ?>
			</div>
		</div>
	</div>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">



			<?php get_template_part( 'content', 'single' ); ?>

			<?php sthlmesport_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>


        </main><!-- #main -->

    <?php get_sidebar(); ?>

    </div><!-- #primary -->

<?php get_footer(); ?>