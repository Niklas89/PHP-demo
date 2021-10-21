<?php
include "config/config.php";
include "functions/database.fn.php";
include "functions/session.fn.php";
require_once('lib/recaptcha/recaptchalib.php');
$publickey = "6LeT0cgSAAAAAG4NLJ1diyG1ZFSs72MNZl1QEgvE"; // you got this from the signup page


include 'templates/index.html';

?>
