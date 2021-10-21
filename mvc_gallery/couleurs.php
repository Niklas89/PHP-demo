<?php

include "config/config.php";
include "functions/database.fn.php";
$link = database_connect($db);



$sql = 'SELECT * FROM couleurs WHERE id='.$_GET['id']; 
$result = mysql_query($sql);
if(!$result){
	die('erreur dans la requete : ' . mysql_error());
}

while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//FR"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">

	<style>
	body {
	background-color:<?php echo '#'.$row['hexadecimal']; ?>;
	}
	</style>
</head>
<body>


<?php

	 echo '<img src="images/'.$row["image"].'" alt="ceci est une image" /><br />';
}

?>

</body>
</html>