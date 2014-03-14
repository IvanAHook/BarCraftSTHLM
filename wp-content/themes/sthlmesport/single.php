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
			if ( in_category( 'esport' )) {
				echo '<div class="featured-category category-esport"><a href="#">e-sport</a></div>';
			} elseif (in_category( 'starcraft' )) {
				echo '<div class="featured-category category-starcraft"><a href="#">StarCraft 2</a></div>';
			} elseif (in_category( 'lol' )) {
				echo '<div class="featured-category category-lol"><a href="#">League of Legends</a></div>';
			} elseif (in_category( 'dota' )) {
				echo '<div class="featured-category category-dota"><a href="#">Dota 2</a></div>';
			} elseif (in_category( 'hearthstone' )) {
				echo '<div class="featured-category category-hearthstone"><a href="#">Hearthstone</a></div>';
			}
			?>
		</div>

		<div id="schedule">

			<div id="comminty-viewer">
				<?php include("watch/esport-twitch-status.php"); ?>
			</div>

			<div id="shedule-list">
				<?php dynamic_sidebar( 'schedulewidgets' ); ?>
			</div>

			<div id="schedule-readmore">
				<a href="http://sthlmesport.se/?page_id=2075">Se hela kalendariet</a>
			</div>

		</div>
	</div>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'content', 'single' ); ?>

			<?php// sthlmesport_post_nav(); ?>

			<?php echo do_shortcode('[fbcomments]'); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				/*
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
				*/
			?>

		<?php endwhile; // end of the loop. ?>


        </main><!-- #main -->

    <?php get_sidebar(); ?>

    </div><!-- #primary -->

<?php get_footer(); ?>
