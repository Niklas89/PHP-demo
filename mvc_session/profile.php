<?php
include "config/config.php";
include "functions/database.fn.php";
include "functions/session.fn.php";

session_start();
$db['link']=database_connect($db);


if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['login']) && isset($_POST['pass']) && isset($_POST['bio'])){
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['pass']) && !empty($_POST['bio'])){ 
		
		$update = session_update($_POST['name'], $_POST['email'], $_POST['login'], $_POST['pass'], $_POST['bio']); 
		
		$connected_user_name = session_get_uname();
		$connected_user_id = session_get_uid();
		$connected_user_login = session_get_ulogin();
		$connected_user_pass = session_get_upass();
		$connected_user_email = session_get_uemail();
		$connected_user_bio = session_get_ubio();
		include 'templates/profile.html';
		}
		else{
			$error_message = 'Veuillez bien remplir le formulaire';
			$connected_user_name = session_get_uname();
			$connected_user_id = session_get_uid();
			$connected_user_login = session_get_ulogin();
			$connected_user_pass = session_get_upass();
			$connected_user_email = session_get_uemail();
			$connected_user_bio = session_get_ubio();
			include 'templates/profile.html';
		} 
	} 
	else {
	
		$connected_user_name = session_get_uname();
			$connected_user_id = session_get_uid();
			$connected_user_login = session_get_ulogin();
			$connected_user_pass = session_get_upass();
			$connected_user_email = session_get_uemail();
			$connected_user_bio = session_get_ubio();
			include 'templates/profile.html';
	
	}

		

database_disconnect($db['link']);
?>