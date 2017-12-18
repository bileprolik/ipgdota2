<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Greška</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
    <div class="form">
          <h1>Hvala na poseti</h1>
              
          <p><?= 'Uspešno ste se izlogovali!'; ?></p>
          
          <a href="login_stranica.php"><button class="button button-block"/>Početna</button></a>

    </div>
</body>
</html>
