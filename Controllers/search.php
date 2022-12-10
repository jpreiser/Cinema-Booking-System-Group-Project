<?php

// Connect to the database
$db = new mysqli('localhost', 'root', '', 'cebs_db');

// Check if the connection was successful
if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}

    // Check if the search form was submitted
if (isset($_POST['submit'])) {
        // Retrieve the search query
    $query = $_POST['query'];

    // Search the movies table for movies that match the search query
    $result = $db->query("SELECT * FROM movies WHERE title LIKE '%$query%'");

    // Check if there are any results
    if ($result->num_rows > 0) {
        // Store the results in an array
        $movies = array();
        while ($row = $result->fetch_assoc()) {
             $movies[] = $row;
        }
    } else {
        // No movies were found
        $movies = null;
    }
}
?>


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
	        <u1 id="nav-1" class="nav-1"> 
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
		        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			    <input type="text" name="query" placeholder="Search for Movies">
			    <input type="submit" name="submit" value="Search">
		        </form>
		    </li>
		    <li id="menu-item-home" style="float: right;">
		        <a href="logout.php">Logout</a>
	            </li>
                </u1>
	    </div>
	</nav>
    </div>
    <div id="entry" class="container">
        <?php if (isset($movies)): ?>
            <?php if ($movies): ?>
        	<h2>Results</h2>
        	<table>
            	    <?php foreach ($movies as $movie): ?>
		        <tr>
	                    <td><?php echo $movie['title'];?></td>
			    <td><?php echo $movie['cast_members'];?></td>
			    <td><?php echo $movie['director'];?></td>
			    <td><?php echo $movie['Synopsis'];?></td>
			    <td><a href="purchase.php" class="btn"><h3>Buy Tickets</h3></a></td>
		        </tr>
                    <?php endforeach; ?>
		</table>
		
    	    <?php else: ?>
        	<p>No movies were found.</p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>

<style>
table, th, td {
    border: 1px solid white;
}
</style>
