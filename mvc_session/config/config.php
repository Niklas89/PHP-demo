<?php

$db = array();
$db['host'] = 'localhost'; 
$db['user'] = 'root'; // utilisateur
$db['pass'] = ''; //password
$db['base'] = 'mvc_session'; //nom de la base de donnee

/*
if($_SERVER['SERVER_NAME'] != 'localhost'){
	$db['host'] = 'xxxx'; 
	$db['user'] = 'xxxx'; // utilisateur
	$db['pass'] = 'xxxxx'; //password
	$db['base'] = 'xxxx'; //nom de la base de donnee
}

define('UPLOAD_DIR','uploads/');
define('EMAIL_CONTACT','monclient@macomp.com');
*/

define('APPLICATION_VERSION','0.1');
define('APPLICATION_TITLE','Votre application');
define('APPLICATION_NAME','votreapplication');


?>