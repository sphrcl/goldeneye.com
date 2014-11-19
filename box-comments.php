<? 
$categories = get_the_category($post->ID);
$display = false;
$cat_filter = array('news', 'blog');

for($i=0;$i<sizeof($categories);$i++){
	
	for($e=0;$e<sizeof($cat_filter);$e++){
		
		if($categories[$i]->name == $cat_filter[$e]){
			$display = true;
		}
	}
	
}

if($display){ ?>

<div id="comments">
				
	<? 
	$comments = get_approved_comments($id);
	?>

	<?php if ( sizeof($comments) > 0 ) : ?>

	<div class="allcomments">
		<h3>Comments</h3>

		<?for ($i = 0; $i < sizeof($comments); $i++){ ?>

		<div class="comment">
			<p class="author"><?echo $comments[$i]->comment_author; ?> <time>at <? echo wp_date($comments[$i]->comment_date); ?></time></p>
			<p><?echo $comments[$i]->comment_content; ?></p>
		</div>

		<?} // end for ?>

	</div>

	<?php endif; // check for comment navigation ?>


	<? 

	$fields =  array(
		'author' => '<input class="clearinput" id="author" name="author" type="text" value="Your Name (required) *" size="30"' . $aria_req . ' />',
		'email'  => '<input class="clearinput" id="email" name="email" type="text" value="Your email (required) *" size="30"' . $aria_req . ' />'
	);
	$comments_args = array(
			'fields' => apply_filters( 'comment_form_default_fields', $fields ),
			// change the title of send button 
			'title_reply'=>'<h3>Leave a Comment</h3>',
			'comment_notes_before' => '',
			// remove "Text or HTML to be displayed after the set of comment fields"
			'comment_notes_after' => '',
			//customizar o textarea
			'comment_field' => '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="clearinput">Enter your message here...</textarea>'
	);

	comment_form($comments_args);

	?>



</div>

<? } // end IF ?>