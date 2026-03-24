<?php
session_start();
if ($_SESSION['user_role'] !== 'admin') {
    header("Location: login.php"); // Boot them out
    exit();
}
?>