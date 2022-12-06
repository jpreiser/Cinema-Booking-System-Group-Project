<?php
include("config.php");
session_start();
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Bookings</title>
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
    <div class="col-25">
        <div class="container">
            <h2>Bookings</h2>
            <p><b>Saturday, October 1</b><span>
                    <a href="edit-booking.php" class="plain-text-link" style="float: right;">Edit</a>
                </span></p>
            <p style="text-indent: 10px; font-size: 14px;">Movie: Nope</p>
            <p style="text-indent: 10px; font-size: 14px;">Time: 11:30AM</p>
            <p style="text-indent: 10px; font-size: 14px;">Tickets: 3</p>
            <p style="text-indent: 15px; font-size: 12px;"><i>Adult 1x, Seat B2</i></p>
            <p style="text-indent: 15px; font-size: 12px;"><i>Child 1x, Seat B4</i></p>
            <p style="text-indent: 15px; font-size: 12px;"><i>Senior 1x, Seat B3</i></p>
            <p style="text-indent: 10px; font-size: 14px;"></p>


        </div>
    </div>
</body>