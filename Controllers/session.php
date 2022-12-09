<?php
include("config.php");
session_start();
$user_check = $_SESSION['login_user'];
$ses_sql=mysqli_query($db,"SELECT username,user_id FROM User WHERE username='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['username'];
$loggedin_id=$row['user_id'];
if(!isset($loggedin_session) || $loggedin_session==NULL) {
 echo "Go back";
 header("Location: index.php");
}
?>