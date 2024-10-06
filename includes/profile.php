<?php include('session_handler.php'); ?>

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

<div class="container">
    <div class="sidebar">
        <div class="settings">
            <h3>Settings</h3>
            <ul>
                <li><a href="./edit_profile.php">Edit Profile</a></li>
                <li><a href="#">Security</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </div>
    </div>

    <div class="profile">
        <div class="profile-picture">
            <img class="picture-placeholder" src="<?php echo htmlspecialchars($_SESSION['profile_pic']); ?>" alt="profile">
        </div>
        <div class="profile-info">
            <h2><?php echo htmlspecialchars($_SESSION['username']); ?></h2>
            <p class="email"><?php echo htmlspecialchars($_SESSION['email']); ?></p>
        </div>
        <div class="logout">
            <form action="logout.php" method="POST">
                <button class="logout-btn" type="submit">Log Out</button>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
<script src="../js/session.js"></script>
</body>
</html>
