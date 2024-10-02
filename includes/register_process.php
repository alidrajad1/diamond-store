<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

  
    $_SESSION['registered_user'] = [
        'name' => $name,
        'email' => $email,
        'password' => $password 
    ];


    $_SESSION['username'] = $name;

    setcookie('username', $username, time() + 86400, "/"); 
   
    header("Location: dashboard.php");
    exit(); 
}
