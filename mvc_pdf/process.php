<?php

  require_once('lib/recaptcha/recaptchalib.php');
  $privatekey = "6LeT0cgSAAAAAC2TkOTFrxSRm585fEWqYGBy3SIU";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (0){ //if(!$resp->is_valid) {   //si je veux faire des test je remplace par "if(0){"
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    

include "config/config.php";
include "functions/database.fn.php";
$link = database_connect($db);

// ***** ici on récupère les données et on les stocke dans mysql

$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];
$c4 = $_POST['c4'];
$c5 = $_POST['c5'];
$c6 = $_POST['c6'];
$c7 = $_POST['c7'];
$c8 = $_POST['c8'];
$c9 = $_POST['c9'];
$c10 = $_POST['c10'];
$c11 = $_POST['c11'];
$c12 = $_POST['c12']; 
$c13 = $_POST['c13']; 
$m1 = $_POST['m1']; 
$m2 = $_POST['m2']; 
$m3 = $_POST['m3']; 
$m4 = $_POST['m4']; 
$m5 = $_POST['m5']; 
$m6 = $_POST['m6'];

$ip = $_SERVER['REMOTE_ADDR'];

// on ferme la connection mysql donc ci-dessous plus de sql
mysql_close($link);


// ***** ici on envoie le mail


// affichage du template
// include "templates/devis_merci.html";
include "commande.php";

} //closing recaptcha
?></pre>