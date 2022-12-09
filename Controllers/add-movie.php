<?php
include("config.php");
include('session.php');

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $cast = $_POST['cast'];
    $director = $_POST['director'];
    $trailer = $_POST['trailer'];
    $synopsis = $_POST['synopsis'];
    $rating = $_POST['rating'];

    $sql = "INSERT INTO movies VALUES ('6', '$title', '$cast', '$director','$synopsis', '$trailer', '$genre', '$rating')";

    if (mysqli_query($db, $sql)) {
        echo "<h3>added successfully</h3>";
    } else {
        echo mysqli_error($db);
    }

}
?>
