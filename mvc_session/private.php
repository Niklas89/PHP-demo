<?php

include "config/config.php";
include "functions/database.fn.php";
include "functions/session.fn.php";

session_start();
$db['link'] = database_connect($db);

$connected_user_name = session_get_uname();
$connected_user_id = session_get_uid();


database_disconnect($db['link']);
// affichage du template
if($connected_user_id){
	include "templates/private.html";
}
else{
	include "templates/forbidden.html";
}


?>