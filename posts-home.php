<?php

$homepost_args = array( 'numberposts' => 3, 'category' => 3 );
$homepost_lastposts = get_posts( $homepost_args );

?>

<div class="entry">
	
	<? foreach($homepost_lastposts as $post) : setup_postdata($post); 
	
		$permalink = (has_category('home') && has_category('exclusives')) ? './exclusives' : get_permalink();

	?>
	
	<div class="post clearfix">
		<a href="<? echo $permalink; ?>" title="<?php the_title(); ?>">
			<? echo get_the_post_thumbnail($post->ID,'home-posts-thumb') ?>
		</a>
		<div class="datta">
			<h2><a href="<? echo $permalink; ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			
			<? 
				$sub = getMetas($post->ID,'subtitle'); 
				if($sub != ''){
			?>
			
			<h3><?php echo getMetas($post->ID,'subtitle') ?></h3>
			
			<? } else {}?>
			
			
			<p><?php the_excerpt(); ?></p>
			
			<a href="<? echo $permalink; ?>" class="more-link">Read More →</a>

		</div>
	</div>
	
	<?php endforeach; ?>
	
	<div class="flexslider">
		<div class="instagirl"></div>
		<ul class="rslides"></ul>
	</div>
	
</div>