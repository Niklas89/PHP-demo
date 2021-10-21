<?php

$db = array();
$db['host'] = 'localhost'; 
$db['user'] = 'root'; // utilisateur
$db['pass'] = ''; //password
$db['base'] = 'mvc_mail'; //nom de la base de donnee


if($_SERVER['SERVER_NAME'] != 'localhost'){
	$db['host'] = 'xxxx'; 
	$db['user'] = 'xxxx'; // utilisateur
	$db['pass'] = 'xxxxx'; //password
	$db['base'] = 'xxxx'; //nom de la base de donnee
}

?>