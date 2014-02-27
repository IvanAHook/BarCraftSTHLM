<?php
/**
 * sthlmesport functions and definitions
 *
 * @package sthlmesport
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'sthlmesport_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sthlmesport_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on sthlmesport, use a find and replace
	 * to change 'sthlmesport' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'sthlmesport', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size("top-image", 760, 380, true );
	add_image_size("article-thumb", 280, 140, true );

	// remove hard coded dimension from thumbnails
	add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
	function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
	    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	    return $html;
	}

	// Decrease excerpt length
	function my_excerpt_length($length) {
		return 35; // Number of words
	}
	add_filter('excerpt_length', 'my_excerpt_length');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'sthlmesport' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sthlmesport_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
endif; // sthlmesport_setup
add_action( 'after_setup_theme', 'sthlmesport_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function sthlmesport_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'sthlmesport' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'sthlmesport_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sthlmesport_scripts() {

    wp_enqueue_script('jquery');

	wp_enqueue_style( 'sthlmesport-style', get_stylesheet_uri() );

    wp_enqueue_script( 'sthlmesport-navigation', get_template_directory_uri() . '/js/filter_functions.js');

	wp_enqueue_script( 'sthlmesport-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'sthlmesport-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sthlmesport_scripts' );

/*
 *  Adds Event post type
 */
function create_post_types() { // add 'supports' => array(),
    register_post_type( 'event',
                        array(
                            'labels' => array(
                                            'name' => __( 'Event' ),
                                            'singular_name' => __( 'Event' )
                                            ),
                            'taxonomies' => array('category', 'post_tag'),
                            'public' => true,
                            'has_archive' => true,
                            'rewrite' => array( 'slug' => 'event'),
                            'register_meta_box_cb'=>'add_event_metaboxes'
                        )
                    );

}
add_action( 'init', 'create_post_types' );

/*
function add_event_metaboxes() {
    add_meta_box( 'event_date', 'Event Date', 'event_date', 'event', 'normal', 'default' );
}

function event_date() {
    global $post;
    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
            wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
    $date = get_post_meta( $post->ID, '_date', true );
    echo '<input type="text" name="_date" value="' .
            $date . '" class="widefat" />';
}
*/

function event_save( $post_id, $post ) {
    // i dont understand all this 100%
    if ( !isset( $_POST['eventmeta_noncename'] ) || !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
        return $post->ID;
    }
    if ( !current_user_can( 'edit_post', $post->ID )) {
        return $post->ID;
    }

    $event_meta['_date'] = $_POST['_date'];
    foreach ( $event_meta as $key=>$value ) {
        if ( $post->post_type == 'revision' ) return;
        $value = implode( ',', (array)$value );
        if ( get_post_meta( $post->ID, $key, FALSE )) {
            update_post_meta( $post->ID, $key, $value);
        } else {
            add_post_meta( $post->ID, $key, $value );
        }
        if ( !$value ) delete_post_meta( $post->ID, $key );
    }
}
add_action( 'save_post', 'event_save', 1, 2 );

function event_delete_transient( $post_id, $post ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( $post->post_type == 'event' ) {
        delete_transient( 'event_query' );
    }
}
add_action( 'save_post', 'event_delete_transient', 10, 2 );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
