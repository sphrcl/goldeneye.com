<?php get_header(); ?>

<? 
$_page = get_page(get_page_id()); 

$args = array( 'category' => 9 );
$lastposts = get_posts( $args );

$args = array(
		'child_of' => 13,
		'sort_order' => 'ASC',
		'parent' => -1,
		'post_type' => 'page',
		'post_status' => 'publish'
);

$subpaginas = get_pages( $args );

//trace($subpaginas);

?>

    <div id="main" role="main" class="clearfix <? echo get_page_name()?>">
		
		<? //echo $_page->post_content; ?> 
		
		<div class="columns clearfix spa">
			<div id="carrosselSpa" class="carrossel">
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/spa1.jpg" alt="Golden Eye"/>
					<figcaption>FieldSpa at GoldenEye.</figcaption>
				</figure>	
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/spa2.jpg" alt="Golden Eye"/>
					<figcaption>Treatment room at the FieldSpa.</figcaption>
				</figure>	
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/spa3.jpg" alt="Golden Eye"/>
					<figcaption>Our most requested deep soak Bush Bath with Pimento and Leaf-of-Life.</figcaption>
				</figure>	
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/spa4.jpg" alt="Golden Eye"/>
					<figcaption>Healing herbs are grown at our own 2,500 acre family farm, Pantrepant.</figcaption>
				</figure>	
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/spa5.jpg" alt="Golden Eye"/>
					<figcaption>FieldSpa treatment room at sunset.</figcaption>
				</figure>	
				<figure class="item">
					<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/slider/spa6.jpg" alt="Golden Eye"/>
					<figcaption>Morning yoga at the salt water pool.</figcaption>
				</figure>	
					
			</div>
		<aside class="left">
			<img src="<? echo get_bloginfo("stylesheet_directory") ?>/images/spa2.jpg" alt="Beautiful, sexy - Golden Eye"/>
		</aside>	
	 	
		<article class="content left">
			<h2>Make your FieldSpa reservation</h2>
			<h3>876-622-9145 or email <a href="mailto:info@goldeneye.com?subject=FieldSpa reservation from Golden Eye Webpage" target="_blank">info@goldeneye.com</a></h3>
			<p>To spend time in our FieldSpa is to exist in a more mindful and peaceful tempo, a cadence that allows us to breathe more deeply, live more slowly and more fully when returning to work and home. With its lagoon's edge cottage and open-to-the air treatment rooms, our spa without walls is a sanctuary for massage, salt scrubs, skin brightening facials, herbal wraps, and energy work. So built into the natural landscape, guests can kayak or swim through the lagoon to arrive at the spa. In room treatments are also available. The fieldSpa shares an approach to living that enlivens with energy, happiness, and health. </p>
			
			<br/>
			
			<a href="<?php echo get_post_meta($post->ID, 'io_spamenu', true); ?>" target="_blank" class="btOrange" title="Spa Menu">Spa Menu »</a>
			
			<hr/>
			
			
			<? foreach($subpaginas as $page){
				$metas = getMetas($page->ID);
			?>
			
			<article class="border">
				<? echo get_the_post_thumbnail($page->ID,'spa-thumb'); ?>
				
				<h5><?php echo $page->post_title; ?></h5>
				<p><?php echo $metas['excerpt']; ?></p>
	
				<a href="<?php echo $page->post_name; ?>" class="more-link">Read More →</a>
			</article>
			

			
			<?php }; ?>
			
		</article>	
		
	 </div>	<!-- columns -->

		
	</div>
		
<?php get_footer(); ?>