﻿<?php
include "config/config.php";
include "functions/database.fn.php";
include "functions/session.fn.php";
require_once('lib/recaptcha/recaptchalib.php');

$db['link']=database_connect($db);

$connected_user_name = session_get_uname();
$connected_user_id = session_get_uid();

database_disconnect($db['link']);
include 'templates/done.html';

?>
