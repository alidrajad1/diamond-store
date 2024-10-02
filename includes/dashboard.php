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
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>MASEKA TOPUP</title>
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/headerfooter.css"/>
    <script>
    
    const sessionDuration = <?php echo $session_duration * 1000; ?>; 

    function sessionTimeout() {
        alert('Sesi telah berakhir, Anda akan diarahkan ke halaman login.');
        window.location.href = '../index.html';
    }

    setTimeout(sessionTimeout, sessionDuration);
</script>
  </head>
  <body>
   
<?php include('header.php');
?>
    
    <div class="container">
    <section id="home" class="slider-container">
      <div class="slider">
        <div class="slides">
          <img id="slide-1" src="../img/epic-banner.jpg" alt="Epic" />
          <img id="slide-2" src="../img/legend-banner.jpg" alt="Legend" />
          <img id="slide-3" src="../img/epic-banner.jpg" alt="Epic" />
          <img id="slide-4" src="../img/legend-banner.jpg" alt="Legend" />
        </div>
      </div>
    </section>

    <h2 class="section-title">Recommendation</h2>
    <div class="store-container">
      <div class="product">
        <div class="game-icon">
         <a href="topup.php">
          <div class="background-blur"><img src="../img/mobile-legends-icon.png" alt="" /></div>
          <div class="game-name"><img src="../img/mobile-legends.png" alt="Mobile Legends"></div>
         </a>
        </div>
        <div class="game-icon">
          <div class="background-blur"><img src="../img/free-fire-icon.png" alt="" /><img src="img/epic-crop.jpg" alt="" /></div>
          <div class="game-name"><img src="../img/free-fire.png" alt="Free Fire"></div>
        </div>
        <div class="game-icon">
          <div class="background-blur"><img src="../img/pubg-mobile-icon.png" alt="" /></div>
          <div class="game-name"><img src="../img/pubg-mobile.png" alt="PUBG Mobile"></div>
        </div>
        <div class="game-icon">
          <div class="background-blur"><img src="../img/honor-of-kings-icon.png" alt="" /><img src="img/epic-crop.jpg" alt="" /></div>
          <div class="game-name"><img src="../img/honor-of-kings.png" alt="Honor of Kings"></div>
        </div>
        <div class="game-icon">
          <div class="background-blur"><img src="../img/call-of-duty-mobile-icon.png" alt="" /></div>
          <div class="game-name"><img src="../img/call-of-duty-mobile.png" alt="Call of Duty Mobile"></div>
        </div>
        <div class="game-icon">
          <div class="background-blur"><img src="../img/genshin-impact-icon.png" alt="" /><img src="img/epic-crop.jpg" alt="" /></div>
          <div class="game-name"><img src="../img/genshin-impact.png" alt="Genshin Impactc"></div>
        </div>
        <div class="game-icon">
          <div class="background-blur"><img src="../img/stumble-guys-icon.png" alt="" /></div>
          <div class="game-name"><img src="../img/stumble-guys.png" alt="Stumble Guys"></div>
        </div>
        <div class="game-icon">
          <div class="background-blur"><img src="../img/fc-24-icon.png" alt="" /><img src="img/epic-crop.jpg" alt="" /></div>
          <div class="game-name"><img src="../img/fc-24.png" alt="FC24"></div>
        </div>
      </div>
    </div>
    </div>

<?php include('footer.php');
?> 

    <script src="../js/slider.js"></script>
  </body>
</html>
