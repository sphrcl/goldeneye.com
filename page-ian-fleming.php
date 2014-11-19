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
			<h2>Goldeneye:<br/> The House that Fleming Built</h2>
			<h3>Ian Fleming</h3>
			<p>Ian Fleming was best known for his James Bond series of spy novels. An English author, journalist and naval intelligence officer, Ian Fleming wrote his first Bond novel, <i>Casino Royale</i>, in 1952 after studying in Munich and Geneva and serving in World War 2. Having sold over 100 million copies worldwide, Fleming’s Bond stories rank among the best-selling series of fictional books of all time.</p>
			
			<h3>GoldenEye History</h3>
			<p>Ian Fleming’s connection to Jamaica began during WWII. Sent by Naval Intelligence to investigate U-Boat activities in the Caribbean, Ian Fleming fell in love with the island. During his first visit, Fleming had visited a property on the sea in the little village of Oracabessa Bay, also known as “golden head.” By chance during that time, Ian Fleming had been working on a naval operation called GoldenEye. He bought the property when the war ended and built his dream house. It was at GoldenEye that Ian Fleming dreamed up James Bond, 007.</p>
			
			
			<p>For more information, visit <a href="http://www.islandoutpost.com" title="Island Post" target="_blank">www.islandoutpost.com</a>.</p>
		
	 </div>	<!-- columns -->
		
			 
		
</div>
		
<?php get_footer(); ?>