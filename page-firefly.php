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
					<figure>
						<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/play8.jpg" alt="Golden Eye" />
						<figcaption>Painting by Noël Coward</figcaption>
					</figure>
				</div>
				
				<div class="columnThree">
					<h2>A View to Thrill, on Firefly Hill</h2>
					<h3>Firefly has the most stunning view in the Caribbean. The property has a magical legacy that spans centuries and has been both sacred and strategic, prized by all who have lived there—from the island’s indigenous people, the Taino, to the notorious pirate-turned-governor-turned-posthumous Sir Henry Morgan.</h3>
					<p>In 1948, Noël Coward the celebrated wit, playwright, composer, director, actor, singer and one of the greatest social figures of the 20th century acquired the property. Originally called Lookout, Coward renamed his Jamaican home, Firefly. Firefly, which stands today just as Coward designed it, is a modest, modern house however, its history is grand. Over the 20 year period when Coward was in residence, he entertained the most glamorous personalities of his day, from movie stars to literary greats and even Britain’s Queen Mum, who famously stopped in for lunch on her 1965 trip to Jamaica.</p>
					<p>Firefly is just about five miles, and a 15-minute drive, from GoldenEye. It is the ideal place to throw a big party (it’s especially popular for weddings) or to visit for an relaxing afternoon picnic. Plan to stay for sunset, when the bright pink, dusky blue and deep gold light show in the sky gets under way.</p>
					<p>The front desk will arrange your visit to Firefly.</p>
				</div>
				
			</div><!-- colunas -->

			</article>	
		 </div>	<!-- columns -->
	</div>	<!-- main -->
	
<?php get_footer(); ?>