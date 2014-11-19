<?php get_header(); ?>

<?
$_page = get_page(get_page_id()); 

?>




    <div id="main" role="main" class="clearfix contact">
		
		<? //echo $_page->post_content; ?> 
		
		<div class="columns clearfix">

			<article class="content">

				<h2>Drop us a Note</h2>
				<h3>We would love to hear from you</h3>
				
				

				<form action="" method="post">
					<input type="hidden" id="id" name="id" value="contact-test"/>
					<input type="text" id="name" name="name" value="Your Name (required) *" class="clearinput" />
					<input type="text" id="email" name="email" value="Your Email Address (required) *" class="clearinput" />
					<input type="text" id="phone" name="phone" value="Your Phone" class="clearinput" />
					<select id="to" name="to">
						
						
						<option value="">Select a Department:</option>
						<option value="itsupport@islandoutpost.com">TEST</option>
						
					</select>

					<textarea id="message" name="message" class="clearinput">Enter your message here...</textarea>

					<div class="clear"></div>

					<input type="submit" id="" name="" value="Submit »" class="btdarkBlue" />
				</form>


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