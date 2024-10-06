<?php
session_start();

$session_duration = 1800;

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $session_duration) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}

$_SESSION['last_activity'] = time();
?>
