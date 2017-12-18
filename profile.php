<?php

session_start();


if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "Morate biti ulogovani da biste videli Vašu stranicu!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Dobrodosli <?= $first_name.' '.$last_name ?></title>
  <?php include 'css/css.html'; ?>
</head>

<body>
  <div class="form">

          <h1>Dobrodosli</h1>
          
          <p>
          <?php 
     

          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              

              unset( $_SESSION['message'] );
          }
          
          ?>
          </p>
          
          <?php
          

          if ( !$active ){
              echo
              '<div class="info">
              Nalog nije verifikovan, molimo Vas da potvrdite vaš E-MAIL tako što ćete kliknuti na link koji Vam je poslat u poruci!
              </div>';
          }
          
          ?>
          
          <h2><?php echo $first_name.' '.$last_name; ?></h2>
          <p><?= $email ?></p>
          
          <a href="logout.php"><button class="button button-block" name="logout"/>Odjavite se</button></a>

    </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
