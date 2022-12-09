<?php
include("config.php");
include('session.php');

if (isset($_POST['update'])) {
    $upd_id = array_keys($_POST['update']);
    $upd_id = $upd_id[0];

    $id = $_POST["id_$upd_id"];
    $code = $_POST['code'];
    $start = $_POST['start'];
    $end = $_POST['end'];


    $select = "SELECT * FROM promotions WHERE promotion_id=$id";
    $sql = mysqli_query($db,$select);
    $row = mysqli_fetch_assoc($sql); 

    $res = $row['promotion_id'];
    if ($res == $id)
    {

    $update = "UPDATE promotions
    SET promotion_id='$id',code='$code', start_date='$start', end_date='$end'
    WHERE promotion_id=$id";
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
