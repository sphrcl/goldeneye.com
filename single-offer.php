<? 

$id = get_the_ID();
$post = get_post($id);
$categories = get_the_category($id);
$author = get_userdata($post->post_author);
$metas = getMetas($id) ;
$postImages = getPostImages($post->post_content,'img','src');
$thumb = get_the_post_thumbnail($id,'home-posts-thumb');
$attachs = getAttachments($id);

$next_post = get_adjacent_post(true,'',false)->post_name;
$prev_post = get_adjacent_post(true,'',true)->post_name;
$url_next_post = home_url() . '/' . $next_post;
$url_prev_post = home_url() . '/' . $prev_post;

?>

<?php get_header(); ?>

    <div id="main" role="main" class="clearfix offer">
		
		<!--h1>Post title: <b></b></h1>
		<h3><?php echo $metas[0]->subtitle; ?></h3>
		<h4>Post date: <b><? echo $post->post_date; ?> </b></h4>
		<h5>Post category: <b><? echo $categories[0]->cat_name; ?> </b></h5>
		<p>Post author: <b><? echo $postImages[0]['src'];//$author->user_login; ?> </b></p>
		<p>Num comments: <b><? echo $post->comment_count; ?> </b></p>
		<p>Post id: <br/><br/><? //trace($attachs); ?></p-->
		
		
		<div class="columns clearfix own offers singleoffer">
			
			<?php if(have_posts()) : while(have_posts()) : the_post(); 
				$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
				?>
			
			<article class="content">
				
				<div class="offer">
					<div class="offerimg">
						<img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>" />
					</div>
					<div class="left">
						<div class="info">
							<h1 class="offertitle"><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
					</div>

				</div>
				
			</article>	
			
			<?php endwhile; endif; wp_reset_query(); ?>


		 </div>	<!-- columns -->
		
	</div>
		
<?php get_footer(); ?>