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




    <div id="main" role="main" class="clearfix stay">
		
		 <div class="columns clearfix">

			<?php get_template_part("content","stay-menu") ?>

			<article class="content left">
				
				<?php get_template_part("content","stay-carrossel") ?>

				<div class="social">
					<div class="fb-like" data-href="http://www.goldeneye.com" data-send="true" data-width="460" data-show-faces="false"></div>
					<g:plusone size="small"></g:plusone>
				</div>

				<div class="colunas clearfix">
					<div class="clearfix">
						<div class="columnOne">
								<h2>One Bedroom Beach and Lagoon Villas</h2>
								<h3>Five One Bedroom Beach Villas open directly onto Low Cay Beach. The One Bedroom Lagoon Villa sits directly on GoldenEye’s four-acre signature lagoon. All feature a large porch, wooden louvred windows and wide double doors. These private accommodations invite the kind of indoor/outdoor living GoldenEye is famous for.</h3>		
							</div>
						<div class="columnTwo">
							<div class="reserv">
								<a target="_blank" href="https://gc.synxis.com/rez.aspx?Hotel=19292&Chain=7576"  class="btGreen">Reservations »</a> 
								<!-- <a href="https://www.goldeneye.com/booking/"  class="btGreen">Reservations »</a> -->
								<p>1-800-OUTPOST</p>
							</div>
						</div>		
					</div>

					<hr/>

					<div class="columnFive">

						<div class="floorPlan"><a href="<? echo get_bloginfo("stylesheet_directory") ?>/downloads/1bc-floor-plans.pdf" target="_blank"></a></div>


						<h5>Features:</h5>

						<ul>
							<li>Total living area of 1,100 square feet</li>
							<li>Custom-designed king-size bed outfitted with Royal Hut 400-thread count handmade linens</li>
							<li>Custom-designed furniture including writing desk</li>
							<li>Logitech Squeezebox sound system stocked with a catalogue of Island Records music</li>
						</ul>

						<span class="darkBlue"><strong>Living Room</strong></span>
						<ul>
							<li>Queen-size daybed and over-sized comfy club chair with Royal Hut decorative pillows</li>
							<li>37-inch flat screen television with over 200 international channels</li>
						</ul>


						<span class="darkBlue"><strong>Indoor / Outdoor Bathroom & Walk-in Closet Area</strong></span>
						<ul>
							<li>GoldenEye signature deep, claw-foot tub</li>
							<li>Double sinks</li>
							<li>Private outdoor shower</li>
							<li>Bath and beauty products made using local wild-crafted botanical ingredients</li>
							<li>Two Royal Hut hand-dyed batik robes</li>
							<li>Hairdryer</li>
							<li>Iron/ironing board</li>
							<li>Safebox</li>
						</ul>

						
						<span class="darkBlue"><strong>Kitchen</strong></span>
						<ul>
							<li>Your welcome gift of Blackwell Rum, awaits your arrival</li>
							<li>Kitchen features polished concrete counter tops</li>
							<li>Refrigerator from Smeg’s 50’s style retro line (fully stocked with Red Stripe beer plus Ting and other beverages and tasty snacks unique to Jamaica)</li>
							<li>Oven and stove top designed by Italian architect, Renzo Piano</li>
							<li>Brita water filter</li>
							<li>Bodum coffee press (with fresh Blue Mountain Jamaican coffee) and kettle with a selection of teas</li>
						</ul>

						<span class="darkBlue"><strong>Outdoor area</strong></span>
						<ul>
							<li>255-square foot front porch</li>
							<li>Outdoor dining table, card table, chaise lounges and hammock.</li>
							<li>Private chaise lounges, table and sun umbrella in front of each One Bedroom Beach Villa</li>
						</ul>

						<span class="darkBlue"><strong>Throughout villa interior</strong></span>
						<ul>
							<li>Complimentary Wi-Fi (available in all rooms and throughout the property)</li>
							<li>Overhead fans</li>
							<li>Panasonic Inverter air conditioning technology (utilizes 40% less energy)</li>
						</ul>		

						<p><em><u>Note</u>: Our One Bedroom Lagoon Villa has a stone deck with table and direct access to the lagoon.</em></p>
						<p><em>All One Bedroom Villas accommodate two adults and can sleep up to two children on the queen-sized daybed in living room.</em></p>	


					</div>

				</div><!-- colunas -->



			</article>	
			
			 
		 </div>	<!-- columns -->

		
	</div>
		
<?php get_footer(); ?>