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

	<div id="tertiary" class="widget-area events-area" role="complementary">
        <?php //not very pretty solution but will suffice until i have more time and better knowlege of php/wp
            $n = 0;
            $p = 0;
            foreach( $notifications as $post ) : ?>
                <?php if ( $n === 2 and $p < $num_of_puffs ) : ?>

                    <a href="<?php get_permalink( $puffs[p]->ID ); ?>"><?php echo get_the_title( $puffs[p]->ID ) ?></a>
                    //echo apropriate ammount of puffs text in some tag or something...
                    <?php
                        $puff_text = $puffs[p]->post_content;
                        $puff_text = apply_filters('the_content', $puff_text);
                        $puff_text = str_replace(']]>', ']]&gt;', $puff_text);
                        $p++;
                    ?>
                    <p><?php echo $puff_text ?></p>

                <?php else : ?>

                    <a href="<?php the_permalink(); ?>"><?php echo the_title() ?></a>
                    <p><?php the_content() ?></p>
                    //echo apropriate ammount of notification text in some tag or something...

            <?php
                endif;
                $n++;
                endforeach;
            ?>
	</div>
