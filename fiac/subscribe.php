<?php
include "config/config.php";
include "functions/database.fn.php";
include "functions/session.fn.php";
require_once('lib/recaptcha/recaptchalib.php');

session_start();
$db['link']=database_connect($db);





if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['news_agency']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['email'])){
	if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['news_agency']) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['email'])){ 
	  
  $privatekey = "6LeT0cgSAAAAAC2TkOTFrxSRm585fEWqYGBy3SIU";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
		 if ($resp->is_valid) { //si je veux faire des test je remplace par "if(1){"
		$subscribe = session_subscribe($_POST['fname'], $_POST['lname'], $_POST['news_agency'], $_POST['login'], $_POST['password'], $_POST['email']); 
			
		header('Location: done.php');
		} // closing recaptcha
		}
		else{
		die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
		 
			/* $error_message = 'Veuillez bien remplir le formulaire';
			include 'templates/subscribe.html'; */
		} 
	}


include 'templates/index.php';


?>