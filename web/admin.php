
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
                    <button onclick="showAddTime()">Add Showtime</button>
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
                    <td class="table-content">Producer:</td>
                </tr>
                <tr>
                    <td align="center"><input type="text" size="60" name="producer"></td>
                </tr>
                <tr>
                    <td class="table-content">Companies:</td>
                </tr>
                <tr>
                    <td align="center"><input type="text" size="60" name="companies"></td>
                </tr>
                <tr>
                    <td class="table-content">Synopsis:</td>
                </tr>
                <tr>
                    <td align="center"><input type="text" size="60" name="synopsis"></td>
                </tr>
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
                        <input type="submit" value="Add Movie">
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div id="add-showtime" class="container" style="display:none">
        <center>
            <h3>Add Showtime</h3>
            <table class="movie-table" style="margin-bottom: 30px;">
                <tr>
                    <td align="center">
                        <select name="title">
                            <option value="default">Select a movie</option>
                            <option value="fletch">Confess, Fletch</option>
                            <option value="dont-worry-darling">Don't Worry Darling</option>
                            <option value="nope">Nope</option>
                            <option value="pearl">Pearl</option>
                            <option value="woman-king">The Woman King</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="datetime-local" name="date-time">
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" value="Add Time">
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div id="delete-movie" class="container" style="display:none">
        <center>
            <h3>Delete Movie</h3>
            <table class="movie-table">
                <tr>
                    <td align="center">
                        <select name="title">
                            <option value="default">Select a movie</option>
                            <option value="fletch">Confess, Fletch</option>
                            <option value="dont-worry-darling">Don't Worry Darling</option>
                            <option value="nope">Nope</option>
                            <option value="pearl">Pearl</option>
                            <option value="woman-king">The Woman King</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" value="Delete Entry">
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div id="edit-movie" class="container" style="display:none">
        <center>
            <h3>Edit Movie</h3>
            <table class="movie-table">
                <tr>
                    <td align="center">
                        <select name="movie-id">
                            <option value="default">Select a movie ID</option>
                            <option value="fletch">000</option>
                            <option value="dont-worry-darling">001</option>
                            <option value="nope">002</option>
                            <option value="pearl">003</option>
                            <option value="woman-king">004</option>
                        </select>
                    </td>
                </tr>
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
                    <td class="table-content">Producer:</td>
                </tr>
                <tr>
                    <td align="center"><input type="text" size="60" name="producer"></td>
                </tr>
                <tr>
                    <td class="table-content">Companies:</td>
                </tr>
                <tr>
                    <td align="center"><input type="text" size="60" name="companies"></td>
                </tr>
                <tr>
                    <td class="table-content">Synopsis:</td>
                </tr>
                <tr>
                    <td align="center"><input type="text" size="60" name="synopsis"></td>
                </tr>
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
                            Expiration Date: <input type="date" name="exp-date">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <input type="submit" value="Add">
                        </td>
                    </tr>
                </table>
            </div>
            <div id="edit-promo">
                <table>
                    <tr>
                        <h4>Edit a Promotion</h4>
                    </tr>
                    <tr>
                        <td align="center">
                            <select name="promo">
                                <option value="default">Select a promotion</option>
                                <option value="promo1">promo1</option>
                                <option value="promo2">promo2</option>
                            </select>
                        </td>
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
                            Expiration Date: <input type="date" name="exp-date">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <input type="submit" value="Update">
                        </td>
                    </tr>
                </table>
                <div id="add-promo">
                    <table>
                        <tr>
                            <h4>Archive a Promotion</h4>
                        </tr>
                        <tr>
                            <td align="center">
                                <select name="promo">
                                    <option value="default">Select a promotion</option>
                                    <option value="promo1">promo1</option>
                                    <option value="promo2">promo2</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="submit" value="Archive">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </center>
    </div>
    <div id="manage-users" class="container" style="display:none">
        <center>
            <h3>Manage Users</h3>
            <table class="user-table">
                <tr>
                    <td align="center">
                        <select name="user-id">
                            <option value="default">Select a User</option>
                            <option value="user0">0000 - $Admin</option>
                            <option value="user1">0001 - John Smith</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <select name="Status">
                            <option value="default">User Status</option>
                            <option value="status0">Active</option>
                            <option value="status1">Inactive</option>
                            <option value="status2">Removed</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" value="Submit Changes">
                    </td>
                </tr>
            </table>
        </center>
    </div>
</body>