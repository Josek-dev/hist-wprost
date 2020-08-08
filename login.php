<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



$login = "admin";
$pass = "test123";

if (isset($_POST['action']) && $_POST['action'] === "login") {

    if ($_POST['nickname'] === $login && $_POST['password'] === $pass) {
        $_SESSION["completed"] = "TRUE";
        require_once "admin.php";
        exit();
    } else {
        echo "error";
    }
}
