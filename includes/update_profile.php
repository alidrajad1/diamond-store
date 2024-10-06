<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $current_username = $_SESSION['username'];
    $new_username = $_POST['username'];
    $new_email = $_POST['email'];
    $new_password = $_POST['password'];

    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    $users = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $updated_users = [];

    foreach ($users as $user) {
        list($stored_username, $stored_email, $stored_password, $stored_profile_pic) = explode(',', $user);

        if ($stored_username === $current_username) {
            $profile_pic_path = $stored_profile_pic; 

            if (isset($_FILES['profile-pic']) && $_FILES['profile-pic']['error'] == UPLOAD_ERR_OK) {
                $upload_dir = '../img/profile/';
                $upload_file = $upload_dir . basename($_FILES['profile-pic']['name']);
                if (move_uploaded_file($_FILES['profile-pic']['tmp_name'], $upload_file)) {
                    $profile_pic_path = $upload_file;
                } else {
                 
                }
            }

            $updated_users[] = "$new_username,$new_email,$hashed_password,$profile_pic_path";
            $_SESSION['username'] = $new_username;
            $_SESSION['email'] = $new_email;
            $_SESSION['profile_pic'] = $profile_pic_path;
        } else {
            $updated_users[] = $user;
        }
    }

    file_put_contents('users.txt', implode(PHP_EOL, $updated_users) . PHP_EOL);

    header("Location: profile.php");
    exit();
}
?>
