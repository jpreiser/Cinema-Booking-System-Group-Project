<?php
include("config.php");
session_start();
$email = $_POST['email'];
$result = mysqli_query($db, "SELECT * FROM User WHERE username='$email'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
    header("location: register.php?remarks=failed");
} else {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $ccnum = $_POST['ccnum'];
    //$expdate = $_POST['exp-date'];
    //$cvc = $_POST['cvc'];
    //$address = $_POST['address'];
    $user_id = crc32($email);

    if(mysqli_query($db,"INSERT INTO User(username, password, account_type, user_id)VALUES('$email', '$pwd','0', '$user_id')") 
    && mysqli_query($db, "INSERT INTO Customers(first_name, last_name, email)VALUES('$fname', '$lname', '$email')")) {
        $_SESSION['login_user'] = $email;
        header("location: register-conf.php");
    } else {
        $e = mysqli_error($db);
        header("location: register.php?remarks=error&value=$e");
    }
}
?>