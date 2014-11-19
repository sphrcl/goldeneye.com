<?php get_header(); ?>

<? $_page = get_page(get_page_id()); ?>




    <div id="main" role="main" class="clearfix <? echo get_page_name()?>">
		
		<? // echo $_page->post_content; ?> 
		
		
		
		<div class="columns clearfix eat">
		<article class="content left">
			<figure>
				<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/eat1.jpg" title="Poolside at the Bizot Bar" alt="Poolside at the Bizot Bar"/>
				<figcaption>Poolside at the Bizot Bar</figcaption>
			</figure>
			
			<figure>
				<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/eat2.jpg" title="Dining at the Gazebo" alt="Dining at the Gazebo"/>
				<figcaption>Dining at the Gazebo</figcaption>
			</figure>
		</article>	
	 	
		<aside class="left">
			<h4>Our menus feature a bounty of local specialties, from Jamaican-style ackee and saltfish to spicy jerk chicken with rice and peas as well as glorious seasonal fruits and sumptuous desserts.</h4>
			
			<h2>Bizot Bar</h2>
			<h3>On the beach or by the sea!</h3>
			
			<p>On the western arm of Low Cay Beach, Bizot Bar is the spot for stylish low key dining. Located just steps from the sea and our fresh water swimming pool, Bizot Bar serves breakfast and lunch that includes fresh salads, yummy burgers and tasty pastas, as well as famously authentic and delicious Jamaican specialties.</p>
			
			<p>The Bizot Bar is named for French counter-culture connoisseur, Jean-Francois Bizot (1944 - 2007). A journalist and music tastemaker, Bizot founded Radio Nova in Paris and introduced World Music to French audiences. At Bizot Bar, we introduce you to the sounds of Radio Nova, broadcast from France.</p>
				
			<hr/>	
				
			<h2>The Gazebo</h2>
			<h3>In the trees</h3>
			<p>Built in an aerie, tree house-style, the newly designed Gazebo (with lounge and restaurant) serves up dishes with an international flavor. Overlooking both Low Cay Beach and The Lagoon, the Gazebo is the sexy, open-air spot to enjoy cocktails while watching fiery Caribbean sunsets. Dishes range from grilled lobster tail to seasoned rack of lamb, complemented with an international wine list.</p>
		</aside>	
	 </div>	<!-- columns -->
			
		<div class="eatMinorLinks clearfix">
			<article style="width: 48%;">
				<img style="width: 100%;"src="<? echo get_bloginfo("stylesheet_directory") ?>/images/eat3.jpg" title="In Room Dining" alt="In Room Dining"/>
				<h2>In Room Dining</h2>
				<p>For a really delicious treat, try our in-room dining! We’ll deliver breakfast on the veranda of your Lagoon Villa or set a romantic dinner on the porch of your Beach Villa. You decide, we’ll make it happen!</p>
			</article>
			<article style="width: 48%;">
				<img style="width: 100%;" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/eat4.jpg" title="Outdoor Dining" alt="Outdoor Dining"/>
				<h2>Outdoor Dining</h2>
				<p>Private dining by candlelight on the far edge of the Peninsula? Torch-lit beach BBQ with all the Jamaican fixings? Use your imagination and we’ll keep it cooking! </p>
			</article>
			
			<!--<?php

			$post_args = array( 'numberposts' => 1, 'category' => 5 );
			$post_lastposts = get_posts( $post_args );
			
			foreach($post_lastposts as $post) : setup_postdata($post);
			?>
			
			<article>
				<? echo get_the_post_thumbnail($post->ID,'home-posts-thumb') ?>
				<h2><?php the_title(); ?></h2>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>" class="more-link">More Info →</a>
			</article>
			
			<?php endforeach; ?>-->
			
		</div>	
	 
	</div>
		
<?php get_footer(); ?>