<?php
include_once 'db_config.php';

$email = $_POST['email'];
$password = $_POST['password'] ;
$result = $con->query("SELECT * FROM users WHERE email='$email'");
$user = $result->fetch_assoc();
if (mysqli_num_rows($result) > 0) {
if ( password_verify($_POST['password'], $user['password']) ) {
  echo "login_ok";
}
else{
    echo "login_err";
}
}






?>
