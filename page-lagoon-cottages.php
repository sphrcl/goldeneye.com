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
							<h2>Lagoon Cottages</h2>
							<h3>Each Lagoon Cottage has its own private dock extending four feet over the lagoon and a brightly colored kayak that’s tied up and waiting for you. Each cottage is built into lush natural landscape with direct access to the lagoon from your veranda. All are just steps away from Low Cay Beach.</h3>		
						</div>
	
						<div class="columnTwo">
							<div class="reserv">
								<!-- <a target="_blank" href="https://gc.synxis.com/rez.aspx?Hotel=19292&Chain=7576"  class="btGreen">Reservations »</a> -->
								<a href="https://www.goldeneye.com/booking/"  class="btGreen">Reservations »</a>
								<p>1-800-OUTPOST</p>
							</div>
						</div>		
					</div>

					<hr/>

					<div class="columnFive">

						<div class="floorPlan"><a href="<? echo get_bloginfo("stylesheet_directory") ?>/downloads/ls-floor-plans.pdf" target="_blank"></a></div>


						<h5>Features:</h5>

						<ul>
							<li>Total living area of 720-square feet</li>
							<li>Custom-designed king-size bed outfitted with Royal Hut 400-thread count handmade linens (each bed faces out onto the water and overlooks Santa Maria Island)</li>
							<li>287-square foot veranda crafted from sustainable Brazilian hardwood</li>
							<li>Outdoor chaise lounges on dock and veranda</li>
							<li>Custom-designed furniture including writing desk and oversized comfy club chair</li>
							<li>32-inch flat screen television with over 200 international channels</li>
							<li>Your welcome gift of Blackwell Rum, awaits your arrival</li>
							<li>Minibar stocked with Red Stripe beer plus Ting and other beverages and tasty snacks unique to Jamaica</li>
							<li>Overhead fans</li>
							<li>Logitech Squeezebox sound system stocked with a catalogue of Island Records music</li>
							<li>Complimentary Wi-Fi (available in all rooms and throughout the property)</li>
							<li>Panasonic Inverter air conditioning technology (utilizes 40% less energy)</li>
							<li>Bodum coffee press (with fresh Blue Mountain Jamaican coffee) and kettle with a selection of teas</li>
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

						<p><em><u>Note</u>: Lagoon Cottages accommodate two adults and, upon request, an infant crib.</em></p>	

					</div>

				</div><!-- colunas -->



			</article>	
			
		 </div>	<!-- columns -->

		
	</div>
		
<?php get_footer(); ?>