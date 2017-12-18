<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];

// Escape all $_POST variables to protect against SQL injections
$first_name = $con->escape_string($_POST['firstname']);
$last_name = $con->escape_string($_POST['lastname']);
$email = $con->escape_string($_POST['email']);
$password = $con->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$captcha =  $con->escape_string($_POST["captcha"]);
$hash = $con->escape_string( md5( rand(0,1000) ) );
if($captcha != $_SESSION["code"])
{
    $_SESSION['message'] = 'Pogresan kod!';
    header("location: error.php");
}

$result = $con->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());


if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'Korisnik sa ovom E-MAIL adresom već postoji!';
    header("location: error.php");
    
}
else {


    $sql = "INSERT INTO users (first_name, last_name, email, password, hash) " 
            . "VALUES ('$first_name','$last_name','$email','$password', '$hash')";

    // Add user to the database
    if ( $con->query($sql) ){

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "Link za potvrdu je poslat na: $email, molimo Vas potvrdite
                 vaš nalog tako što ćete kliknuti na link koji se nalazi u poruci!";

        $to      = $email;
        $subject = 'Potvrda verifikacije ';
        $message_body = '
        Poštovanje '.$first_name.',

        Hvala na registraciji!

        Kliknite na link ispod kako biste aktivirali Vaš nalog:

        http://localhost/login-system/verify.php?email='.$email.'&hash='.$hash;  

        mail( $to, $subject, $message_body );

        header("location: profile.php"); 

    }

    else {
        $_SESSION['message'] = 'Registracija neuspešna!';
        header("location: error.php");
    }

}