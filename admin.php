<?php
session_start();
unset($_SESSION['completed']);
session_destroy();
//header("Location: index.php");
?>