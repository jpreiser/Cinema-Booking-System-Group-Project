<?php
include("config.php");
include("confirmation-email.php");
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
    $expdate = $_POST['exp-date'];
    $ccv = $_POST['ccv'];
    $address = $_POST['address'];

    
    if(mysqli_query($db,"INSERT INTO User(username, password, account_type)VALUES('$email', '$pwd','0')")) {
        $result = mysqli_query($db, "SELECT * FROM User WHERE username='$email'");
        mysqli_query($db, "INSERT INTO Customers(first_name, last_name, email, user_id)VALUES('$fname', '$lname', '$email', (SELECT user_id FROM User WHERE username='$email'))");
        $_SESSION['login_user'] = $email;
        $code = generate_activation_code();
        send_activation_email($email, $code);
        if ($ccnum != null && $expdate != null && $ccv != null && $address != null) {
            $card_sql = "INSERT INTO credit_cards(card_number, ccv, expiration, billingAddress, customer_id)VALUES('$ccnum','$expdate','$ccv','$address',(SELECT customer_id FROM Customers WHERE customer_id='$_SESSION[login_user]'))";
            mysqli_query($db, $card_sql);
        }
        header("location: register-conf.php");
    } else {
        $e = mysqli_error($db);
        header("location: register.php?remarks=error&value=$e");
    }
}
?>
