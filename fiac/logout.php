<?php
include "config/config.php";
include "functions/database.fn.php";
include "functions/session.fn.php";

session_start();
$db['link']=database_connect($db);
session_disconnect();

header('Location: index.php');

?>