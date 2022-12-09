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
        $customer_sql = "SELECT * FROM Customers, Credit_Cards WHERE customers.customer_id = credit_cards.customer_id AND customers.customer_id=$loggedin_id";
        $customer_result = mysqli_query($db, $customer_sql);
        ?>
        <?php
        while ($rows = mysqli_fetch_array($customer_result)) {
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
                        echo $rows['billingAddress']; ?>
                    </p>
                    <label><b>Saved Cards</b></label>
                    <p>
                        <?php
                        echo 'XXXX-XXXX-XXXX-'.substr($rows['card_number'], -4); ?>
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