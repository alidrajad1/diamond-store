<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>MASEKA TOPUP</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="includes/register_process.php" method="POST">
                <h1>Register</h1>
                <div class="input-container">
                    <box-icon name='user' color='#1E1E1E'></box-icon>
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="input-container">
                    <box-icon name='envelope' type='solid' color='#1E1E1E'></box-icon>
                    <input type="email" placeholder="E-mail" name="email" required>
                </div>
                <div class="input-container">
                    <box-icon name='lock' type='solid' color='#1E1E1E'></box-icon>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="includes/login_process.php" method="POST">
                <h1>Sign In</h1>
                <div class="input-container">
                    <box-icon name='user' color='#1E1E1E'></box-icon>
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="input-container">
                    <box-icon name='lock' type='solid' color='#1E1E1E'></box-icon>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <a href="#">Forgot your password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of the features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello!</h1>
                    <p>Register your personal details to use all of the features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <?php if (isset($_GET['error'])): ?>
        <script type="text/javascript">
            alert("<?php echo $_GET['error']; ?>");
        </script>
    <?php endif; ?>
    
    <script src="js/script.js"></script>
</body>
</html>
