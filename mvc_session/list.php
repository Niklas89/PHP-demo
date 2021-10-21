<?php
include "config/config.php";
include "functions/database.fn.php";
include "functions/session.fn.php";

session_start();
$db['link']=database_connect($db);

$connected_user_name = session_get_uname();
$connected_user_id = session_get_uid();
$list_users = session_all_names();

database_disconnect($db['link']);
include 'templates/list.html';


?>