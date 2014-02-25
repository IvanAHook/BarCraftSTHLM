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

            <div id="tertiary" class="widget-area events-area" role="complementary">
                <?php echo $event_query['dota2']['name']; ?>
                <br>
                <?php echo $event_query['dota2']['title']; ?>
                <p>barcraft
                15/4</p>

            </div><!-- #tertiary -->
            <div id="tertiary" class="widget-area events-area" role="complementary">
                <?php echo $event_query['starcraft2']['name']; ?>
                <br>
                <?php echo $event_query['starcraft2']['title']; ?>
                <p>barcraft
                15/4</p>

            </div><!-- #tertiary -->
