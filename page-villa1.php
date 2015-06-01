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
							<h2>One Bedroom Ocean Front Villa </h2>
							<h3>There is a spacious feeling to this one bedroom villa where the rooms flow together informally. The bedroom is nestled under a giant Banyan tree and features a queen size bed, a claw foot tub and an exotic outdoor rain shower. The separate living room and kitchen area open onto a private cut-stone patio with picnic table for al fresco dining.</h3>		
						</div>
	
						<div class="columnTwo">
							<div class="reserv">
								<a target="_blank" href="https://gc.synxis.com/rez.aspx?Hotel=19292&Chain=7576"  class="btGreen">Reservations »</a>
								<!-- <a href="https://www.goldeneye.com/booking/"  class="btGreen">Reservations »</a>  -->
								<p>1-800-OUTPOST</p>
							</div>
						</div>		
					</div>

					<hr/>

					<div class="columnFive">

						<!--<div class="floorPlan"><a href="<? echo get_bloginfo("stylesheet_directory") ?>/downloads/ls-floor-plans.pdf" target="_blank"></a></div>-->


					<h5>Features:</h5>
										
					<ul>
						<li>Queen size bedroom</li>
						<li>Indoor antique claw foot bathtub, large foldout doors leading to an outdoor tropical garden rain shower</li>
						<li>Separate lounge/entertainment area, kitchen with garden verandah overlooking the Caribbean Sea. Note: lounge area could fit one small single bed</li>
						<li>Second bamboo shower/bathroom between lounge and bedroom</li>
						<li>Private tropical garden patio with amazing sea-view</li>
						<li>Logitech Squeezebox sound system</li>
						<li>37-inch flat screen television with over 200 International channels</li>
					</ul>
					
					<span class="darkBlue"><strong>Living Room</strong></span>
					<ul>
						<li>Sofa with Royal Hut decorative pillows</li>
						<li>37-inch flat screen television with over 200 international channels</li>
					</ul>
							
								
					<span class="darkBlue"><strong>Kitchen</strong></span>
					<ul>
						<li>Your welcome gift of Blackwell Rum, awaits your arrival</li>
						<li>Kitchen features polished concrete countertops</li>
						<li>Refrigerator (fully stocked with Red Stripe beer plus Ting and other beverages and tasty snacks unique to Jamaica)</li>
						<li>Brita water filter</li>
						<li>Bodum coffee press (with fresh Blue Mountain Jamaican coffee) and kettle with a selection of teas</li>
					</ul>

					<span class="darkBlue"><strong>Outdoor area</strong></span>
					<ul>
						<li>Cut-stone patio with picnic table</li>
						<li>Outdoor dining table and chaise lounges</li>
					</ul>
								
					<span class="darkBlue"><strong>Throughout cottage interior</strong></span>
					<ul>
						<li>Complimentary Wi-Fi (available in all rooms and throughout the property)</li>
						<li>Overhead fans</li>
						<li>Panasonic Inverter air conditioning technology (utilizes 40% less energy)</li>
					</ul>		
						
					<p><em><u>Note</u>: Access to the sea and lagoon is only a 2 minute walk away. Additional rollaway bed available upon request.</em></p>
					
					</div>

				</div><!-- colunas -->



			</article>	
			
		 </div>	<!-- columns -->

		
	</div>
		
<?php get_footer(); ?>