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
                <li><a href="security.php">Security</a></li>
            </ul>
        </div>
    </div>

    <div class="help">
        <h2>Help</h2>
       <ol>
        <li>
        Usage Guide
        </li>
        <p>Step-by-step instructions on how to top-up, select the game, choose the payment method, and complete the transaction.</p>
        <li>
        FAQ (Frequently Asked Questions)
        </li>
        <p>Common questions about transaction verification, processing time, and other frequent issues.</p>
        <li>
        Customer Support Contact
        </li>
        <p>Contact information to reach customer support via email, live chat, or phone.</p>
        <li>
        Payment Guide
        </li>
        <p>Explanation of available payment methods (e-wallets, credit cards, bank transfers) and how to use them.</p>
        <li>
        Refund Policy
        </li>
        <p>Information about refund policies in case of mistakes or failed top-ups.</p>
        <li>
        Account Security
        </li>
        <p>Tips for keeping your account secure, such as enabling two-factor authentication and safeguarding personal data.</p>
        <li>
        Troubleshooting Guide
        </li>
        <p>Steps to resolve common issues like failed top-ups or credits not being added.</p>
        </ol>
    </div>
</div>

<?php include('footer.php'); ?>
<script src="../js/session.js"></script>
</body>
</html>
