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

    <div id="main" role="main" class="news nInt">
		
		<!--h1>Post title: <b></b></h1>
		<h3><?php echo $metas[0]->subtitle; ?></h3>
		<h4>Post date: <b><? echo $post->post_date; ?> </b></h4>
		<h5>Post category: <b><? echo $categories[0]->cat_name; ?> </b></h5>
		<p>Post author: <b><? echo $postImages[0]['src'];//$author->user_login; ?> </b></p>
		<p>Num comments: <b><? echo $post->comment_count; ?> </b></p>
		<p>Post id: <br/><br/><? //trace($attachs); ?></p-->
		
		
		<div class="columns clearfix">
			
			<?php if ( have_posts() ) : the_post(); ?>
			
			<article <?php post_class('content left'); ?> >
			
				<a href="<? echo get_bloginfo("url") ?>/news" title="News & Events"><img src="<?php echo get_bloginfo("stylesheet_directory") ?>/images/news-title.jpg" /></a>
				
				
				<div class="post">
					<h2><? the_title(); ?></h2>
					<? if($metas['subtitle'] != ''){?>
					<h3><? echo $metas['subtitle'] ?></h3>
					<? } ?>
					<? the_content(); ?>
				</div>

				<div class="pagination clearfix">
					<? if($prev_post){ ?>
					<a href="<?php echo $url_prev_post; ?>" class="older" title="« Previous">« Previous post </a>
					<? } if($next_post){ ?>
					<a href="<?php echo $url_next_post; ?>" class="newer" title="Next »">Next post  »</a>
					<? } ?>
				</div>

			
				
			<? get_template_part('box', 'comments')?>

			</article>	
			
			<?php endif; // end if ?>

			<? get_sidebar('single')?>

		 </div>	<!-- columns -->
		
	</div>
		
<?php get_footer(); ?>