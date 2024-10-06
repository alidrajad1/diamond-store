<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

   
    $default_profile_pic = '../img/profile/default.jpg';

  
    $user_data = $name . "," . $email . "," . $hashed_password . "," . $default_profile_pic . "\n";
    file_put_contents('users.txt', $user_data, FILE_APPEND);


    $_SESSION['username'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['profile_pic'] = $default_profile_pic;

    setcookie('username', $name, time() + 86400, "/");

    header("Location: dashboard.php");
    exit();
}
?>
