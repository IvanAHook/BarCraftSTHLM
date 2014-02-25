<?php
/**
 * @package sthlmesport
 */
?>

<?php
function event_posts_cache() { //separate taxonomy for events?
    $args = array( 'type'=>'post', 'orderby'=>'name',
                   'order'=>'ASC', 'taxonomy'=>'category' );
    $categories = get_categories( $args );
    $event_query = array();
    foreach ( $categories as $cat ) {
        $args = array( 'post_type'=>'event', // not getting latest for some reason
                       'limit'=>1,
                       'cat'=>$cat->cat_ID,
                       'no_found_rows'=>true,
                       'update_post_meta_cache'=>false,
                       'update_post_term_cache'=>false );
        $query = new WP_Query( $args );
        while ( $query->have_posts() ) : $query->the_post();
            // add 'date' etc, stuff to display in event box to event query
            $event_query[$cat->slug] = array( 'name'=>$cat->name, 'title'=>get_the_title(get_the_ID()), // does not seem right...
                                              'term_link'=>esc_attr(get_term_link($cat->slug, 'category')) );
        endwhile;
    }
    wp_reset_postdata();
    set_transient( 'event_query', $event_query );
    return $event_query;
}
?>

