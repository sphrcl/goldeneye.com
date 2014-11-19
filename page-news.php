<?php get_header(); ?>

<? 

$_page = get_page(get_page_id());

$args = array( 'category' => '7,10', 'orderby' => 'title' );
$lastposts = get_posts( $args );
$pages = intval($wp_query->max_num_pages);

?>




    <div id="main" role="main" class="clearfix news">
		
		<div class="columns clearfix">

			<article class="content left">
				<a href="<? echo get_bloginfo("url") ?>/news" title="News & Events"><img src="<?php echo get_bloginfo("stylesheet_directory") ?>/images/news-title.jpg" /></a>
			
				
				<?php
				$wp_query->query('cat=10,7'.'&paged='.$paged.'&posts_per_page=5&orderby=date&order=DESC');

				if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				
				<?
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
					
					<div class="left">
						<? previous_posts_link('« Newer',0); ?>
					</div>
					
					<div class="right">
						<? next_posts_link('Older »',0); ?>
					</div>
					
					
				</div>
				
			</article>	

			<? get_sidebar('news')?>

		 </div>	<!-- columns -->

		
	</div>
		
<?php get_footer(); ?>