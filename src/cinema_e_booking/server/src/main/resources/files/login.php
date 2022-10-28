<?php
session_start();
if (! empty($_POST) && $_POST['email'] === 'valid_email' && $_POST['pwd'] === 'valid_pwd')
{
    $_SESSION['logged_in'] = true;
    header('Location /index.html');
}
    $email = $pwd = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
}

?>