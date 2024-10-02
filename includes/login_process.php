<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

 
    if ($username == 'admin' && $password == 'admin') {
        $_SESSION['username'] = $username;
        $_SESSION['last_activity'] = time(); 

        setcookie('username', $username, time() + 86400, "/"); 

        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau Password salah!";
    }
}
?>