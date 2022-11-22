<?php
include("config.php");
session_start();

//get data from form
$email = $_POST['email'];
$result = mysqli_query($db, "SELECT * FROM User WHERE username='$email'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
    header("location: index.php");
} else {
    $pwd = $_POST['pwd'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    if(mysqli_query($db,"INSERT INTO User(username, pwd, user_type, login_status)VALUES('$email', '$pwd', '0', '1')") 
    && mysqli_query($db, "INSERT INTO Customers(first_name, last_name, email)VALUES('$fname', '$lname', '$email')")) {
        header("location: register-conf.php");
    } else {
        $e = mysqli_error($db);
    }
}

?>