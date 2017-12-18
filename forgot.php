<?php
/* Reset your password form, sends reset.php password link */
require 'db_config.php';
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
    $email = $con->escape_string($_POST['email']);
    $result = $con->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    {
        $_SESSION['message'] = "Korisnik sa ovom E-MAIL adresom ne postoji!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data

        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['first_name'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Molimo Vas da proverite vaš email:<span>$email</span>"
        . " da biste pronašli link sa potvrdom resetovanja lozinke</p>";

        // Send registration confirmation link (reset.php)
        $to      = $email;
        $subject = 'Password Reset Link ';
        $message_body = '
        Poštovanje '.$first_name.',

        Zatražili ste promenu lozinke,

        Molimo Vas da kliknete na link ispod da biste resetovali lozinku:

        http://localhost/login-system/reset.php?email='.$email.'&hash='.$hash;

        mail($to, $subject, $message_body);

        header("location: success.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Povratite Vašu lozinku</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
    
  <div class="form">

    <h1>Povratite Vašu lozinku</h1>

    <form action="forgot.php" method="post">
     <div class="field-wrap">
      <label>
        Email adresa<span class="req">*</span>
      </label>
      <input type="email"required autocomplete="off" name="email"/>
    </div>
    <button class="button button-block"/>Reset</button>
    </form>
  </div>
          
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>

</html>
