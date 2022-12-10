<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include("config.php");
include('session.php');


if (isset($_POST['update'])) {
    $upd_id = array_keys($_POST['update']);
    $upd_id = $upd_id[0];

    $id = $_POST["id_$upd_id"];
    $status = $_POST["status_$upd_id"];
    
    $select = "SELECT * FROM user WHERE user_id=$id";
    $sql = mysqli_query($db,$select);
    $row = mysqli_fetch_assoc($sql); 

    $res = $row['user_id'];
    if ($res == $id)
    {

    $update = "UPDATE user
    SET account_status='$status'
    WHERE user_id=$id";
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
