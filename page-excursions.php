
<?php get_header(); ?>

<? 

$id = get_page_id();
$_page = get_page($id);
$categories = get_the_category($id);
$metas = getMetas($id) ;
$postImages = getPostImages($_page->post_content,'img','src');
$thumb = get_the_post_thumbnail($id,'banner-top-thumb');
$attachs = getAttachments($id);

?>



    <div id="main" role="main" class="clearfix playIns">
		
		 <div class="columns clearfix">

			<?php get_template_part("content","play-menu") ?>

			 <article class="content left">
				
				 <?php get_template_part("content","play-carrossel") ?>
				
			<div class="colunas clearfix">	
				
				<div class="columnFour">
					<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/play6.jpg" alt="Golden Eye" />	
				</div>
				
				<div class="columnThree fishing">
					<h2>Out and About Near GoldenEye</h2>
					
					<h4 style="border: none" class="exc">It’s true. You may never want to leave GoldenEye. But we encourage that you do. There are so many magical Jamaican experiences for you to have while staying with us. We’ll arrange for you any excursion you see below (and even those that aren’t listed, so please tell us what you have in mind!).</h4>
					
					<hr/>
					
					<p><u>Jet-Ski Safari</u><br/>
					GoldenEye is famous for its jet skiing. Hop on one of our Yamaha jet skis, head to the lagoon and take off into the wide open waves of Oracabessa Bay. On our safari you can discover the exquisite untouched landscape of Robins Bay with its beautiful navy blue waters and pristine black sand beach that can only be accessed by sea. Wade through the river and you’ll find dramatic Tacky Falls with its private and hidden swimming hole.</p>
					
					<p><u>Golf</u><br/>
					There are two ideal options for golfing in the area are:</p>
					
						<p class="ML"><span class="darkBlue"><strong>Sandals Ocho Rios Golf &amp; Country Club</strong></span><br/>
						Approximately 30 minutes from GoldenEye, this par 71, 660 yard, 18 hole course has fairways rippling up and down hills fringed by forest, a driving range, putting green, clubhouse, bar, proshop and snack bar. Club rentals available and lessons offered.</p>
						
						<p class="ML"><span class="darkBlue"><strong>Runaway Bay Golf &amp; Country Club</strong></span> <br/>
						One of the best courses in the area and approximately 50 minutes from GoldenEye.</p>

					<p><u>Scuba Diving </u><br/>
					Take a trip to Sans Souci to explore the magical wonders beneath the Caribbean Sea from shallow reefs for beginners to more challenging dives with maximum depths of 60 feet for certified open water divers.</p>
					
					<p><u>Deep Sea Fishing</u><br/>
					The biggest fish ever hooked near GoldenEye was a 585 lb Blue Marlin. That’s a lot of sushi!</p>
					
					<p><u>Cranbrook Flower Farm Botanical Garden, Hike and Picnic</u><br/>
					20 minutes west of Ocho Rios, is the 130 acre botanical garden complete with theme gardens, a hothouse orchid display, pools, a zip line, and lush lawns fringed by banks of tropical flowers.</p>

					<p><u>River Tubing at Spanish Bridge, White River Valley</u><br/>
					This 19th century Spanish Bridge is an idyllic spot on the White River, high in the hills of St. Mary – approx. a 30 minute drive from GoldenEye.  Experienced tubing guides will take you on a breathtaking journey down the White River.</p>  
					
					<p><u>Horseback Ride N’ Swim at Chukka Cove, St. Ann</u><br/>
					Enjoy the refreshing breeze of the Caribbean Sea as you horseback ride along the charming coastline of to Chukka Beach. Experienced guides will educate you on our rich history, culture, flora and fauna.</p>
					
					<p><u>Dunn’s River Falls</u><br/>
					Let the waterfalls crash over you as you climb up 600 feet where the river empties into the sea. It’s an exhilarating experience. Note: there may be too many tour buses, but it’s still a must see.</p>

					<p><u>Dolphin’s Cove</u><br/>
					A natural cove surrounded by 5 acres of tropical rain forest, visitors have the opportunity to interact and “swim with” the dolphins, enjoying the thrill of these amazing animals.</p>
					
					<p><u>Mystic Mountain</u><br/>
					The Mystic Mountain features over 100 acres of land stretching from the coast to its peak at 700 feet above sea level. This family friendly attraction for all ages, provides ample opportunities to view and explore the unique seaside tropical forest ecosystem. Tours include the Sky Explorer chair lift, the Bobsled Jamaica ride, and the Zip Line Adventure.</p>
					
					<p><u>Day Trip to Ocho Rios</u><br/>
					Ocho Rios is approximately 20 minutes from GoldenEye. An excursion to Ocho Rios may include:</p>
					
						<p class="ML"><span class="darkBlue"><strong>Wassi Art</strong></span><br/>
						A pottery studio in the Great Pond district with many local artists and craftsmen. Environmentally friendly, they process their own clay and use clean paints and glazes.</p>
						
						<p class="ML"><span class="darkBlue"><strong>Fern Gully</strong></span><br/>
							Take a drive through this 3-mile canyon of an old watercourse with hundreds of varieties of ferns, planted around 1880.</p>
						
						<p class="ML"><span class="darkBlue"><strong>Harmony Hall Art Gallery</strong></span><br/>
						Just east of Ocho Rios, this charming building dates from 1886. Exhibition season runs mid November through Easter and features a roster of Jamaica’s most interesting contemporary artists.  </p>
						
						<p class="ML"><span class="darkBlue"><strong>Island Village</strong></span><br/>
						Island Village is a culture driven theme park right next to the Cruise Ship Pier in the heart of Ocho Rios. This is where you will find the best shopping options for Jamaican crafts, Duty Free, Coffee & Cigars. Other Island highlights include Jimmy Buffet’s Margaritaville.</p>
					
<p><u>Trip to the Blue Mountains and Strawberry Hill</u><br/>
The Blue Mountains are one of the world’s most mystical landscapes. More than just where Jamaica’s most famous coffee comes from, the Blue Mountains are home to Strawberry Hill, another jewel in the crown of the Island Outpost hotels. At 3,100 feet about sea level, to spend a night or two in the Blue Mountains is to experience a Jamaica you never knew existed.</p>
				</div>
			</div><!-- colunas -->
			</article>	
		 </div>	<!-- columns -->
	</div>	<!-- main -->
		
<?php get_footer(); ?>