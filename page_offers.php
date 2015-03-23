<?php 
/* 
Template Name: Offers
*/
?>

<?php get_header(); ?>

    <div id="main" role="main" class="clearfix <? echo get_page_name()?>">
		
		<div class="columns clearfix own offers">
		
			<div id="carrosselOwn" class="carrossel">
			
				<?php if(have_posts()) : while(have_posts()) : the_post(); 
				$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
				?>
				
				<figure class="item">
					<img class="borderRadius" src="<?php echo $imgsrc[0]; ?>" alt="Golden Eye"/>
					<figcaption></figcaption>
				</figure>
				
				<?php endwhile; endif; wp_reset_query(); ?>
				
			</div>

			<article class="content">
			
				<?php query_posts('post_type=offer');
				if(have_posts()) : while(have_posts()) : the_post(); 
				$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
				?>
			
				<div class="offer">
					<div class="offerimg">
						<img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>" />
					</div>
					<div class="left">
						<div class="info">
							<a href="<?php the_permalink(); ?>"><h3 class="offertitle"><?php the_title(); ?></h3></a>
							<?php the_content(); ?>
						</div>
					</div>

				</div>
				
				<?php endwhile; endif; wp_reset_query(); ?>

			</article>	
		</div>	<!-- columns -->
	</div>
		
<?php get_footer(); ?>