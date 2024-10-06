<?php include('session_handler.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>MASEKA TOPUP</title>
    <link rel="stylesheet" href="../css/contact.css"/>
    <link rel="stylesheet" href="../css/headerfooter.css"/>
  </head>
  <body>

  <?php include('header.php');
?>
        <input type="hidden" id="session-duration" value="<?php echo $session_duration; ?>" />

    <div class="container">
      <div class="container">
        <h2>Our Support Team</h2>
        <p>Talk to real people</p>
        <div class="team">
          <div class="team-member">
            <img src="https://via.placeholder.com/100" alt="Person 1">
            <h3>Ali Drajad</h3>
            <p>Lowokwaru, Malang</p>
            <p>Programmer Backend</p>
            <div class="social-media">
              <a href="https://facebook.com/" target="_blank"><box-icon name='facebook' type='logo' color="white"></box-icon></a>
              <a href="https://instagram.com/" target="_blank"><box-icon name='instagram' type='logo' color="white"></box-icon> </a>
              <a href="https://linkedin.com/" target="_blank"><box-icon name='linkedin' type='logo' color="white"></box-icon> </a>
            </div>
          </div>
      
          <div class="team-member">
            <img src="https://via.placeholder.com/100" alt="Person 2">
            <h3>Eka Chandra</h3>
            <p>Lowokwaru, Malang</p>
            <p>Design UI/UX</p>
            <div class="social-media">
              <a href="https://facebook.com/" target="_blank"><box-icon name='facebook' type='logo' color="white"></box-icon></a>
              <a href="https://instagram.com/" target="_blank"><box-icon name='instagram' type='logo' color="white"></box-icon></a>
              <a href="https://linkedin.com/" target="_blank"><box-icon name='linkedin' type='logo' color="white"></box-icon></a>
            </div>
          </div>
      
          <div class="team-member">
            <img src="https://via.placeholder.com/100" alt="Person 3">
            <h3>Aditya Yoga</h3>
            <p>Lowokwaru, Malang</p>
            <p>Programmer Front End</p>
            <div class="social-media">
              <a href="https://facebook.com/" target="_blank"><box-icon name='facebook' type='logo' color="white"></box-icon> </a>
              <a href="https://instagram.com/" target="_blank"><box-icon name='instagram' type='logo' color="white"></box-icon> </a>
              <a href="https://linkedin.com/" target="_blank"><box-icon name='linkedin' type='logo' color="white"></box-icon> </a>
            </div>
          </div>
        </div>
      </div>      
    </div>
    </div>

<?php include('footer.php');
?>
  <script src="../js/session.js"></script>
  </body>
</html>
