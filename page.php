<?php 
/* 
Basic Page Template 
*/
?>

<?php
$id = get_page_id();
$_page = get_page($id);
$categories = get_the_category($id);
$metas = getMetas($id) ;
$postImages = getPostImages($_page->post_content,'img','src');
$thumb = get_the_post_thumbnail($id,'banner-top-thumb');
$attachs = getAttachments($id);

?>

<?php get_header(); ?>


    <div id="main" role="main" class="clearfix">
		
		<div class="columns clearfix page">
			
			<?php if(have_posts()) : while(have_posts()) : the_post(); 
				$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
				?>
			
			<article class="content">
				
				<div class="page">
					<?php if ($imgsrc) { ?>
					<div class="pageimg">
						<img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>" />
					</div>
					<?php } ?>
					<div class="pagecontent">
						<h1 class="pagetitle"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>

				</div>
				
			</article>	
			
			<?php endwhile; endif; wp_reset_query(); ?>


		 </div>	<!-- columns -->
		
	</div>
		
<?php get_footer(); ?>