<div id="main" role="main" class="clearfix spaExcl">

	<? 
	
	$id = get_page_id();
	$_page = get_page($id);
	$categories = get_the_category($id);
	$metas = getMetas($id);
	$postImages = getPostImages($_page->post_content,'img','src');
	$thumb = get_the_post_thumbnail($id,'banner-top-thumb');
	$attachs = getAttachments($id);
	
	?> 

	 <div class="columns clearfix">

		<? echo $thumb ?>

		<div class="social">
			<div class="fb-like" data-href="http://www.goldeneye.com" data-send="true" data-width="460" data-show-faces="false"></div>
			<g:plusone size="small"></g:plusone>
		</div>

		<aside class="left">
			<h2><? echo $_page->post_title ?></h2>
			<h4><? echo $metas['subtitle'] ?></h4> 
			<p><? echo $metas['excerpt'] ?></p>
		</aside>	

		<article class="content left">

			<div class="columnOne left">
				<h5><? echo $metas['spa_title'] ?></h5>
				<p class="rosa"><? echo $metas['price'] ?></p>

				<h5>Includes:</h5>

				<? echo $_page->post_content ?>

			</div>

			<div class="columnTwo left">
				
				<div class="clear"></div>

				<p class="black"><strong>Make your FieldSpa reservation</strong></p>

				<p class="darkBlue"><strong>876-622-9145</strong></p>
				<p class="darkBlue"><strong><a href="mailto:info@goldeneye.com?Subject=Contact%20via%20Site">info@goldeneye.com</a></strong></p>
			</div>
		</article>	

	 </div>	<!-- columns -->


</div>