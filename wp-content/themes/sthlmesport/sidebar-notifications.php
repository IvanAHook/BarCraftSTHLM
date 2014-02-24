<?php
/**
 * The Sidebar containing notifications
 *
 * @package sthlmesport
 */
?>

<?php
//  $display_total = 6;
    $num_of_notifications = 4;
    $num_of_puffs = 2;

    $notifications = get_posts( 'numberposts=' . $num_of_notifications . '&category=4' );
    $puffs = get_posts( 'numberposts=' . $num_of_puffs . '&category=5' );
?>

	<div id="" class="" role="">
        <?php //not very pretty solution but will suffice until i have more time and better knowlege of php/wp
            foreach( $notifications as $post ) : ?>
                    <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
                    <p><?php echo the_content(); ?></p>
            <?php endforeach; ?>
	</div>
