<?php
include("config.php");
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>UGA Theaters</title>
    <link rel="stylesheet" href="style.css">
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

    <div id="container-wrap" class="container">
        <h2>
            <center>Now Playing</center>
        </h2>
        <div id="content" class="row">
            <div class="column">
                <a href="movies.php"><img src="images/Nope.jpg" style="width:250px;height:375px;"></a>
            </div>
            <div class="column">
                <a href="movies.php"><img src="images/Dont_Worry_Darling.jpg" style="width:250px;height:375px;"></a>
            </div>
            <div class="column">
                <a href="movies.php"><img src="images/Confess_Fletch.jpg" style="width:250px;height:375px;"></a>
            </div>
            <div class="column">
                <a href="movies.php"><img src="images/Pearl.jpg" style="width:250px;height:375px;"></a>
            </div>
            <div class="column">
                <a href="movies.php"><img src="images/The_Woman_King.jpg" style="width:250px;height:375px;"></a>
            </div>
        </div>
        <h2>
            <center>Coming Soon</center>
        </h2>
        <div class="row">
            <div class="column">
                <img src="images/Avatar.jpg" style="width:250px;height:375px;">
            </div>
            <div class="column">
                <img src="images/Smile.jpg" style="width:250px;height:375px;">
            </div>
            <div class="column">
                <img src="images/Suzume_no_Tojimari.jpg" style="width:250px;height:375px;">
            </div>
            <div class="column">
                <img src="images/Black_Adam.jpg" style="width:250px;height:375px;">
            </div>
            <div class="column">
                <img src="images/Halloween_Ends.jpg" style="width:250px;height:375px;">
            </div>
        </div>
    </div>
</body>

</html>