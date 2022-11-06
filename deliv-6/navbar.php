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
                <?php if (!isset($_SESSION['login_user']) && empty($_SESSION['login_user'])) {
                ?>
                    <li id="menu-item-login">
                        <a href="index.php">Login</a>
                    </li>
                <?php
                }
                ?>
                <?php if (isset($_SESSION['login_user']) && !empty($_SESSION['login_user'])) {
                ?>
                    <li id="menu-item-profile">
                        <a href="profile.php">Profile</a>
                    </li>
                <?php
                }
                ?>
                <li id="menu-item-admin">
                    <a href="admin.php">Admin</a>
                </li>
                <li id="menu-item-search">
                    <input type="text" placeholder="Search for Movies">
                </li>
                <?php if (isset($_SESSION['login_user']) && !empty($_SESSION['login_user'])) {
                ?>
                    <li id="menu-item-logout" style="float: right;">
                        <a href="logout.php">Logout</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>


</div>