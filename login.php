<?php
include 'db_config.php';
global $con;
$password = $con ->escape_string($_POST['password']);
$email = $con->escape_string($_POST['email']);
$result = $con->query("SELECT * FROM users WHERE email='$email'");


if ( $result->num_rows == 0 ){
    $_SESSION['message'] = "Uneti podaci ne odgovaraju nijednom korisniku!";
    header("location: error.php");
}
else {
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
        

        $_SESSION['logged_in'] = true;

        header("location: profile.php");
    }
    else {
        $_SESSION['message'] = "Uneti podaci ne odgovaraju nijednom korisniku!";
        header("location: error.php");
    }
}

