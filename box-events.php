<?
$events_args = array( 'numberposts' => 4, 'category' => 12 );
$events_lastposts = get_posts( $events_args );
?>

<div class="upcomingEvents">
	<h3>Upcoming Events</h3>

	<? foreach($events_lastposts as $post) : setup_postdata($post); 
		$metas = getMetas($post->ID) ;
	?>

	<p><a href="<? the_permalink() ?>" title="<?  the_title() ?>">
		<strong><?echo $metas['date']?></strong><br/>
		<span class="darkBlue"><strong><?  the_title() ?></strong></span>
		<? the_excerpt() ?>
		</a></p>

	<?php endforeach; ?>

</div>
