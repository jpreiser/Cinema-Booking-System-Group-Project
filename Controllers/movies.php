<?php
$db = new mysqli('localhost', 'root', '', 'cebs_db');

if($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}

$result = $db->query("SELECT * FROM movies");

$movies = array();
while ($row = $result->fetch_assoc()) {
    $movies[] = $row;
}
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Movies</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <header id="header" role="banner">
        <div id="header-left">
            <h1 href="landing.php" title="UGA Theaters">UGA Theaters</h1>

        </div>
    </header>

    <div id="navbar-1-wrap">
        <nav id="navbar-1" class="topnav" role="navigation">
            <div id="navbar-1-left">
                <ul id="nav-1" class="nav-1">
                    <li id="menu-item-home">
                        <a href="landing.php">Home</a>
                    </li>
                    <li id="menu-item-purchase">
                        <a href="movies.php">Now Playing</a>
                    </li>
                    <li id="menu-item-login">
                        <a href="index.php">Login</a>
                    </li>
                    <li id="menu-item-profile">
                        <a href="profile.php">Profile</a>
                    </li>
                    <li id="menu-item-search">
                        <a href="search.php">Search for Movies</a>
                    </li>
                    <li id="menu-item-home" style="float: right;">
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <h2>Movies</h2>
    <u1>
        <?php foreach ($movies as $movie): ?>
	    <li>
	        <h3><?php echo $movie['title']; ?></h3>
		<p>Synopsis: <?php echo $movie['Synopsis']; ?></p>
		<a href="purchase.php" class="btn">Checkout</a>
	    </li>
	<?php endforeach; ?>
    </u1>
</body>

