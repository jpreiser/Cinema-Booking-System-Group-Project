<?php
include("config.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $pwd = mysqli_real_escape_string($db, $_POST['pwd']);
    $result = mysqli_query($db, "SELECT * FROM User");
    $c_rows = mysqli_num_rows($result);
    if ($c_rows != $email) {
        header("location: index.php?remark_login=failed");
    }
    $sql = "SELECT user_id FROM User WHERE username='$email' and password='$pwd'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);
    $active = $row['active'];
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['login_user'] = $email;
        $logged_in = "UPDATE User SET login_status='1' WHERE username='$email'";
        
        header("location: profile.php");
    }
}
?>