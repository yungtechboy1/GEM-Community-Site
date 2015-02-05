<?php
session_start();
function loggedin(){
if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
	return true;
} else {
	return false;
}
}

if(loggedin()){
$my_id = $_SESSION['id'];
$user_query = mysql_query("SELECT username, email FROM profile WHERE id='$my_id'");
$run_user = mysql_fetch_array($user_query);
$username = $run_user['username'];
$email = $run_user['email'];
}
?>