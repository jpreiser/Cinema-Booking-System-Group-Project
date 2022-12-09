<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include("config.php");
include('session.php');


if (isset($_POST['submit'])) {
    $title = $_POST['title'];

    $del = "DELETE FROM movies WHERE title = $title";
    $result = mysqli_query($db,$del);
    if ($result) {
        header('location:admin.php');
    }


    
    //$select = "SELECT * FROM movies WHERE title = $title";
    //$sql = mysqli_query($db, $select);
    //$row = mysqli_fetch_assoc($sql); 
    //$res = $row['title'];

    //if ($res == $title) {
      //  $del = "DELETE FROM movies WHERE title = $title";
        //$result = mysqli_query($db,$del);
        //if ($result) {
        //header('location:admin.php');
        //}
    //}

}
?>
