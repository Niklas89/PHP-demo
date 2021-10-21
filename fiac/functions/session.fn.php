<?php


/**
 * session_get_uid
 *
 * @return (int) id of the connected user
 * @return (bool) false
 * @author gaspard,JL
 */

function session_get_uid(){
	if(isset($_SESSION['user_id'])) {
		$uid=$_SESSION['user_id'];
		return $uid; 
	}
	else {
		return false;
	}
}

/**
 * session_get_name
 *
 * @return (string) name of the connected user
 * @return (bool) false
 * @author gaspard
 * @use session_get_uid
 */

function session_get_uname(){
	$uid = session_get_uid();
	if($uid) {
		$sql = 'SELECT fname FROM users WHERE id='.$uid.';';
		$res = mysql_query($sql);
		$info_connection = mysql_fetch_array($res,MYSQL_ASSOC);
		if(isset($info_connection['fname']) && $info_connection['fname']){
			return $info_connection['fname'];
		}
		else{
			return false;
		}
	}
	else {
		return false;
	}
}






/**
 * session_get_ulname

 */

function session_get_ulname(){
	$uid = session_get_uid();
	if($uid) {
		$sql = 'SELECT lname FROM users WHERE id='.$uid.';';
		$res = mysql_query($sql);
		$info_connection = mysql_fetch_array($res,MYSQL_ASSOC);
		if(isset($info_connection['lname']) && $info_connection['lname']){
			return $info_connection['lname'];
		}
		else{
			return false;
		}
	}
	else {
		return false;
	}
}




/**
 * session_get_udateyear

 */

function session_get_udateyear(){
	$uid = session_get_uid();
	if($uid) {
		$sql = 'SELECT YEAR(date) FROM users WHERE id='.$uid.';';
		$res = mysql_query($sql);
		$info_connection = mysql_fetch_array($res,MYSQL_ASSOC);
		if(isset($info_connection['YEAR(date)']) && $info_connection['YEAR(date)']){
			return $info_connection['YEAR(date)'];
		}
		else{
			return false;
		}
	}
	else {
		return false;
	}
}










/**
 * session_get_udate

 */

function session_get_udate(){
	$uid = session_get_uid();
	if($uid) {
		$sql = 'SELECT date FROM users WHERE id='.$uid.';';
		$res = mysql_query($sql);
		$info_connection = mysql_fetch_array($res,MYSQL_ASSOC);
		if(isset($info_connection['date']) && $info_connection['date']){
			return $info_connection['date'];
		}
		else{
			return false;
		}
	}
	else {
		return false;
	}
}








/**
 * session_get_login

 */

function session_get_ulogin(){
	$uid = session_get_uid();
	if($uid) {
		$sql = 'SELECT login FROM users WHERE id='.$uid.';';
		$res = mysql_query($sql);
		$info_connection = mysql_fetch_array($res,MYSQL_ASSOC);
		if(isset($info_connection['login']) && $info_connection['login']){
			return $info_connection['login'];
		}
		else{
			return false;
		}
	}
	else {
		return false;
	}
}






/**
 * session_get_pass
 */

function session_get_upass(){
	$uid = session_get_uid();
	if($uid) {
		$sql = 'SELECT pass FROM users WHERE id='.$uid.';';
		$res = mysql_query($sql);
		$info_connection = mysql_fetch_array($res,MYSQL_ASSOC);
		if(isset($info_connection['pass']) && $info_connection['pass']){
			return $info_connection['pass'];
		}
		else{
			return false;
		}
	}
	else {
		return false;
	}
}






/**
 * session_get_email
 */

function session_get_uemail(){
	$uid = session_get_uid();
	if($uid) {
		$sql = 'SELECT email FROM users WHERE id='.$uid.';';
		$res = mysql_query($sql);
		$info_connection = mysql_fetch_array($res,MYSQL_ASSOC);
		if(isset($info_connection['email']) && $info_connection['email']){
			return $info_connection['email'];
		}
		else{
			return false;
		}
	}
	else {
		return false;
	}
}



/**
 * session_get_email
 */

function session_get_uagency(){
	$uid = session_get_uid();
	if($uid) {
		$sql = 'SELECT news_agency FROM users WHERE id='.$uid.';';
		$res = mysql_query($sql);
		$info_connection = mysql_fetch_array($res,MYSQL_ASSOC);
		if(isset($info_connection['news_agency']) && $info_connection['news_agency']){
			return $info_connection['news_agency'];
		}
		else{
			return false;
		}
	}
	else {
		return false;
	}
}






/**
 * session_get_bio
 */

function session_get_ubio(){
	$uid = session_get_uid();
	if($uid) {
		$sql = 'SELECT bio FROM users WHERE id='.$uid.';';
		$res = mysql_query($sql);
		$info_connection = mysql_fetch_array($res,MYSQL_ASSOC);
		if(isset($info_connection['bio']) && $info_connection['bio']){
			return $info_connection['bio'];
		}
		else{
			return false;
		}
	}
	else {
		return false;
	}
}





/**
 * session_all_names
 *
*/

function session_all_names(){
	$uid = session_get_uid();
	if($uid) {
		$sql = 'SELECT name,id FROM users';
		$res = mysql_query($sql);
		while($row = mysql_fetch_array($res, MYSQL_ASSOC)){
		echo '<a href="userprofile.php?id='.$row['id'].'">'.$row['name'].'</a><br />';
		}
	}
}  



/**
 * stocker_uniqid
 *
 */

function stocker_uniqid($uniqid){
	$uid = session_get_uid();
	if($uid) {
		$sql="UPDATE users SET secret_key = '$uniqid' WHERE id=".$uid.";";
		mysql_query($sql);
		
	}

}





/**
 * session_subscribe
 *
 */

function session_subscribe($fname, $lname, $news_agency, $login, $password, $email){
	$ip = $_SERVER['REMOTE_ADDR'];
	$sql="INSERT INTO users (id,login,password,fname,lname,news_agency,email,date,ip)"
		. "VALUES (NULL, '$login','$password', '$fname', '$lname', '$news_agency', '$email', CURRENT_TIMESTAMP, '$ip')";
	
	mysql_query($sql);

}




/**
 * session_update
 *
 */

function session_update($name, $email, $login, $pass, $bio){
		$uid = session_get_uid();
	if($uid) {
		$sql="UPDATE users SET login = '$login', pass = '$pass', name = '$name', email = '$email', bio = '$bio' WHERE id=".$uid.";";
		mysql_query($sql);
		
	}

}





/**
 * session_connect
 *
 * @param string $login 
 * @param string $pass 
 * @return (int) id of the connected user
 * @return (bool) false
 * @author gaspard,JL
 * @need database_connect
 */

function session_connect($login, $password){
	
	$sql = 'SELECT id FROM users WHERE login="'
		.mysql_real_escape_string($login)
		.'" and password ="'
		.mysql_real_escape_string($password).'";';
	$res = mysql_query($sql);
	$info_connection = mysql_fetch_array($res,MYSQL_ASSOC);

	if(isset($info_connection['id']) && $info_connection['id']){
		$_SESSION['user_id'] = $info_connection['id'];
		return $info_connection['id'];
		
	}
	else{
		return false;
	}
}

/**
 * session_disconnect
 *
 * @return (bool) true
 * @author gaspard
 * @need session_connect
 */

function session_disconnect() {
	$_SESSION = array();
	if (isset($_COOKIE[session_name()])) {
		setcookie(session_name(), '', time()-42000, '/');
	}
	session_destroy();
	return true;
}

 
?>