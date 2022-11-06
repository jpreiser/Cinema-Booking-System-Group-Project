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
        $sql = "SELECT * FROM Customers WHERE customer_id=$loggedin_id";
        $result = mysqli_query($db, $sql);
        ?>
        <?php
        while ($rows = mysqli_fetch_array($result)) {
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
                        echo $rows['address']; ?>
                    </p>
                    <label><b>Saved Cards</b></label>
                    <p>
                        <?php
                        echo $rows['ccnum']; ?>
                    </p>
                </div>
            </form>
        <?php
        }
        ?>
        <a href="edit-profile.php" class="btn">Edit Profile</a>
        <a href="bookings.php" class="btn" style="float: right;">Edit Bookings</a>

    </div>
</body>