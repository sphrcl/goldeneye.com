<?php get_header(); ?>

<? 

$id = get_page_id();
$_page = get_page($id);
$categories = get_the_category($id);
$metas = getMetas($id);
$postImages = getPostImages($_page->post_content,'img','src');
$thumb = get_the_post_thumbnail($id,'exclusives-thumb');
$attachs = getAttachments($id);

$args = array( 'category' => 8 );
$lastposts = get_posts( $args );


?>




    <div id="main" role="main" class="clearfix <? echo get_page_name()?>">
		
		<? //echo $_page->post_content; ?> 
		
		
		<div class="columns clearfix exclusives">
		<img class="borderRadius" src="<? echo get_bloginfo("stylesheet_directory") ?>/images/exclusives1.jpg" alt="Golden Eye Exclusives"/>

		<aside class="left">
			<? echo $thumb; ?>
			
			<h2><? echo $metas['title'] ?></h2>
			<h3><? echo $metas['subtitle'] ?></h3>
			
			<? echo $_page->post_content ?>
			
		</aside>
		
		
	 	
		<article class="content left">
			
			<? foreach($lastposts as $post) : setup_postdata($post); ?>
				<? $metas_post = getMetas($post->ID); ?>
				
				<article class="border">
					<h3><? echo $post->post_title ?></h3>
					<h5><? echo $metas_post['subtitle'] ?></h5>
					
					<? echo $post->post_content ?>
				</article>
				
			<?php endforeach; ?>
			
		</article>	
		
	 </div>	<!-- columns -->
 </div><!--main-->		
		
<?php get_footer(); ?>