<?php
include("config.php");
session_start();
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>admin</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script>
        function showAdd() {
            var x = document.getElementById("add-movie");
            if (x.style.display === 'none')
                x.style.display = "block";
            else
                x.style.display = "none";
        }

        function showAddTime() {
            var x = document.getElementById("add-showtime");
            if (x.style.display === 'none')
                x.style.display = "block";
            else
                x.style.display = "none";
        }

        function showDelete() {
            var x = document.getElementById("delete-movie");
            if (x.style.display === 'none')
                x.style.display = "block";
            else
                x.style.display = "none";
        }

        function showEdit() {
            var x = document.getElementById("edit-movie");
            if (x.style.display === 'none')
                x.style.display = "block";
            else
                x.style.display = "none";
        }

        function showPromos() {
            var x = document.getElementById("manage-promos");
            if (x.style.display === 'none')
                x.style.display = "block";
            else
                x.style.display = "none";
        }

        function showUsers() {
            var x = document.getElementById("manage-users");
            if (x.style.display === 'none')
                x.style.display = "block";
            else
                x.style.display = "none";
        }
    </script>
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
    <div id="options-wrap" class="container">
        <div id="options" class="options-bar">
            <ul id="options">
                <center>
                    <li id="add-movie-option">
                        <button onclick="showAdd()">Add Movie</button>
                    </li>
                    <li id="add-showtime-option">
                        <button onclick="showAddTime()">Add Showing</button>
                    </li>
                    <li id="delete-movie-option">
                        <button onclick="showDelete()">Delete Movie</button>
                    </li>
                    <li id="edit-movie-option">
                        <button onclick="showEdit()">Edit Movie</button>
                    </li>
                    <li id="manage-promos-option">
                        <button onclick="showPromos()">Manage Promos</button>
                    </li>
                    <li id="manage-users-option">
                        <button onclick="showUsers()">Manage Users</button>
                    </li>
                </center>
            </ul>
        </div>
    </div>

    <div id="add-movie" class="container" style="display:none">
        <center>
            <h3>Add Movie</h3>
            <form id="add-movie" action="add-movie.php" method="post">
                <table class="movie-table" id="add-movie-table">
                    <tr>
                        <td class="table-content">Title:</td>
                    </tr>
                    <tr>
                        <td align="center"><input type="text" size="60" name="title"></td>
                    </tr>
                    <tr>
                        <td class="table-content">Genre:</td>
                    </tr>
                    <tr>
                        <td align="center"><input type="text" size="60" name="genre"></td>
                    </tr>
                    <tr>
                        <td class="table-content">Cast:</td>
                    </tr>
                    <tr>
                        <td align="center"><input type="text" size="60" name="cast"></td>
                    </tr>
                    <tr>
                        <td class="table-content">Director:</td>
                    </tr>
                    <tr>
                        <td align="center"><input type="text" size="60" name="director"></td>
                    </tr>
                    <tr>
                        <td class="table-content">Trailer:</td>
                    </tr>
                    <tr>
                        <td align="center"><input type="text" size="60" name="trailer"></td>
                    </tr>
                    <tr>
                        <td class="table-content">Synopsis:</td>
                    </tr>
                    <tr>
                        <td align="center"><input type="text" size="60" name="synopsis"></td>
                    </tr>
                    <!--
                    <tr>
                        <td class="table-content">Poster:</td>
                    </tr>
                    <tr>
                        <td><button>Upload Poster</button></td>
                    </tr>
                    <tr>
                        <td class="table-content">Trailer:</td>
                    </tr>
                    <tr>
                        <td><button>Upload Trailer</button></td>
                    </tr>
                    -->
                    <tr>
                        <td class="table-content">Rating:</td>
                    </tr>
                    <tr>
                        <td align="center"><input type="text" size="60" name="rating"></td>
                    </tr>
                    <!--
                    <tr>
                        <td class="table-content">Release Date:</td>
                    </tr>
                    <tr>
                        <td><input type="date" size="60" name="release-date"></td>
                    </tr>
                    <tr>
                        <td class="table-content">Archive Date:</td>
                    </tr>
                    <tr>
                        <td><input type="date" size="60" name="Archive-date"></td>
                    </tr>
                    -->
                    <tr>
                        <td align="center">
                            <input type="submit" name="submit" value="Add Movie">
                        </td>
                    </tr>
            </form>
            </table>
        </center>
    </div>
    <div id="add-showtime" class="container" style="display:none">
        <center>
            <h3>Add Showing</h3>
            <form id="add-showtime" action="add-showtime.php" method="post">
                <?php
                $sql = "SELECT * FROM movies";
                $res = mysqli_query($db, $sql);
                ?>
                <table class="movie-table">
                    <?php
                    if (mysqli_num_rows($res) > 0) {
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($res)) { ?>
                            <tr>
                                <td> <input type="text" name="id_<?= $i ?>" value="<?php echo $row['movie_id'] ?>"> </td>
                                <td> <input type="text" name="title_<?= $i ?>" value="<?php echo $row['title'] ?>"></td>
                                <td> <input type="text" name="room_<?= $i ?>" placeholder="Showroom"></td>
                                <td> <input type="date" name="date_<?= $i ?>"></td>
                                <td> <input type="time" name="time_<?= $i ?>" min="9:00" max="22:00"></td>
                                <td> <input type="submit" name="update[<?= $i ?>]" value="Update"> </td>
                            </tr>
                    <?php
                            $i++;
                        }
                    }
                    ?>
                </table>
            </form>
        </center>
    </div>
    <div id="delete-movie" class="container" style="display:none">
        <center>
            <h3>Delete Movie</h3>
            <form id="delete-movie" action="delete-movie.php" method="post">
                <?php
                $sql = "SELECT * FROM movies";
                $res = mysqli_query($db, $sql);
                ?>
                <table class="movie-table">
                    <?php
                    if (mysqli_num_rows($res) > 0) {
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($res)) { ?>
                            <tr>
                                <td> <input type="text" name="id_<?= $i ?>" value="<?php echo $row['movie_id'] ?>"></td>
                                <td> <input type="text" name="title" value="<?php echo $row['title'] ?>"></td>
                                <td> <input type="submit" name="delete[<?= $i ?>]" value="Delete"></td>
                            </tr>
                    <?php
                            $i++;
                        }
                    }
                    ?>
                    <!--
                    <tr>
                        Enter a title: <br>
                        <td align="center">
                        <input type="text" name="title"></td>
                    
                            <select name="title">
                                
                                
                            </select>
                                
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <input type="submit" name="submit" value="Delete Entry">
                        </td>
                    </tr>
                    -->
                </table>
            </form>
        </center>
    </div>
    <div id="edit-movie" class="container" style="display:none">
        <center>
            <h3>Edit Movie</h3>
            <form id="edit-movie" action="edit-movie.php" method="post">
                <?php
                $sql = "SELECT * FROM movies";
                $res = mysqli_query($db, $sql);
                ?>
                <table class="movie-table">
                    <?php
                    if (mysqli_num_rows($res) > 0) {
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($res)) { ?>
                            <tr>
                                <td> <input type="text" name="id_<?= $i ?>" value="<?php echo $row['movie_id'] ?>"> </td>
                                <td> <input type="text" name="title_<?= $i ?>" value="<?php echo $row['title'] ?>"></td>
                                <td> <input type="text" name="cast_<?= $i ?>" value="<?php echo $row['cast_members'] ?>"></td>
                                <td> <input type="text" name="director_<?= $i ?>" value="<?php echo $row['director'] ?>"></td>
                                <td> <input type="text" name="synopsis_<?= $i ?>" value="<?php echo $row['Synopsis'] ?>"></td>
                                <td> <input type="text" name="trailer_<?= $i ?>" value="<?php echo $row['trailerLink'] ?>"></td>
                                <td> <input type="text" name="category_<?= $i ?>" value="<?php echo $row['category'] ?>"></td>
                                <td> <input type="text" name="rating_<?= $i ?>" value="<?php echo $row['rating'] ?>"></td>
                                <td> <input type="submit" name="update[<?= $i ?>]" value="Update"> </td>
                            </tr>
                    <?php
                            $i++;
                        }
                    }
                    ?>
                </table>
            </form>
        </center>
    </div>
    <div id="manage-promos" class="container" style="display:none">
        <center>
            <h3>Manage Promotions</h3>
            <div id="add-promo">
                <form id="add-promo" action="add-promo.php" method="post">
                    <table>
                        <tr>
                            <h4>Add a Promotion</h4>
                        </tr>
                        <tr>
                            <td align="center">
                                Promo Code: <input type="text" name="code">
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                Discount: <input type="text" name="discount">
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                Start Date: <input type="date" name="start-date">
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                End Date: <input type="date" name="end-date">
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="submit" name="submit" value="Add">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="edit-promo">
                <table>
                    <tr>
                        <h4>Edit a Promotion</h4>
                    </tr>
                    <form id="edit-promo" action="edit-promo.php" method="post">
                        <?php
                        $sql = "SELECT * FROM promotions";
                        $res = mysqli_query($db, $sql);
                        ?>
                        <table class="promo-table">
                            <?php
                            if (mysqli_num_rows($res) > 0) {
                                $i = 0;
                                while ($row = mysqli_fetch_assoc($res)) { ?>
                                    <tr>
                                        <td> <input type="text" name="id_<?= $i ?>" value="<?php echo $row['promotion_id'] ?>"></td>
                                        <td> <input type="text" name="code_<?= $i ?>" value="<?php echo $row['code'] ?>"></td>
                                        <td> <input type="text" name="start_<?= $i ?>" value="<?php echo $row['start_date'] ?>"></td>
                                        <td> <input type="text" name="end_<?= $i ?>" value="<?php echo $row['end_date'] ?>"></td>
                                        <td> <input type="submit" name="update[<?= $i ?>]" value="Update"></td>
                                    </tr>
                            <?php
                                    $i++;
                                }
                            }
                            ?>
                        </table>
                    </form>
                </table>
                <div id="add-promo">
                    <table>
                        <tr>
                            <h4>Archive a Promotion</h4>
                        </tr>
                        <form id="delete-promo" action="delete-promo.php" method="post">
                            <?php
                            $sql = "SELECT * FROM promotions";
                            $res = mysqli_query($db, $sql);
                            ?>
                            <table class="movie-table">
                                <?php
                                if (mysqli_num_rows($res) > 0) {
                                    $i = 0;
                                    while ($row = mysqli_fetch_assoc($res)) { ?>
                                        <tr>
                                            <td> <input type="text" name="id_<?= $i ?>" value="<?php echo $row['promotion_id'] ?>"></td>
                                            <td> <input type="text" name="code" value="<?php echo $row['code'] ?>"></td>
                                            <td> <input type="submit" name="delete[<?= $i ?>]" value="Delete"></td>
                                        </tr>
                                <?php
                                        $i++;
                                    }
                                }
                                ?>
                            </table>
                        </form>
                </div>
            </div>
        </center>
    </div>
    <div id="manage-users" class="container" style="display:none">
        <center>
            <h3>Manage Users</h3>
            <form id="manage-user" action="manage-user.php" method="post">
                <table class="user-table">
                    <form id="edit-promo" action="edit-promo.php" method="post">
                        <?php
                        $sql = "SELECT * FROM user";
                        $res = mysqli_query($db, $sql);
                        ?>
                        <table class="promo-table">
                            <?php
                            if (mysqli_num_rows($res) > 0) {
                                $i = 0;
                                while ($row = mysqli_fetch_assoc($res)) { ?>
                                    <tr>
                                        <td> <input type="text" name="id_<?= $i ?>" value="<?php echo $row['user_id'] ?>"></td>
                                        <td> <input type="text" name="user_<?= $i ?>" value="<?php echo $row['username'] ?>"></td>
                                        <td> <input type="text" name="status_<?= $i ?>" value="<?php echo $row['account_status'] ?>"></td>
                                        <td> <input type="submit" name="update[<?= $i ?>]" value="Update"></td>
                                    </tr>
                            <?php
                                    $i++;
                                }
                            }
                            ?>
                        </table>
                    </form>
                </table>
            </form>
        </center>
    </div>
</body>