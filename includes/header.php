<header>
    <nav class="navbar">
        <div class="nav-container">
            <a href="dashboard.php" class="nav-logo"><img src="../img/Logo.png" alt="">Maseka Topup</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-links">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-links">All Games</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-links">Contact</a>
                </li>
                <li class="nav-item profile" >
                    <a href="profile.php" class="nav-links">
                        <span class="user-name"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                        <img src="<?php echo htmlspecialchars($_SESSION['profile_pic']); ?>" alt="Profile Picture" class="profile-picture">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>