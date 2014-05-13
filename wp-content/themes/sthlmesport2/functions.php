<?php

add_action( 'after_setup_theme', 'sthlmesport_setup' );
function sthlmesport_setup()
{
	load_theme_textdomain( 'sthlmesport', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	/* global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640; */
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'sthlmesport' ) )
	);
}

add_action( 'wp_enqueue_scripts', 'sthlmesport_load_scripts' );
function sthlmesport_load_scripts()
{
	wp_enqueue_script( 'jquery' );
}

add_action( 'comment_form_before', 'sthlmesport_enqueue_comment_reply_script' );
function sthlmesport_enqueue_comment_reply_script()
{
	if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}

add_filter( 'the_title', 'sthlmesport_title' );
function sthlmesport_title( $title ) {
if ( $title == '' ) {
	return '&rarr;';
} else {
	return $title;
}
}

add_filter( 'wp_title', 'sthlmesport_filter_wp_title' );
function sthlmesport_filter_wp_title( $title )
{
	return $title . esc_attr( get_bloginfo( 'name' ) );
}

add_action( 'widgets_init', 'sthlmesport_widgets_init' );
function sthlmesport_widgets_init()
{
	register_sidebar( array (
		'name' => __( 'Sidebar Widget Area', 'sthlmesport' ),
		'id' => 'primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

function sthlmesport_custom_pings( $comment )
{
	$GLOBALS['comment'] = $comment;
	?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
	<?php 
}

add_filter( 'get_comments_number', 'sthlmesport_comments_number' );
function sthlmesport_comments_number( $count )
{
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}


add_image_size("top-image", 760, 380, true );
add_image_size("article-thumb", 280, 140, true );

// remove hard coded dimension from thumbnails
/*
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
*/

// Decrease excerpt length
function custom_excerpt_length($length) {
	return 30; // Number of words
}
add_filter('excerpt_length', 'custom_excerpt_length');

// Remove excerpt "[...]"
function custom_excerpt_more( $more ) {
	return '…';
}
add_filter('excerpt_more', 'custom_excerpt_more');



// Featured content requires WP's official Jetpack plugin
add_theme_support( 'featured-content', array(
    'filter'     => 'sthlmesport_get_featured_posts',
    'max_posts'  => 1,
    'post_types' => array( 'post' ),
) );

function sthlmesport_get_featured_posts() {
    return apply_filters( 'sthlmesport_get_featured_posts', array() );
}


// Register Post Types 'event' & 'notice'
function custom_post_types() {
    register_post_type( 'event',
                        array(
                            'labels' => array(
                                            'name' => __( 'Events' ),
                                            'singular_name' => __( 'Event' )
                                            ),
                            'taxonomies' => array('category'),
                            'public' => true,
                            'supports'=> array('title', 'editor', 'thumbnail'),
                            'has_archive' => true,
                            'rewrite' => array( 'slug' => 'event'),
                            'menu_icon' => 'dashicons-calendar',
                        )
                    );

    register_post_type( 'notis',
                        array(
                            'labels' => array(
                                            'name' => __( 'Notiser' ),
                                            'singular_name' => __( 'Notis' )
                                            ),
                            'taxonomies' => array('category'),
                            'public' => true,
                            'supports'=> array('title'),
                            'has_archive' => true,
                            'rewrite' => array( 'slug' => 'notis'),
                            'menu_icon' => 'dashicons-editor-ul',
                        )
                    );

}
add_action( 'init', 'custom_post_types' );



// Register Genre  Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Genrer', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Genre', 'Taxonomy Singular Name', 'text_domain' ),
		'add_new_item'               => __( 'Lägg till ny genre', 'text_domain' ),
		'parent_item'                => __( 'Genre-förälder', 'text_domain' ),

		/*
		'menu_name'                  => __( 'Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		*/
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'genre', array( 'post', 'notis', 'event' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );