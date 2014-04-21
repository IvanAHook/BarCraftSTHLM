<?php
/**
 * Template Name: STHLM e-sport Forum Template
 *
 * A custom page template for a Vanilla Forum.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */

get_header();
?>

<div id="content" class="site-content">

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php the_content(); ?>

        </main><!-- #main -->

    <?php get_sidebar(); ?>

    </div><!-- #primary -->

<?php get_footer(); ?>