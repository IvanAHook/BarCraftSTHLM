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
 * @package sthlmesport
 */

get_header(); ?>

<div id="content" class="site-content">

    <div id="featured-area">
        <div id="featured-post">
            <?php
                $featured_post = get_posts('numberposts=1&category=2');
                foreach($featured_post as $post) : ?>
                    the_post_thumbnail();
                <img class="article-img" id="featured-img"><?php the_title(); ?></a>
            <?php endforeach; ?>
            <div id="featured-description"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		</div>
		<div id="schedule">
			<div id="comminty-viewer">
				Community viewer
			</div>
		</div>
	</div>

	<div id="primary" class="content-area">
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
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
