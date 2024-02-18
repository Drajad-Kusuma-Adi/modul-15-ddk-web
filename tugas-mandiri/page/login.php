<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == "admin" && $_POST['password'] == "admin") {
        $_SESSION['level'] = 'admin';
        header("location: ../index.php?page=home");
    }
}
?>