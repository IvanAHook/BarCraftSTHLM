<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sthlmesport
 */


get_header();
?>

<div id="content" class="site-content">
<p>kalsheashehsah</p>
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

			<?php sthlmesport_post_nav(); ?>

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
