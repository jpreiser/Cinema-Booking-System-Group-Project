<?php
include("config.php");
include('session.php');

//if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    /*$ccnum = $_POST['ccnum'];
    $ccv = $_POST['ccv'];
    $address = $_POST['address'];
    $expMonth = $_POST['month'];
    $expYear = $_POST['year'];

    $expire = date_create($expMonth.$expYear)/*\DateTime::createFromFormat('mY', $expMonth.$expYear);
    $expDate = $expire->format('Y-m');*/

    $select = "SELECT * FROM Customers WHERE customer_id='$_SESSION[login_user]'";
    $customer_sql = mysqli_query($db,$select);
    $row = mysqli_fetch_array($customer_sql); 

    /*$res = $row['customer_id'];
    if ($res == $_SESSION["login_user"])
    {*/

    $update_customer = "UPDATE Customers
    SET first_name='$fname',last_name='$lname'
    WHERE customer_id=$_SESSION[login_user]";
    
    /*$update_card = "UPDATE credit_cards
    SET card_number='$ccnum',ccv"*/
    $result_customer = mysqli_query($db,$update_customer);
    if($result_customer) {
        header('location: profile.php');
    } else {
        $e = mysqli_error($db);
        header("location: edit-profile.php?remarks=error&value=$e");
    }
    header('location: profile.php');
//}
//}
?>
