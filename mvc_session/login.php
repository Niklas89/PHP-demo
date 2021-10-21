<?php
include "config/config.php";
include "functions/database.fn.php";
include "functions/session.fn.php";

session_start();
$db['link']=database_connect($db);

if(isset($_POST['login']) && isset($_POST['pass'])){
	if(!empty($_POST['login']) && !empty($_POST['pass'])){
		$uid = session_connect($_POST['login'], $_POST['pass']);
		if(!empty($uid)){
			header('Location: index.php');
		}
		else{
			$error_message = 'Vos identifiants sont incorrects';
			include 'templates/home.html';
		}
	}
	else{
		$error_message = 'Vous devez saisir votre login ET votre mot de passe';
		include 'templates/home.html';
	}
}


?>