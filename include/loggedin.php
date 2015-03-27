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
$user_query = mysql_query("SELECT * FROM profile WHERE id='$my_id'");
$run_user = mysql_fetch_array($user_query);

$username = $run_user['username'];
$email = $run_user['email'];
$nickname = $run_user['nickname'];
$full_name = $run_user['fullname'];
$status = $run_user['status'];
$dob = $run_user['dob'];
$uid = $run_user['uid'];
$online = $run_user['online'];
$vaction = $run_user['vacation'];
$group = $run_user['group'];
$family = $run_user['family'];
$city = $run_user['city'];
$zip = $run_user['zip'];
$user_facebook = $run_user['facebook'];
$user_twitter = $run_user['twitter'];
$profile_pic = $run_user['picture'];
}
?>