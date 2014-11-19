<?php
session_start();

$url_return = "http://www.goldeneye.com/";

$local = "localhost";
$user = "newsletter";
$database = "newsletter";
$password = "genewsletter";


<?php echo do_shortcode("[contact-form-7 id=2626]"); ?>
//<?php wp_mail( "jose.cathcart@islandoutpost.com", "date", "email" ); ?> 



//$sql = "INSERT INTO `ge_newsletter`(`date`, `email`) VALUES (CURRENT_TIMESTAMP,"value-2")";
  

// header("location:javascript://history.go(-1)");
header('location:'. $url_return);
?>
