<?php
/**
 * The template part for post lists (Front page, Categories and Search results)
 *
 * @package sthlmesport
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a class="entry-image" href="<?php the_permalink(); ?>" rel="bookmark"><?php

		if ( has_post_thumbnail() ) {
			the_post_thumbnail('article-thumb');
		}
		else {
			echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/thumbnail-fallback.png" />';
		}

	?></a>
	
	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

	<div class="entry-meta">
		<?php the_time('j F, Y H:i'); ?>
	</div><!-- .entry-meta -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

</article><!-- #post-## -->
