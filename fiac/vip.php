<?php
include "config/config.php";
include "functions/database.fn.php";
include "functions/session.fn.php";

session_start();
$db['link']=database_connect($db);

$connected_user_name = session_get_uname();
$connected_user_ulname = session_get_ulname();
$connected_user_id = session_get_uid();
$connected_user_agency = session_get_uagency();
$connected_user_udate = session_get_udate();

database_disconnect($db['link']);
include 'templates/vip.html';

?>
