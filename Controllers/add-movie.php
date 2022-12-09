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

    $sql = "INSERT INTO movies(title, cast_members, director, Synopsis, trailerLink, category, rating) VALUES ('$title', '$cast', '$director','$synopsis', '$trailer', '$genre', '$rating')";

    if (mysqli_query($db, $sql)) {
        header('location:admin.php');
    } else {
        echo mysqli_error($db);
    }

}
?>
