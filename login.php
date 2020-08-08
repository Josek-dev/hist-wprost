<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

$login = "admin";
$password = "cc03e747a6afbbcbf8be7668acfebee5";
$username = htmlentities($_POST['nick'], ENT_QUOTES);
$pass = md5($_POST['pass']);

if (isset($_POST['action']) && $_POST['action'] === "login"){

    if ($username === $login && $pass === $password) {
        $_SESSION["completed"] = TRUE;
        require_once "admin.php";
        exit();
    } else {
        echo "error";
    }
}
?>