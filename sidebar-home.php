<aside>
	
	<?php query_posts('post_type=popup');
			if(have_posts()) : while(have_posts()) : the_post(); 
			$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
	?>
	
	<div class="stamp">
		<a class="inline" href="#inline_<?php echo $post->ID ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"/></a>
		
		<div style='display:none'>
			<div id="inline_<?php echo $post->ID ?>" class="inlinecontent">
				<?php the_content(); ?>
			</div>
		</div>

	</div>
	
	<?php endwhile; endif; wp_reset_query(); ?>
	
	<div class="stamp">
		<a href="http://islandoutpost.eweddingcalendar.com/Wedding-Calendar-Home" title="Weddings at GoldenEye"><img src="https://www.goldeneye.com/wp-content/uploads/sites/15/2014/10/GE_weddingbutton_alt.jpg" alt="Weddings at GoldenEye"/></a>
		
	</div>
   

        <div class="stamp">
		<a href="https://www.goldeneye.com/own/" title="Story of Golden Eye"><img style="padding-top: 20px" src="https://www.goldeneye.com/wp-content/uploads/sites/15/2013/12/liveingoldeneye1.jpg" alt="Story of Golden Eye"/></a>
		<a class="more-link" href="https://www.goldeneye.com/own/">Read More →</a>
	</div>
       

	<div class="stamp">
		<a href="<? echo get_bloginfo("url") ?>/about-us" title="Story of Golden Eye"><img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/selo.jpg" alt="Story of Golden Eye"/></a>
	</div>

	
    
	<div class="stamp">
		<a href="http://www.packforapurpose.org/destinations/caribbean/jamaica/goldeneye-hotel-resort/" title="Story of Golden Eye"><img style="padding-top: 40px" src="https://www.goldeneye.com/wp-content/uploads/sites/15/2013/12/pack4purpose.jpg" alt="Pack for a Purpose"/></a>		
	</div>
	
</aside>
