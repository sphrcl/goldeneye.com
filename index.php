<?php 
 session_start();

if($_POST){
	
	if($_POST['id'] == 'contact' || $_POST['id'] == 'contact-test'){
		
		$message = '<b>From: </b>'. $_POST['name'];
		$message .= '<br/><b>Phone: </b>'. $_POST['phone'];
		$message .= '<br/><b>Email: </b>'. $_POST['email'];
		$message .= '<br/><b>Message: </b>'. $_POST['message'];
		
		add_filter('wp_mail_content_type',create_function('', 'return "text/html";'));
		
		$headers = 'From: '.$_POST['name'].' <no-reply@goldeneye.com>' . "\r\n" .
				   'Reply-to:'. $_POST['email'];
		
		
		$mail = wp_mail('reservations@islandoutpost.com', 'Contact from website', $message, $headers);
		
		if($_POST['id'] == 'contact'){
			$url_return = 'http://goldeneye.com/contact/';
		}
		else{
			$url_return = 'http://goldeneye.com/test-form-for-alim/';
		}

		if($mail){
			
			$_SESSION['mail'] = 'ok';
			
		}
		else{
			$_SESSION['mail'] = 'erro';
		}
		
		
	}
	
	
	if($_POST['id'] == 'own'){
	
		$message = '<b>From: </b>'. $_POST['name'];
		$message .= '<br/><b>Phone: </b>'. $_POST['phone'];
		$message .= '<br/><b>Email: </b>'. $_POST['email'];
		$message .= '<br/><b>Message: </b>'. $_POST['message'];

		add_filter('wp_mail_content_type',create_function('', 'return "text/html";'));
		$headers = 'From: '.$_POST['name'].' <no-reply@goldeneye.com>' . "\r\n" .
				   'Reply-to:'. $_POST['email'];
		
		
		
		$mail = wp_mail('sandy@cbjamaica.com,Marty.Hillis@palmpictures.com', 'Contact from Sales Inquiries', $message, $headers);

		$url_return = 'http://goldeneye.com/own/';
		
		if($mail){
			
			$_SESSION['mail'] = 'ok';
			
		}
		else{
			$_SESSION['mail'] = 'erro';
		}
	}
	
	header('location:'. $url_return);
					
}
else{};

get_header(); 
?>
    <!-- 0987654321+qwert -->
    <div id="main" role="main">
		
		<?php get_template_part("content","home") ?>
		
		
		
	</div>
		
<?php get_footer(); ?>

