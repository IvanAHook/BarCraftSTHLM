<?php
/**
 * The Sidebar containing the events sidebar
 *
 * @package sthlmesport
 */

require_once( get_template_directory() . '/functions-event.php' );
$event_query = get_transient( 'event_query' );
if ( !$event_query ) {
    $event_query = event_posts_cache();
}
?>

            <div id="secondary" class="widget-area" role="complementary">

            	<aside class="events-area widget">

	                <div class="event-box" id="starcraft-event-box">
	                    <p class="event-text">Nästa BarCraft</p>
	                    <p class="event-date"><?php echo $event_query['starcraft']['event-date']; ?></p>
	                </div>

	               <div class="event-box" id="lol-event-box">
	                    <p class="event-text">Nästa Bar of Legends</p>
	                    <p class="event-date"><?php echo $event_query['lol']['event-date']; ?></p>
	                </div>

	                <div class="event-box" id="dota-event-box">
	                    <p class="event-text">Nästa Pubstomp</p>
	                    <p class="event-date"><?php echo $event_query['dota']['event-date']; ?></p>
	                </div>

	                <div class="event-box" id="esport-event-box">
	                    <p class="event-text">Nästa brun</p>
	                    <p class="event-date"><?php echo $event_query['esport']['event-date']; ?></p>

	                    <?php echo $event_query['esport']['name']; ?>
	                </div>
	            </aside>


	            <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

	            <aside id="search" class="widget widget_search">
	                <?php get_search_form(); ?>
	            </aside>

	            <aside id="archives" class="widget">
	                <h1 class="widget-title"><?php _e( 'Archives', 'sthlmesport' ); ?></h1>
	                <ul>
	                    <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
	                </ul>
	            </aside>

	            <aside id="meta" class="widget">
	                <h1 class="widget-title"><?php _e( 'Meta', 'sthlmesport' ); ?></h1>
	                <ul>
	                    <?php wp_register(); ?>
	                    <li><?php wp_loginout(); ?></li>
	                    <?php wp_meta(); ?>
	                </ul>
	            </aside>

	        <?php endif; // end sidebar widget area ?>

            </div><!-- #secondary -->
