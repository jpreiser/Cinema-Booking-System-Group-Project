<?php
include("config.php");
session_start();
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
        <div id="profile-info">
            <h2>My Profile</h2>
            <a href="bookings.php" class="btn" style="float: right;">Edit Bookings</a>
            <label><b>Name</b></label>
            <p>

            </p>
            <label><b>Email</b></label>

            <p>
                <?php
                $_POST['email'];
                ?>
            </p>
            <label><b>Date of Birth</b></label>
            <p>Jan 1, 1980</p>
            <label><b>Phone Number</b></label>
            <p>555-555-5555</p>
            <label><b>Address</b></label>
            <p>123 Lane</p>
            <label><b>City</b></label>
            <p>Athens</p>
            <label><b>State</b></label>
            <p>Georgia</p>
            <label><b>ZIP</b></label>
            <p>30609</p>
            <label><b>Saved Cards</b></label>
            <p>XXXX-XXXX-XXXX-2289</p>
            <p>Expires: 02/23</p>
        </div>
        <a href="edit-profile.php" class="btn">Edit Profile</a>
        <a href="landing.php" class="btn" style="float: right;">Logout</a>

    </div>
</body>