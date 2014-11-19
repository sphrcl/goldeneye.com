<?php

//------------------------------------------------------------------------------------------------//
// WP Init Config
//------------------------------------------------------------------------------------------------//

//set thumbnails suport
if ( function_exists( 'add_theme_support' ) ) {
	
		// Add support for a variety of post formats
		add_theme_support( 'post-formats', array( 'attachment'));
				
		add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1024, 768, true ); 
		
		add_post_type_support( 'page', 'excerpt' );
		
}

//set thumbnail sizes
if ( function_exists( 'add_image_size' ) ) { 
		add_image_size( 'home-posts-thumb', 274, 150, true );
		add_image_size( 'home-magazine-thumb', 126, 165, true ); 
		add_image_size( 'spa-thumb', 421, 178, true ); 
		add_image_size( 'banner-top-thumb', 862, 358, true ); 
		add_image_size( 'exclusives-thumb', 270, 118, true ); 
		add_image_size( 'press-thumb', 568, 358, true ); 
}


// Using the default post to set more metadata
function create_post_metas(){
	
	$postID = 1;
	$metaArray = array('subtitle','attachment');
	
	if(!getMetas(1,'attachment')){
		for($i = 0; $i < sizeOf($metaArray); $i++ ){
			add_post_meta($postID, $metaArray[$i], '---', false);
		}
	}
	
}

if(!get_post_meta(1, 'attachment')){
	create_post_metas();
}

//------------------------------------------------------------------------------------------------//
// GET PAGE AND POST ID
//------------------------------------------------------------------------------------------------//

//check the page name
function get_page_name(){
	
	$pageID = 0;
	$pagesID = get_all_page_ids();
	
	for($i = 0; $i < sizeOf($pagesID); $i++ ){
		
		if(is_page($pagesID[$i])){
			$pageID = $pagesID[$i];
			$page = get_page($pageID);
			
			return $page->post_name;
		}
		
	}
	
}

function get_page_id(){
	
	$pageID = 0;
	$pagesID = get_all_page_ids();
	
	for($i = 0; $i < sizeOf($pagesID); $i++ ){
		
		if(is_page($pagesID[$i])){
			$pageID = $pagesID[$i];
			return $pageID;
		}
		
	}
	
}


//------------------------------------------------------------------------------------------------//
// GET METAS ON POST
//------------------------------------------------------------------------------------------------//


function getMetas($postid, $name=null){
	
	$metaNames = get_post_custom_keys($postid);
	$metas = array();
	
	if(!$name){
	
		for($i = 0; $i < sizeOf($metaNames); $i++ ){

			$meta_values = get_post_meta($postid,$metaNames[$i]);

			if( sizeof($meta_values) > 1){
				for($u = 0; $u < sizeof($meta_values); $u++ ){
					$metas[$metaNames[$i]][$u] = $meta_values[$u];
				}
			}
			else{
				$metas[$metaNames[$i]] = $meta_values[0];
			}

		}

		return $metas;
		
	}
	else{
		
		$meta_values = get_post_meta($postid,$name);

		if( sizeof($meta_values) > 1){
			$meta = $meta_values;
		}
		else{
			$meta = $meta_values[0];
		}
		
		return $meta;
	}
	
	
}

function wp_date($date, $format='F, d-Y H:i'){
	
	$date_formated = date_format(date_create($date), $format);
	
	return $date_formated;
}

//------------------------------------------------------------------------------------------------//
// PAGINAÇÃO DE POSTS
//------------------------------------------------------------------------------------------------//


function posts_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
		 
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
	 
}



//------------------------------------------------------------------------------------------------//
// tratando HTML para pegar dados das tags <img>
//------------------------------------------------------------------------------------------------//

function getPostImages($html, $tag='img', $attr='src', $params=array('class','title', 'rel', 'src', 'href', 'alt', 'height', 'width', 'name', 'id')){

		$imgs = array();
		$imgs_return = array();
	
		preg_match_all('/<'.$tag.'[^>]+>/i',$html, $result);

		for($i=0; $i < sizeof($result); $i++)
		{
			for($a = 0; $a < sizeof($params); $a++){
				 preg_match_all('/('. $params[$a] .')=("[^"]*")/i', implode("", $result[$i]), $img);
				 $imgs[$i][$params[$a]] = $img[2];
				 
			}
			
			
		}
		
		for($u = 0; $u < sizeof($imgs[0][$attr]); $u++){

			for($e = 0; $e < sizeof($params); $e++){

				$imgs_return[$u][$params[$e]] = trim(str_replace('"','', $imgs[0][$params[$e]][$u]));

			}

		}
		
		return $imgs_return;
		
}

//------------------------------------------------------------------------------------------------//
// pegar anexos do post
//------------------------------------------------------------------------------------------------//

function getAttachments($postid, $type=null){
	
	switch($type){
		case 'image':
			$type = '&post_mime_type=image';
			break;
		case 'video':
			$type = '&post_mime_type=video';
			break;
		case 'application':
			$type = '&post_mime_type=application';
			break;
		case null:
			$type = '';
	}
	
	$attachs = array();
	$children = get_children('post_type=attachment'. $type .'&post_parent=' . $postid );
	
	foreach($children AS $children_post) {
	
		$attachs[] = objectToArray($children_post);
		
	}
	
	return $attachs;
 
	
}

//------------------------------------------------------------------------------------------------//
// UTILS
//------------------------------------------------------------------------------------------------//


function objectToArray($object) {  
	
	$arr = array(); 

	foreach ($object as $key=>$objIndex) {
		
		if($key == 'guid'){
			$arr['url'] = $objIndex;
		}
		else if($key == 'post_title'){
			$arr['title'] = $objIndex;
		}
		else{
			$arr[$key] = $objIndex;
		}
		
	}

	return $arr;
	
}

//------------------------------------------------------------------------------------------------//
// COMMENTS
//------------------------------------------------------------------------------------------------//


if ( ! function_exists( 'twentyten_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyten_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
			<?php printf( __( '%s <span class="says">says:</span>', 'twentyten' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author .vcard -->
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyten' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'twentyten' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' );
			?>
		</div><!-- .comment-meta .commentmetadata -->

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyten' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

//------------------------------------------------------------------------------------------------//
// DEBUG
//------------------------------------------------------------------------------------------------//

function trace($object, $exit=false, $outputAlert=false){
	
	if($outputAlert){
		
		echo "<script>";
		echo "alert('$object');";
		echo "</script>";
		
		
	}
	else{
	
		echo '##############################################';
		echo '<pre>';
		print_r($object);
		echo '</pre>';
		echo '##############################################';
		
	}
	
	if($exit){exit;};
	
}

//------------------------------------------------------------------------------------------------//



