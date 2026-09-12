<?php 
session_start();

if (!isset($_SESSION['status_login']) or $_SESSION['status_login'] !== true) {
    header("location: login.php");
    exit();
}

?>