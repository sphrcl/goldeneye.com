<?php

get_header(); 

$id = get_page_id();
$page = get_page($id);

if($page->post_parent == 13){
	
	get_template_part('content', 'spa');
	
}


get_footer(); 

?>