<?php
include("config.php");
include('session.php');

if (isset($_POST['submit'])) {
    //$id = $_SESSION['login_user'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $ccnum = $_POST['ccnum'];
    $ccv = $_POST['ccv'];
    $address = $_POST['address'];
    $expMonth = $_POST['month'];
    $expYear = $_POST['year'];

    $timezone = new DateTimeZone('Europe/London');
    //$expire = \DateTime::createFromFormat('mY', $expMonth.$expYear, $timezone);
    //$expDate = $expire->format('Y-m-d H:i:s');

    $select = "SELECT * FROM user WHERE user_id=$loggedin_id";
    $sql = mysqli_query($db,$select);
    $row = mysqli_fetch_assoc($sql); 

    $res = $row['user_id'];
    if ($res == $loggedin_id)
    {

    $update = "UPDATE Customers, Credit_Cards 
    SET first_name='$fname',last_name='$lname',card_number='$ccnum', 
    ccv='$ccv',billingAddress='$address', expiration='$expDate' 
    WHERE customers.customer_id = credit_cards.customer_id 
    AND customers.customer_id=$loggedin_id";
    $result = mysqli_query($db,$update);
    if($result) {
        header('location:profile.php');
    } else {
        $e = mysqli_error($db);
        echo $e;
    }
}
}
?>
