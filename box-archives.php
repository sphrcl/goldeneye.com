<?php 

$args = array(
    'type'            => 'monthly',
    'limit'           => 20,
    'format'          => 'custom', 
    'before'          => '<li>',
    'after'           => '</li>',
    'show_post_count' => false,
    'echo'            => 1
);
?>

<div class="archive">
	<h3>The Archive</h3>
	<ul>
		<? wp_get_archives($args); ?>
	</ul>
</div>