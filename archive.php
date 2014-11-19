<?php 
wp_reset_query();
$wp_query->query['cat'] = '7,10';
get_header(); 

?>


    <div id="main" role="main" class="clearfix news">
		
		<div class="columns clearfix">

			<article class="content left">
				
				<?php 
				
				//$query_original = $wp_query;
				$nova_query = new WP_Query(array_merge($wp_query->query, array('cat'=>'7,10','posts_per_page'=>10)));
				
				  if ( $nova_query->have_posts()) while ($nova_query->have_posts()) : $nova_query->the_post();
				  $do_not_duplicate = $post->ID;
				
					$postImages = getPostImages($post->post_content,'img','src'); 
					$date = wp_date( $post->post_date, 'F, d-Y');
					
					if($postImages[0]['alt'] != $postImages[0]['title']){
						$caption = $postImages[0]['alt'];
					}
					else{
						$caption = "";
					}
				?>
				
				<div class="post">
					
					<figure>
						<img src="<? echo $postImages[0]['src']; ?>" alt="<? echo $postImages[0]['alt']; ?>" title="<? echo $postImages[0]['title']; ?>"/>
						<figcaption><? echo $caption; ?></figcaption>
					</figure>

					<h2><? the_title(); ?></h2>
					<h3><?echo $date;?></h3>
					<p><? the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="more-link">Read More →</a>
					
				</div>
				
				<?php endwhile; // end of the loop. ?>
				
				<div class="pagination">
					
					<? posts_nav_link(
							'', 
							'<div class="left">« Newer</div>', 
							'<div class="right">Older »</div>'
							); ?>
					
				</div>

			</article>	

			<? get_sidebar('news')?>

		 </div>	<!-- columns -->

		
	</div>
		
<?php get_footer(); ?>