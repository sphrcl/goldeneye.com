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
		
		 
		<?php get_template_part("content","stay-fleming") ?>
		
	</div>
		
<?php get_footer(); ?>