<?php get_header(); ?>

<section id="content" role="main">

	<div class="featured">
		<?php
			$featured = sthlmesport_get_featured_posts();
			if ( empty( $featured ) ) {
			    print "Jetpack needed for featured content";
			} else {
				foreach ( $featured as $post ) : setup_postdata( $post ); 
					get_template_part( 'entry' );
				endforeach;
				wp_reset_postdata(); 
			}
		?>
	</div>

	<div class="posts">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php endwhile; endif; ?>
	</div>

	<?php get_template_part( 'nav', 'below' ); ?>

	<div id="notices">
	<?php
		$args = array( 'post_type' => 'notice', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
			$noticefields = get_post_meta( get_the_ID(), "notice", true );
			print '<div class="notice">';
			the_title();
			print " : ".$noticefields[0]['url'];
			print '</div>';
		endwhile;
	?>
	</div>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>