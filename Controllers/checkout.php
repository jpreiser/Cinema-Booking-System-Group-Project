<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
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
    <div>
        <div class="col-75">
            <div class="container">
                <div class="col-50">
                    <h2>Payment</h2>
                    <div class="col-50">
                        <p>Credit or Debit Card Number</p>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="" />
                    </div>
                    <div class="row">
                        <div class="col-50">
                            <p>Expiration Month</p>
                            <select name="month" id="month">
                                <option value='1'>Jan</option>
                                <option value='2'>Feb</option>
                                <option value='3'>Mar</option>
                                <option value='4'>Apr</option>
                                <option value='5'>May</option>
                                <option value='6'>Jun</option>
                                <option value='7'>Jul</option>
                                <option value='8'>Aug</option>
                                <option value='9'>Sep</option>
                                <option value='10'>Oct</option>
                                <option value='11'>Nov</option>
                                <option value='12'>Dec</option>
                            </select>

                            <p>Expiration Year</p>
                            <select name="year" id="year">
                                <option value='1'>2022</option>
                                <option value='2'>2023</option>
                                <option value='3'>2024</option>
                                <option value='4'>2025</option>
                                <option value='5'>2026</option>
                                <option value='6'>2027</option>
                                <option value='7'>2028</option>
                                <option value='8'>2029</option>
                                <option value='9'>2030</option>
                                <option value='10'>2031</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-50">
                        <p>Security Code</p>
                        <input type="text" id="cvc" name="cvc" placeholder="" />
                    </div>

                    <div class="col-50">
                        <p></p>
                        
                        <a href="confirmation.php" class="btn">Pay Now</a>
                        <a href="landing.php" class="plain-text-link" style="float: right;">Cancel Order</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>