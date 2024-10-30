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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    $default_profile_pic = '../img/profile/default.jpg';

 
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, profile_pic) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $hashed_password, $default_profile_pic);

    if ($stmt->execute()) {
 
        $_SESSION['username'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['profile_pic'] = $default_profile_pic;

        setcookie('username', $name, time() + 86400, "/");


        header("Location: ../index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }


    $stmt->close();
}


$conn->close();
?>
