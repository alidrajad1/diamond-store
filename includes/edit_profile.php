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

$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>MASEKA TOPUP</title>
    <link rel="stylesheet" href="../css/profile.css"/>
    <link rel="stylesheet" href="../css/headerfooter.css"/>
</head>
<body>

<?php include('header.php'); ?>

<input type="hidden" id="session-duration" value="<?php echo $session_duration; ?>" />

<div class="container">
    <div class="sidebar">
        <div class="settings">
            <h3>Settings</h3>
            <ul>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="security.php">Security</a></li>
                <li><a href="help.php">Help</a></li>
            </ul>
        </div>
    </div>

    <div class="edit-profile">
        <h2>Edit Profile</h2>
        <form action="update_profile.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>" required>
            </div>

            <div class="form-group">
                <label for="profile-pic">Profile Picture</label>
                <input type="file" id="profile-pic" name="profile-pic" accept="image/*">
            </div>

            <div class="form-group">
                <button type="submit" class="save-btn">Save Changes</button>
            </div>
        </form>
    </div>
</div>

<?php include('footer.php'); ?>
<script src="../js/session.js"></script>
</body>
</html>
