<?php
/**
 * The Template for displaying all single posts.
 *
 * @package sthlmesport
 */


get_header();
?>

<!-- Facebook JS SDK -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/sv_SE/sdk.js#xfbml=1&appId=319208091493730&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


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



			<div id="shedule-list">
				<?php dynamic_sidebar( 'schedulewidgets' ); ?>
			</div>

			<!-- <div id="schedule-readmore">
				<a href="http://sthlmesport.se/?page_id=2075">Se hela kalendariet</a>
			</div> --!>

		</div>
	</div>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'content', 'single' ); ?>

			<?php// sthlmesport_post_nav(); ?>
			<h3>Kommentarer:</h3>
			<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" data-colorscheme="light"></div>

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
