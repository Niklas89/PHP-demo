<?php
include "config/config.php";
include "functions/database.fn.php";
include "functions/session.fn.php";
require_once('lib/recaptchalib.php');

session_start();
$db['link']=database_connect($db);





if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['login']) && isset($_POST['pass']) && isset($_POST['bio'])){
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['pass']) && !empty($_POST['bio'])){ 
	  
  $privatekey = "6LeT0cgSAAAAAC2TkOTFrxSRm585fEWqYGBy3SIU";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
		 if ($resp->is_valid) { //si je veux faire des test je remplace par "if(1){"
		$subscribe = session_subscribe($_POST['name'], $_POST['email'], $_POST['login'], $_POST['pass'], $_POST['bio']); 
			
		header('Location: index.php');
		} // closing recaptcha
		}
		else{
		die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
			/* $error_message = 'Veuillez bien remplir le formulaire';
			include 'templates/subscribe.html'; */
		} 
	}


include 'templates/subscribe.html';


?>