<?php
include('session.php');
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <header id="header" role="banner">
        <div id="header-left">
            <h1 href="landing.php" title="UGA Theaters">UGA Theaters</h1>
        </div>
    </header>

    <?php
    include "navbar.php";
    ?>
    <div id="container" class="container">
        <?php
        $customer_sql = "SELECT * FROM Customers WHERE customer_id='$_SESSION[login_user]'";
        $credit_card_sql = "SELECT * FROM credit_cards WHERE customer_id=(SELECT customer_id FROM Customers WHERE customer_id='$_SESSION[login_user]')";
        $customer_result = mysqli_query($db, $customer_sql);
        $card_result = mysqli_query($db, $credit_card_sql);
        ?>
        <?php
            while ($rows = mysqli_fetch_array($customer_result)) {
                $rows2 = mysqli_fetch_array($card_result);
        ?>

            <form action="" method="POST" id="profile">
                <div id="profile-info">
                    <h2>My Profile</h2>
                    <label><b>Name</b></label>
                    <p>
                        <?php echo $rows['first_name']; ?> <?php echo $rows['last_name']; ?>
                    </p>
                    <label><b>Email</b></label>
                    <p>
                        <?php
                        echo $rows['email']; ?>
                    </p>
                    <label><b>Address</b></label>
                    <p>
                        <?php
                        if(isset($rows2['billingAddress'])){
                            echo $rows2['billingAddress'];
                        }else{
                            echo "No address associated with account.";
                        } ?>
                    </p>
                    <label><b>Saved Cards</b></label>
                    <p>
                        <?php
                        if(isset($rows2['card_number'])){
                            echo 'XXXX-XXXX-XXXX-'.substr($rows2['card_number'], -4);
                        }
                        else{
                            echo 'No cards associated with this account.';
                        } ?>
                    </p>
                </div>
            </form>
        <?php
        }
        ?>
        <a href="edit-profile.php" class="btn">Edit Profile</a>
        <a href="bookings.php" class="btn" style="float: right;">Purchase History</a>

    </div>
</body>