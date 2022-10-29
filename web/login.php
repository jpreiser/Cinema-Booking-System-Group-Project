<?php
include("config.php");
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Welcome!</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta http-equiv="refresh" content="2;url=./landing.php" />
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
    <div id="content" class="container">
        <h2>Welcome!</h2>
        <center>
            <p>Login successful. Redirecting...</p>
        </center>
    </div>
</body>

</html>