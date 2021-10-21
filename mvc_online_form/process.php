<?php

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





$sql="INSERT INTO form_command (id, contact_civilite, contact_fname, contact_lname, contact_company, contact_phone, contact_mobile,
contact_email, contact_address_street, contact_address_more, contact_address_zip, contact_address_state, contact_address_city,
contact_address_country, mat_type, mat_brand, mat_model, mat_serial, mat_buydate, mat_buyplace, date_send, ip) VALUES(NULL, '$c1', '$c2', '$c3', '$c4', '$c5', '$c6',
 '$c7', '$c8', '$c9', '$c10', '$c11', '$c12', '$c13', '$m1', '$m2', '$m3', '$m4', '$m5', '$m6', CURRENT_TIMESTAMP, '$ip')";

 
 
mysql_query($sql) 
or die(mysql_error()); 

// on ferme la connection mysql donc ci-dessous plus de sql
mysql_close($link);


// ***** ici on envoie le mail
mail('niklas_edelstam@hotmail.com', 'Un nouveau inscrit', $c3);


// affichage du template
include "templates/devis_merci.html";

?></pre>