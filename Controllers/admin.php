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
                        <td class="table-content">MPAA Rating:</td>
                    </tr>
                    <tr>
                        <td align="center"><input type="text" size="60" name="rating"></td>
                    </tr>
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
                <table class="movie-table" style="margin-bottom: 30px;">
                    <tr>
                        <td align="center">
                            <select name="title">
                                <option value="default">Select a movie</option>
                                <?php
                                $movie_select = "SELECT title FROM movies";
                                $movie_sql = mysqli_query($db, $movie_select);
                                while ($row = mysqli_fetch_assoc($movie_sql)) { ?>
                                    <option value="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            Showroom: <input type="text" name="room">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            Time: <input type="datetime-local" name="showtime">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <input type="submit" name="submit" value="Add Time">
                        </td>
                    </tr>
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
            <table class="movie-table">
                <tr>
                    <td align="center">
                        <select name="movie-id">
                            <option value="default">Select a movie</option>
                            <?php
                            $movie_select = "SELECT title FROM movies";
                            $movie_sql = mysqli_query($db, $movie_select);
                            while ($row = $movie_sql->fetch_assoc()) { ?>

                                <option value="title1"><?php echo $row['title']; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <?php
                $movie_data = "SELECT * FROM movies";
                $data_sql = mysqli_query($db, $movie_data);

                while ($data_rows = mysqli_fetch_array($data_sql)) {
                ?>

                    <tr>
                        <td class="table-content">Title:</td>
                    </tr>
                    <tr>
                        <td align="center"><input type="text" size="60" name="title" value="<?php echo $data_rows['title'] ?>"></td>
                    </tr>
                    <tr>
                        <td class="table-content">Genre:</td>
                    </tr>
                    <tr>
                        <td align="center"><input type="text" size="60" name="genre" value="<?php echo $data_rows['category'] ?>"></td>
                    </tr>
                    <tr>
                        <td class="table-content">Cast:</td>
                    </tr>
                    <tr>
                        <td align="center"><input type="text" size="60" name="cast" value="<?php echo $data_rows['cast_members'] ?>"></td>
                    </tr>
                    <tr>
                        <td class="table-content">Director:</td>
                    </tr>
                    <tr>
                        <td align="center"><input type="text" size="60" name="director" value="<?php echo $data_rows['director'] ?>"></td>
                    </tr>
                    <tr>
                        <td class="table-content">Trailer:</td>
                    </tr>
                    <tr>
                        <td align="center"><input type="text" size="60" name="trailer" value="<?php echo $data_rows['trailerLink'] ?>"></td>
                    </tr>
                    <tr>
                        <td class="table-content">Synopsis:</td>
                    </tr>
                    <tr>
                        <td align="center"><input type="text" size="60" name="synopsis" value="<?php echo $data_rows['Synopsis'] ?>"></td>
                    </tr>
                    <tr>
                        <td class="table-content">MPAA Rating:</td>
                    </tr>
                    <tr>
                        <td align="center"><input type="text" size="60" name="rating" value="<?php echo $data_rows['rating'] ?>"></td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td align="center">
                        <input type="submit" value="Submit Changes">
                    </td>
                </tr>
            </table>
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
                            <table class="movie-table">
                                <?php
                                if (mysqli_num_rows($res) > 0) {
                                    $i = 0;
                                    while ($row = mysqli_fetch_assoc($res)) { ?>
                                        <tr>
                                            <td> <input type="text" name="id_<?= $i ?>" value="<?php echo $row['promotion_id'] ?>"></td>
                                            <td> <input type="text" name="code" value="<?php echo $row['code'] ?>"></td>
                                            <td> <input type="text" name="start" value="<?php echo $row['start_date'] ?>"></td>
                                            <td> <input type="text" name="end" value="<?php echo $row['end_date'] ?>"></td>
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
                    <tr>
                        <td align="center">
                            <select name="user-id">
                                <option value="default">Select a User</option>
                                <?php
                                $sql = mysqli_query($db, "SELECT username FROM user");
                                while ($row = mysqli_fetch_assoc($sql)) { ?>
                                    <option value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <select name="Status">
                                <option value="default">User Status</option>
                                <option value="status0" name="active">Active</option>
                                <option value="status1" name="inactive">Inactive</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <input type="submit" value="Submit Changes">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </div>
</body>