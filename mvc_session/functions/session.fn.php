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
		$sql = 'SELECT name FROM users WHERE id='.$uid.';';
		$res = mysql_query($sql);
		$info_connection = mysql_fetch_array($res,MYSQL_ASSOC);
		if(isset($info_connection['name']) && $info_connection['name']){
			return $info_connection['name'];
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


function session_all_names(){
	$uid = session_get_uid();
	if($uid) {
		$sql = 'SELECT name FROM users WHERE 1';
		$res = mysql_query($sql);
		$info_connection = mysql_fetch_array($res,MYSQL_ASSOC);
		if(isset($info_connection['name']) && $info_connection['name']){
			return $info_connection['name'];
		}
		else{
			return false;
		}
	}
	else {
		return false;
	}
} */


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
 * session_subscribe
 *
 */

function session_subscribe($name, $email, $login, $pass, $bio){
	
	$sql="INSERT INTO users (id,login,pass,name,email,bio)"
		. "VALUES (NULL, '$login','$pass', '$name', '$email', '$bio')";
	
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

function session_connect($login, $pass){
	
	$sql = 'SELECT id FROM users WHERE login="'
		.mysql_real_escape_string($login)
		.'" and pass ="'
		.mysql_real_escape_string($pass).'";';
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