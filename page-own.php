<?php 
global $wpcf7_contact_form;
get_header(); 
?>
<? 
$_page = get_page(get_page_id()); ?>




    <div id="main" role="main" class="clearfix <? echo get_page_name()?>">
		
		<? //echo $_page->post_content; ?> 
		
		
		 <div class="columns clearfix own">
			<div id="carrosselOwn" class="carrossel">
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/own1.jpg" alt="Golden Eye"/>
					<figcaption>Two bedroom beach cottage exterior</figcaption>
				</figure>
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/own2.jpg" alt="Golden Eye"/>
					<figcaption>Two bedroom lagoon cottage upstairs interior</figcaption>
				</figure>
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/own3.jpg" alt="Golden Eye"/>
					<figcaption>Two bedroom beach cottage upstairs interior</figcaption>
				</figure>
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/own4.jpg" alt="Golden Eye"/>
					<figcaption>Lagoon cottage set table</figcaption>
				</figure>
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/own5.jpg" alt="Golden Eye"/>
					<figcaption>One bedroom beach cottage exterior</figcaption>
				</figure>
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/own6.jpg" alt="Golden Eye"/>
					<figcaption>One bedroom beach cottage interior</figcaption>
				</figure>
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/own7.jpg" alt="Golden Eye"/>
					<figcaption>One and two bedroom beach cottage front porch</figcaption>
				</figure>
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/own8.jpg" alt="Golden Eye"/>
					<figcaption>Lagoon suite exterior</figcaption>
				</figure>
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/own9.jpg" alt="Golden Eye"/>
					<figcaption>Lagoon suite interior</figcaption>
				</figure>
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/own10.jpg" alt="Golden Eye"/>
					<figcaption>View from villa</figcaption>
				</figure>
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/own11.jpg" alt="Golden Eye"/>
					<figcaption>View from Villa - exterior</figcaption>
				</figure>
			</div>

			<article class="content">
				<div class="infoBig">
					<h5>Own at GoldenEye:</h5>
					<h4>Stay as long as you like</h4>
					<p>The ultimate pleasure is owning your own home at GoldenEye. Set in a tropical forest, including 3 miles of coastline with coral cliffs, sheltered beaches, secluded coves and a lagoon. Nowhere else in Jamaica will you find a property this beautiful within 5 minutes of an international airport (Ian Fleming International)! See below to learn more about real estate opportunities at GoldenEye.</p>
				</div>
				<div class="btsOwn">
					<a href="<? echo get_bloginfo("url") ?>/faq" class="btOrange">FAQ »</a>
				</div>

				<hr/>

				<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/own3.jpg" alt="Golden Eye" />
				<div class="left">
					<div class="info">
						<h3>Lagoon Lots</h3>
						<p>Dotted along the emerald lagoon, these large lots each come with a unique 750 sq ft Lagoon Suite that can be expanded to a 3 or 4 bedroom villa-type accommodation.</p>
						<p>Prices Ranging from: US$ 1,200,000 - $1,500,000</p>
					</div>
				</div>
				<div class="btsOwn">
					<a href="http://www.goldeneye.com/wp-content/uploads/sites/15/2015/03/GE-Coldwell-Sales-Sheets-Lagoon-Lot.pdf" target="_blank" class="btGreen">Floor Plan + Facts »</a>
				</div>

				<hr/>

				<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/own4.jpg" alt="Golden Eye" />
				<div class="left">
					<div class="info">
						<h3>One Bedroom Beach Cottages</h3>
						<p>Casually chic, these one bedroom beach cottages offer spectacular views, luxurious details and an environmentally friendly design. Jalousies open the rooms wide to the breeze and the sound of the sea.</p>
						<p>List Price US $1,700,000</p>
					</div>
				</div>
				<div class="btsOwn">
					<a href="<? echo get_bloginfo("stylesheet_directory") ?>/downloads/1bc-fplan-facts.pdf" target="_blank" class="btGreen">Floor Plan + Facts »</a>
				</div>

				<hr/>

				

				<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/own2.jpg" alt="Golden Eye" />
				<div class="left">
					<div class="info">
						<h3>Villa 2</h3>
						<p>This two bedroom villa is nestled in the tropical forest that runs along the cliff of the original GoldenEye property. Privately positioned, overlooking the Caribbean Sea, this is indoor / outdoor living at its most sublime. </p>
						<p>List Price US $2,750,000</p>
					</div>
				</div>
				<div class="btsOwn">
					<a href="<? echo get_bloginfo("stylesheet_directory") ?>/downloads/v2-fplan-facts.pdf" target="_blank" class="btGreen">Floor Plan + Facts »</a>
				</div>

				<hr/>
               
				<h3>Sales Inquiries</h3>

<?php echo do_shortcode("[contact-form-7 id=2544]"); ?>
				
				<?

				if($_SESSION['mail'] == 'ok'){
					echo "<script> alert('Email sent'); </script>";
				}
				if($_SESSION['mail'] == 'erro'){
					echo "<script> alert('Email not sent, try again please!'); </script>";
				}
				unset($_SESSION['mail']);
				?>
			</article>	
		 </div>	<!-- columns -->
	</div>
		
<?php get_footer(); ?>