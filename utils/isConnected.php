<?php
if (!isset($_COOKIE['user']) || empty($_COOKIE['user'])) {
    header("Location: ../public/login.php");
    exit();
}
