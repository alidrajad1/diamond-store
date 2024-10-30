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
                <li><a href="profile.php">Profile</a></li>
                <li><a href="help.php">Help</a></li>
            </ul>
        </div>
    </div>

    <div class="security">
        <h2>Security</h2>
        <h3>Account Security</h3>
        <p>Users are responsible for maintaining the confidentiality of their account information, including passwords. Maseka Store is not responsible for any loss or damage caused by the use of account information by unauthorized parties.</p>
  
    </div>
</div>

<?php include('footer.php'); ?>
<script src="../js/session.js"></script>
</body>
</html>
