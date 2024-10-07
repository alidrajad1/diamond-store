<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    $is_valid_user = false;

    foreach ($users as $user) {
        list($stored_username, $stored_email, $stored_password, $stored_profile_pic) = explode(',', $user);

        if ($username === $stored_username && password_verify($password, $stored_password)) {
            $is_valid_user = true;

            $_SESSION['username'] = $stored_username;
            $_SESSION['email'] = $stored_email;
            $_SESSION['profile_pic'] = $stored_profile_pic;
            $_SESSION['last_activity'] = time();

            setcookie('username', $stored_username, time() + 86400, "/");
            break;
        }
    }

    if ($is_valid_user) {
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: ../index.php?error=Wrong password or username!");
        exit();
    }
}
?>
