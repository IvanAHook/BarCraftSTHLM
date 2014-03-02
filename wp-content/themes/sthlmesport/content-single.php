<?php
/**
 * The template part for single post (Article view)
 *
 * @package sthlmesport
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php sthlmesport_posted_on(); ?>
			<!-- <a class="comment-count" href="#comments"><?php comments_number( '', 'en kommentar', '% kommentarer' ); ?></a> -->
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="single-main">

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'sthlmesport' ),
					'after'  => '</div>',
				) );
			?>

		</div><!-- .entry-content -->

		<footer class="entry-meta">
			<?php
				/* translators: used between list items, there is a space after the comma */
				$category_list = get_the_category_list( __( ', ', 'sthlmesport' ) );

				/* translators: used between list items, there is a space after the comma */
				$tag_list = get_the_tag_list( '', __( ', ', 'sthlmesport' ) );

				/*
				if ( ! sthlmesport_categorized_blog() ) {
					// This blog only has 1 category so we just need to worry about tags in the meta text
					if ( '' != $tag_list ) {
						$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'sthlmesport' );
					} else {
						$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'sthlmesport' );
					}

				} else {
					// But this blog has loads of categories so we should probably display them here
					if ( '' != $tag_list ) {
						$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'sthlmesport' );
					} else {
						$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'sthlmesport' );
					}

				} // end check for categories on this blog

				printf(
					$meta_text,
					$category_list,
					$tag_list,
					get_permalink()
				);
				*/
			?>

			<?php edit_post_link( __( 'Edit', 'sthlmesport' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->



	</div> <!-- .single-main -->

	<div id="quarternary" class="widget-area" role="complementary">

		<?php $meta_infobox = get_post_meta($post->ID, 'infobox', true); ?>
		<?php if ( ! empty ( $meta_infobox ) ) { ?>
		    
		    <div class="meta-infobox widget">
		            <?php echo wpautop($meta_infobox); ?>
		    </div>
		<?php } ?>

		<?php dynamic_sidebar( 'articlewidgets' ); ?>
	</div>

</article><!-- #post-## -->