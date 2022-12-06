<?php
include("config.php");
session_start();
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>My Cart</title>
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
            <h2>Cart</h2>
            <p><b>Ticket 1</b><span>
                    <a href="purchase.php" class="plain-text-link" style="font-size: 12px" ;">Edit</a>
                </span><span class="price">$11.00</span></p>
            <p style="text-indent: 10px; font-size: 14px;"><i>Type: Adult</i></p>
            <p style="text-indent: 10px; font-size: 14px;"><i>Seat: B2</i></p>
            <p style="text-indent: 10px; font-size: 12px;"><a href="cart.php" class="plain-text-link">Delete</a></p>
            <p><b>Ticket 2</b><span>
                    <a href="purchase.php" class="plain-text-link" style="font-size: 12px" ;">Edit</a>
                </span><span class="price">$9.00</span></p>
            <p style="text-indent: 10px; font-size: 14px;"><i>Type: Senior</i></p>
            <p style="text-indent: 10px; font-size: 14px;"><i>Seat: B3</i></p>
            <p style="text-indent: 10px; font-size: 12px;"><a href="cart.php" class="plain-text-link">Delete</a></p>
            <p><b>Ticket 3</b><span>
                    <a href="purchase.php" class="plain-text-link" style="font-size: 12px" ;">Edit</a>
                </span><span class="price">$9.00</span></p>
            <p style="text-indent: 10px; font-size: 14px;"><i>Type: Child</i></p>
            <p style="text-indent: 10px; font-size: 14px;"><i>Seat: B4</i></p>
            <p style="text-indent: 10px; font-size: 12px;"><a href="cart.php" class="plain-text-link">Delete</a></p>
            <h3>Total <span class="price"><b>$29.00</b></span></h3>
            <a href="checkout.php" class="btn">Proceed to Checkout</a>

        </div>
    </div>
</body>