<?php include "login.php"; ?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <header id="header" role="banner">
        <div id="header-left">
            <h1 href="landing.php" title="UGA Theaters">UGA Theaters</h1>

        </div>
    </header>

    <div class="container">
        <h2> <?php
                $remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
                if ($remarks == null and $remarks == "") {
                    echo ' <div id="reg-head" class="headrg">Login</div> ';
                }
                if ($remarks == 'failed') {
                    echo ' <div id="reg-head-fail" class="headrg">Invalid Login, Try Again</div> ';
                }
                ?></h2>
        <div class="login">
            <center>
                <form id="login" action="" method="POST">

                    <p>
                        <label><b>Email Address</b></label>
                        <input type="text" id="email" name="email" placeholder="Email">
                    </p>
                    <p>
                        <label><b>Password</b></label>
                        <input type="password" id="pwd" name="pwd" placeholder="Password">
                    </p>
                    <input type="submit" value="Submit">
                </form>
                <p>
                    Need an account?
                    <a href="register.php" class="plain-text-link">Register Here</a>
                </p>
            </center>
        </div>
    </div>
</body>
