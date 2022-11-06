<?php
include('session.php');
session_start();

$logged_in = "UPDATE User SET login_status='0' WHERE username='$loggedin_session'";
$result = mysqli_query($db,$logged_in);
    if($result) {

$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();

header("Location: index.php");
    }
?>