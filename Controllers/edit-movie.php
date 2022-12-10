<?php
include("config.php");
include('session.php');

if (isset($_POST['update'])) {
    $upd_id = array_keys($_POST['update']);
    $upd_id = $upd_id[0];

    $id = $_POST["id_$upd_id"];
    $title = $_POST["title_$upd_id"];
    $category = $_POST["category_$upd_id"];
    $cast = $_POST["cast_$upd_id"];
    $director = $_POST["director_$upd_id"];
    $trailer = $_POST["trailer_$upd_id"];
    $synopsis = $_POST["synopsis_$upd_id"];
    $rating = $_POST["rating_$upd_id"];


    $select = "SELECT * FROM movies WHERE movie_id=$id";
    $sql = mysqli_query($db,$select);
    $row = mysqli_fetch_assoc($sql); 

    $res = $row['movie_id'];
    if ($res == $id)
    {

    $update = "UPDATE movies
    SET movie_id='$id',title='$title', category='$category', cast_members='$cast', 
    director='$director', Synopsis='$synopsis', trailerLink='$trailer', rating='$rating'
    WHERE movie_id=$id";
    $result = mysqli_query($db,$update);
    if($result) {
        header('location:admin.php');
    } else {
        $e = mysqli_error($db);
        echo $e;
    }
}
}
?>
