<?php
session_start();

$servername = "localhost";
$username_db = "root"; 
$password_db = ""; 
$database = "maseka_topup";

$conn = new mysqli($servername, $username_db, $password_db, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT username, email, password, profile_pic FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($stored_username, $stored_email, $stored_password, $stored_profile_pic);
    
    $is_valid_user = false;

    if ($stmt->num_rows > 0) {
        $stmt->fetch();

        if (password_verify($password, $stored_password)) {
            $is_valid_user = true;

         
            $_SESSION['username'] = $stored_username;
            $_SESSION['email'] = $stored_email;
            $_SESSION['profile_pic'] = $stored_profile_pic;
            $_SESSION['last_activity'] = time();

            setcookie('username', $stored_username, time() + 86400, "/");
        }
    }

    if ($is_valid_user) {
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: ../index.php?error=Wrong password or username!");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>
