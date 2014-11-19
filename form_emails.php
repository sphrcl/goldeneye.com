<?php
session_start();

$url_return = "http://www.goldeneye.com/";

if($_POST){
	
	if($_POST['id'] == 'contact'){
		
		$message = '<b>From: </b>'. $_POST['name'];
		$message .= '<br/><b>Phone: </b>'. $_POST['phone'];
		$message .= '<br/><b>Email: </b>'. $_POST['email'];
		$message .= '<br/><b>Message: </b>'. $_POST['message'];
		
		add_filter('wp_mail_content_type',create_function('', 'return "text/html";'));
		$headers = 'From: '.$_POST['name'].' <'.$_POST['email'].'>' . "\r\n";
		$mail = wp_mail($_POST['to'], 'Contact from website', $message, $headers);
		
		$url_return = 'http://www.goldeneye.com/contact/';

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
		$headers = 'From: '.$_POST['name'].' <'.$_POST['email'].'>' . "\r\n";
		$mail = wp_mail(get_bloginfo('admin_email'), 'Contact from Sales Inquiries New', $message, $headers);

		$url_return = 'http://www.goldeneye.com/own/';
		
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

?>