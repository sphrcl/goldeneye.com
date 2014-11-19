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
			<h2>Goldeneye:<br/> Jamaica</h2>
			<h3>James Bond</h3>
			<p>James Bond and Jamaica might not be two words you’d couple together at first thought, however they go hand in hand. Ian Fleming, the famed author of the James Bond series, fell in love with Jamaica when serving in World War Two and bought a property shortly thereafter. It was in the little village of Oracabessa Bay in Jamaica that the James Bond character was truly born.</p>
			
			
			
			<p>For more information, visit <a href="http://www.islandoutpost.com" title="Island Post" target="_blank">www.islandoutpost.com</a>.</p>
		
	 </div>	<!-- columns -->
		
			 
		
</div>
		
<?php get_footer(); ?>