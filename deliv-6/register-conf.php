<?php
include("config.php");
session_start();
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Registration Confirmed</title>
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
    <div class="container">
        <h2>Welcome!</h2>
        <center>
            <p>A confirmation email has been sent to your email address. Please click the contained link to verify your
                account.</p>
            <a href="profile.php" class="btn">See your Profile</a>
            <a href="movies.php" class="btn">Buy Tickets</a>
        </center>
    </div>
</body>