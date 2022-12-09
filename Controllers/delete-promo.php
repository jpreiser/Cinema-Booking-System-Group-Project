<?php
include("config.php");
include('session.php');


if (isset($_POST['delete'])) {
    $del_id = array_keys($_POST['delete']);
    $del_id = $del_id[0];
    $id = $_POST["id_$del_id"];
    
    
    $del = "DELETE FROM promotions WHERE promotion_id = '$id'";
    $result = mysqli_query($db,$del);
    if ($result) {
        header('location:admin.php');   
    } else {
        echo "ERROR: " . $del . "<br>" . mysqli_error($db);
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
