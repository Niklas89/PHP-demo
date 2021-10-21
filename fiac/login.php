<?php
include "config/config.php";
include "functions/database.fn.php";
include "functions/session.fn.php";

session_start();
$db['link']=database_connect($db);

if(isset($_POST['login']) && isset($_POST['password'])){
	if(!empty($_POST['login']) && !empty($_POST['password'])){
		$uid = session_connect($_POST['login'], $_POST['password']);
		if(!empty($uid)){
			header('Location: vip.php');
		}
		else{
			$error_message = 'Vos identifiants sont incorrects';
			include 'templates/login.html';
		}
	}
	else{
		$error_message = 'Vous devez saisir votre login ET votre mot de passe';
		include 'templates/login.html';
	}
}
else {
	include 'templates/login.html';
}


?>