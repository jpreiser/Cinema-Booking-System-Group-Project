<?php
include("config.php");
include('session.php');

if (isset($_POST['submit'])) {
    $id = $_SESSION['customer_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $ccnum = $_POST['ccnum'];
    $cvc = $_POST['cvc'];
    $address = $_POST['address'];

    $update = "UPDATE Customers SET first_name='$fname',last_name='$lname',ccnum='$ccnum',
        cvc='$cvc',address='$address' WHERE customer_id='$loggedin_id'";
    $result = mysqli_query($db,$update);
    if($result) {
        header('location:profile.php');
    }
}
?>
