<?php

$magazine_args = array( 'numberposts' => 1, 'category' => 4 );
$magazine_lastposts = get_posts( $magazine_args );

foreach($magazine_lastposts as $post) : setup_postdata($post); ?>

	<div class="tatler">
		<a href="./press" title="<?php the_title(); ?>">
			<? echo get_the_post_thumbnail($post->ID,'home-magazine-thumb') ?>
		</a>
		 <div class="texts">
			<h2><?php the_title(); ?></h2>
			<date><? echo wp_date($post->post_date,"F, Y") ?></date>
			<p><?php the_excerpt(); ?></p> 
			<a href="./press" class="more-link">See More Press →</a>
		 </div>
	</div>

<?php endforeach; ?>
