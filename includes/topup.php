<?php include('session_handler.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>MASEKA TOPUP</title>
    <link rel="stylesheet" href="../css/headerfooter.css" />
    <link rel="stylesheet" href="../css/topup.css">
</head>

<body>

    <?php include('header.php');
    ?>

<input type="hidden" id="session-duration" value="<?php echo $session_duration; ?>" />

    <div class="top-up-section">
        <div class="user-id-box">
            <h2>Enter User ID</h2>
            <hr>
            <input class="id" type="text" placeholder="UserID">
            <input class="id" type="text" placeholder="ServerID">
        </div>
    </div>

    <div class="membership-options">
        <h3> Membership</h3>
        <div class="membership-cards">
            <div class="card">Weekly Diamond Pass Rp 27.500,-</div>
            <div class="card">Weekly Diamond Passx2 Rp 55.000,-</div>
            <div class="card">Weekly DiamondPass x3 Rp 82.500,-</div>
        </div>
    </div>

    <div class="diamond-options">
        <h3>Diamonds</h3>
        <div class="diamond-cards">
            <div class="diamond-card">5 Diamonds Rp 2.000,-</div>
            <div class="diamond-card">12 Diamonds Rp 4.000,-</div>
            <div class="diamond-card">19 Diamonds Rp 6.000,-</div>
        </div>
        <div class="diamond-cards">
            <div class="diamond-card">71 Diamonds Rp 20.000,-</div>
            <div class="diamond-card">85 Diamonds Rp 23.000,-</div>
            <div class="diamond-card">13 Diamond Rp 31.000,-</div>
        </div>
        <div class="diamond-cards">
            <div class="diamond-card">284 Diamonds Rp 77.500,-</div>
            <div class="diamond-card">875 Diamonds Rp 229.000,-</div>
            <div class="diamond-card">2625 Diamonds Rp 687.000,-</div>
        </div>
        <div class="diamond-cards">
            <div class="diamond-card">14490 Diamonds Rp 3.450.000,-</div>
            <div class="diamond-card">16500 Diamonds Rp 3.950.000,-</div>
            <div class="diamond-card">19320 Diamonds Rp 4.600.000,-</div>
        </div>
    </div>
    </div>

    <div class="payment-options">
        <h3>Payment Methods</h3>
        <div class="payment-methods">
            <div class="method"><box-icon name='visa' type='logo' color='#1E1E1E'></box-icon></div>
            <div class="method"><box-icon name='mastercard' type='logo' color='#1E1E1E'></box-icon></div>
            <div class="method"><box-icon name='paypal' type='logo' color='#1E1E1E'></box-icon></div>
        </div>
    </div>

    <div class="promo-box">
        <input type="text" placeholder="Gift Code">
    </div>

    <div class="whatsapp-box">
        <input type="text" placeholder="WhatsApp">
    </div>
    
    <div class="order">
    <button class="order-btn" type="submit">Order Now</button>
    </div>
    
    </div>

    <?php include('footer.php');
    ?>

    <script src="../js/buy.js"></script>
    <script src="../js/session.js"></script>
</body>

</html>