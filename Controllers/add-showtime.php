<?php
include("config.php");
include('session.php');

if (isset($_POST['submit'])) {
    $code = $_POST['code'];
    //$discount = $_POST['discount'];
    $startdate = $_POST['start-date'];
    $enddate = $_POST['end-date'];

    $sql = "INSERT INTO promotions(code, start_date, end_date) VALUES ('$code', '$startdate', '$enddate')";

    if (mysqli_query($db, $sql)) {
        header('location:admin.php');
    } else {
        echo mysqli_error($db);
    }

}
?>
