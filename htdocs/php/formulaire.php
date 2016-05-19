<?php

/*
 * ------------------------------------
 * Contact Form Configuration
 * ------------------------------------
 */

$to    = "justal.kevin.spam@gmail.com"; // <--- Your email ID here


/*
 * ------------------------------------
 * END CONFIGURATION
 * ------------------------------------
 */

$name     = $_REQUEST["name"];
$email    = $_REQUEST["email"];
$subject  = $_REQUEST["subject"];
$msg      = $_REQUEST["message"];
$champ1      = $_REQUEST["champ1"];
$champ2      = $_REQUEST["champ2"];

if (isset($email) && isset($name)) {
	 
	$website = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
	$msg     = "Hello Admin, <br/> <br/> You've got a message from $name ($email)<br/><br/>Message: $msg <br><br> -- <br>This e-mail was sent from a contact form on $website<br><br>Ceci est le champ1 : $champ1<br><br>Ceci est le champ2 : $champ2";

	$mail =  mail($to, $subject, $msg, $headers);
	if($mail)
	{
		echo 'success';
	}

	else
	{
		echo 'failed';
	}
}

?>