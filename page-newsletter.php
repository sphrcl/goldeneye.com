<?php get_header(); ?>

<?
$_page = get_page(get_page_id()); 

?>



  
    <div id="main" role="main" class="clearfix <? echo get_page_name()?>">
		
		<? //echo $_page->post_content; ?> 
		
		<div class="columns clearfix">

			<article class="content">

				
				
				

				
                                <h2>Subscribe to our Newsletter</h2>
				<h3>We would love to share with you</h3>
                                   <?php echo do_shortcode("[contact-form-7 id=2654]"); ?>
				
				<?

				if($_SESSION['mail'] == 'ok'){
					echo "<script> alert('Email sent'); </script>";
				}
				if($_SESSION['mail'] == 'erro'){
					echo "<script> alert('Email not sent, try again please!'); </script>";
				}
				unset($_SESSION['mail']);
				?>

			</article>	

		 </div>	<!-- columns -->
		
	</div> <!-- main -->
<?
if($_SESSION['mail'] == 'ok'){
	echo "<script> alert('Email sent'); </script>";
}
if($_SESSION['mail'] == 'erro'){
	echo "<script> alert('Email not sent, try again please!'); </script>";
}

unset($_SESSION['mail']);

?>
<?php get_footer(); ?>