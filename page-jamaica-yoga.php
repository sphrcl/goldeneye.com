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





		
 <div id="main" role="main" class="clearfix stay">
		
		<div class="columns clearfix">

		


		<article class="content left">
			<h2>Goldeneye:<br/> Jamaica Yoga</h2>
			<h3>Sunset Yoga</h3>
			<p>GoldenEye Hotel &amp; Resort, located in Oracabessa, Jamaica is the perfect place for sunning, relaxing and swimming.  Ideal for fun, fitness-focused experiences like lagoon kayaking and stand-up paddleboarding, guests can also participate in GoldenEye sunset yoga. Our highly trained yoga teachers guide guests through fundamental yoga poses, allowing beginner through advanced students to deepen their practices.</p>
			
			<h3>Clear your mind</h3>
			<p>When visiting GoldenEye Hotel &amp; Resort, whether on vacation or for business, consider yoga as a way to clear your mind and feel revitalized. It can help improve circulation and restore energy all the while watching the most beautiful Jamaican sunset.</p>
			
			
			<p>For more information, visit <a href="http://www.islandoutpost.com" title="Island Post" target="_blank">www.islandoutpost.com</a>.</p>
		
	 </div>	<!-- columns -->
		
			 
		
</div>
		
<?php get_footer(); ?>