<?php
include("config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //get data from form
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $pwd = mysqli_real_escape_string($db, $_POST['pwd']);

    $sql = "SELECT user_id FROM User WHERE username = '$email' and password = '$pwd'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    //table has 1 matching row
    if ($count == 1) {
        $_SESSION['email'] = $email;
        
    } else {
        $error = "Incorrect Credentials";
    }
}
?>

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

    <?php
    include "navbar.php";
    ?>
    <div class="container">
        <h2>Login</h2>
        <div class="login">
            <center>
                <form id="login" action="login.php" method="post">
                    <p>
                        <label><b>Email Address</b></label>
                        <input type="email" id="email" name="email" placeholder="Email">
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