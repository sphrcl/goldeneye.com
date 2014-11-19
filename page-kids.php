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
					<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/play4.jpg" alt="Golden Eye" />	
				</div>
				
				<div class="columnThree fish">
					<h2>Kids Activities</h2>
					
					<h4>Families with children of all ages are <br>
						welcome at GoldenEye! There are<br>
						more than 30 acres of gardens, woods,<br> 
						lagoons, caves and beaches for them<br>
						to explore. Note: For after dinner fun,<br>
						there is a huge selection of DVDs in the<br>
						front office. Kids love watching<br> 
						the James Bond movies over and over<br> 
						(and over) again.</h4>
					
					<p><u>Adventure by Sea</u><br/>
					Our trained lifeguards and skilled instructors will supervise your child’s experience, teaching them water safety, snorkeling, and kayaking.</p>
					
					<p><u>Coconut Carving with Ramsey</u><br/>
					A project children adore – from finding the right coconut on the beach to having a souvenir from a trip they will never forget.</p>
					
					<p><u>Art Classes with Tukula Ntama</u><br/>
					Well known local artist and conservationist, Tukula Ntama, teaches how to paint Mosaics, Collages, and Fabric Printing. She is responsible for all of the beautiful driftwood creations that surround GoldenEye.</p>
					
					<p><u>Jewelry and Doll Making with Mama Orah</u><br/>
					Orah El is a master potter, jewelry maker, painter and Yoga teacher, but her greatest passion is working with children to inspire and empower them through the arts.</p>					
				</div>
			</div><!-- colunas -->

			</article>	
		 </div>	<!-- columns -->
	 </div>	<!-- main -->
		
<?php get_footer(); ?>