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

get_header();
?>

<div id="content" class="site-content">

    <div id="featured-area">

    <?php // i dont like the sound of 'posts_per_page'...
        delete_transient('event_query'); // safe to remove?
        $featured_post = new WP_Query( array( 'post_type'=>'post','numberposts'=>1, 'posts_per_page'=>1, 'category_name'=>'featured' ) );
        while ( $featured_post->have_posts() ) : $featured_post->the_post();
            $featured_id = get_the_ID();
    ?>
			<article id="featured-post" <?php post_class(); ?>>
				<a class="entry-image" href="<?php the_permalink(); ?>" rel="bookmark"><?php

					if ( has_post_thumbnail() ) {
						the_post_thumbnail('top-image');
					}
					else {
						echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/thumbnail-fallback.png" />';
					}

				?></a>

				<a id="featured-description" href="<?php the_permalink(); ?>" rel="bookmark">
					<div class="entry-icon"></div>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<p class="entry-summary">
						<?php echo get_the_excerpt(); ?>
					</p><!-- .entry-summary -->
				</a>

			</article><!-- #post-## -->
<?php endwhile; ?>

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

	<?php get_sidebar('tertiary'); ?>

	<div id="primary" class="content-area">

        <?php   // filter
            if ( empty($_COOKIE['filter']) ) {
                $selected_cats = '';
            } else {
                $selected_cats = 'esport, uncategorized,' . $_COOKIE['filter'];
            }
        global $featured_id;
        $query_post = new WP_Query( array( 'post_type'=>'post',
                                            'posts_per_page'=>6,
                                            'category_name'=>$selected_cats,
                                            'post__not_in'=>array($featured_id) ) );
        ?>

		<main id="main" class="site-main" role="main">

		<?php if ( $query_post->have_posts() ) : ?>

			<?php /* Start the Loop */ ?>

			<?php while ( $query_post->have_posts() ) : $query_post->the_post(); ?>
				<?php
                /* Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
                    get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>
        <a href=" <?php echo get_post_type_archive_link( "post" ); ?>"><?php echo get_post_type_archive_link( "post" ); ?></a>

		<nav role="navigation" class="navigation paging-navigation">
				<h1 class="screen-reader-text">Posts navigation</h1>
				<div class="nav-links">
								<div class="nav-previous"><a href="/?m=2014&paged=2"><span class="meta-nav">←</span> Older posts</a></div>
				</div><!-- .nav-links -->
			</nav>


        <?php else : ?>

            <?php get_template_part( 'content', 'none' ); ?>

        <?php endif; ?>

        </main><!-- #main -->

    <?php get_sidebar(); ?>

    </div><!-- #primary -->

<?php get_footer(); ?>
