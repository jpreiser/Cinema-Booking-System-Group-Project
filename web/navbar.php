<div id="navbar-1-wrap">
    <nav id="navbar-1" class="topnav" role="navigation">
        <div id="navbar-1-left">
            <ul id="nav-1" class="nav-1">
                <li id="menu-item-home">
                    <a href="landing.php">Home</a>
                </li>
                <li id="menu-item-showtimes">
                    <a href="movies.php">Now Playing</a>
                </li>
                <li id="menu-item-login">
                    <a href="index.php">Login</a>
                </li>
                <?php if (isset($_SESSION['email']) && !empty($_SESSION['email'])) { ?>
                    <li id="menu-item-profile" style="float: right;">
                        <a href="profile.php">Profile</a>
                    <?php  } ?>
                <li id="menu-item-admin">
                    <a href="admin.php">Admin</a>
                </li>
                <li id="menu-item-search">
                    <input type="text" placeholder="Search for Movies">
                </li>
                <?php if (isset($_SESSION['email']) && !empty($_SESSION['email'])) { ?>
                    <li id="menu-item-logout" style="float: right;">
                        <a href="logout.php">Logout</a>
                    <?php  } ?>
                    </li>
            </ul>
        </div>
    </nav>


</div>