
<?php get_header(); ?>
<? $_page = get_page(get_page_id()); ?>



    <div id="main" role="main" class="clearfix <? echo get_page_name()?>">
		
		<? //$_page->post_content; ?> 
		
		<div class="columns clearfix occasions">
		
		<aside class="columnThree left">
			<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/occasions1.png" alt="Come to Golden Eye"/>
			
			<h2>Weddings</h2>
			<h3>at GoldenEye</h3>
			
			<p>Whether it’s the beaches at GoldenEye, the gardens at Fleming Villa, or hilltop at Firefly, our exotic locations are what make every wedding we create stunning and unique. From your rehearsal dinner to wedding ceremony to farewell brunch and honeymoon, we’ll design a series of unforgettable feasts and fun activities for your guests. Flowers, photos, music, we’ll ensure that every detail of your wedding is distinctive and custom-tailored to your wishes. Tell us what they are and we’ll take it from there. What remains a constant? The sophisticated level of service we offer and the generous yet discreet hospitality of our hand-picked staff. Find out more by visiting our <a href="http://islandoutpost.eweddingcalendar.com/Wedding-Calendar-Home" target="_blank" style="text-decoration: none;">online wedding calendar</a> as well as our <a href="http://islandoutpost.honeymoonwishes.com/" target="_blank" style="text-decoration: none;">honeymoon registry.</a></p>
		
			<hr/>

			<h2>Special Events</h2>
			<h3>at GoldenEye</h3>
			<p>Planning a destination birthday celebration? A getaway for friends? A family reunion? We’ll make sure your celebration is as simple to pull off as it is flawless and fun for you and your guests. Don’t stress. Tell us what you have in mind and we’ll make it happen. From water sports to local excursions to delicious menus that delight each member of your group, we can promise that a special event at GoldenEye is even more memorable than you might have even imagined.</p>
		</aside>	
	 	
		<article class="content left">
			<figure>
				<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/occasions2.jpg" alt="Come to Golden Eye"  />
			</figure>
			<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/occasions3.jpg" alt="Come to Golden Eye"/>
			<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/occasions4.jpg" alt="Come to Golden Eye"/>
		</article>	
	 </div>	<!-- columns -->

		
	</div>
		
<?php get_footer(); ?>