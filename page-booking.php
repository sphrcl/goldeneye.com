<?php
/*
Template Name: Booking landing page
*/
?>

<? 
$id = get_page_id();
$_page = get_page($id);
$categories = get_the_category($id);
$metas = getMetas($id) ;
$postImages = getPostImages($_page->post_content,'img','src');
$thumb = get_the_post_thumbnail($id,'banner-top-thumb');
$attachs = getAttachments($id);

?>

<?php get_header(); ?>


    <div id="main" role="main" class="clearfix spaExcl">
		
		<? // echo $_page->post_content; ?> 
		
		 <div class="columns clearfix">
			 
			<? echo $thumb ?>

			<div class="social">
				<div class="fb-like" data-href="http://www.goldeneye.com" data-send="true" data-width="460" data-show-faces="false"></div>
				<g:plusone size="small"></g:plusone>
			</div>

			<aside class="left">
				<h2><? echo $_page->post_title ?></h2>
				<h4><? echo $metas['subtitle'] ?></h4> 
				<p>We would like to advise you that our reservation software is currently being upgraded to ensure enhanced service in the future.
 
				During this upgrading procedure our online booking engine will not be available from this evening January 15, 2015  until Wednesday, January 21st, 2015 and therefore we will not be accepting any online reservations.
				 
				In the  interim please call us directly at 1-800-OUTPOST or 1876-622-9009 or email us at <a href="mailto:reservations@islandoutpost.com">reservations@islandoutpost.com</a> for immediate assistance.
				 
				We sincerely apologize for any inconvenience this may cause as we strive to serve you better.
				 
				 
				One Love,
				 
				The Island Outpost Team</p>
			</aside>	

			<article class="content left">
				
				<div class="columnOne left">
					<h5>Contact:</h5>
					<p class="rosa">1-800-OUTPOST or 1876-622-9009</p>
					<p class="rosa"><a href="mailto:reservations@islandoutpost.com">reservations@islandoutpost.com</a></p>

				</div>

				<!-- <div class="columnTwo left">
					<a href="<? echo get_bloginfo("url") ?>/contact" class="btOrange" title="Book Exclusive">Book Exclusive »</a>

					<div class="clear"></div>

					<p class="black"><strong>Make your FieldSpa reservation</strong></p>

					<p class="darkBlue"><strong>876-622-9145</strong></p>
					<p class="darkBlue"><strong><a href="mailto:info@goldeneye.com?Subject=Contact%20via%20Site">info@goldeneye.com</a></strong></p>
				</div> -->
			</article>	

		 </div>	<!-- columns -->
		
		
	</div>
		
<?php get_footer(); ?>