<?php
include("config.php");
include('session.php');

if (isset($_POST['update'])) 
{
    $upd_id = array_keys($_POST['update']);
    $upd_id = $upd_id[0];

    $id = $_POST["id_$upd_id"];
    $title = $_POST["title_$upd_id"];
    $room = $_POST["room_$upd_id"];
    $date = $_POST["date_$upd_id"];
    $time = $_POST["time_$upd_id"];


    $select = "SELECT * FROM movies WHERE movie_id=$id";

    $sql = mysqli_query($db,$select);
    $row = mysqli_fetch_assoc($sql); 

    $res = $row['movie_id'];
    if ($res == $id) 
    {
        $add = "INSERT INTO showing(date, time, movie, show_room) 
        VALUES ('$date', '$time', '$id', '$room')";
        
        if (mysqli_query($db, $add)) 
        {
            header('location:admin.php');
        } else 
        {
            echo mysqli_error($db);
        }
    }

}

?>