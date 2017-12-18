<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
<div class="form">
    <h1>Greška!</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: login_stranica.php" );
    endif;
    ?>
    </p>     
    <a href="login_stranica.php"><button class="button button-block"/>Početna</button></a>
</div>
</body>
</html>
