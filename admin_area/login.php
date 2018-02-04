<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Admin login</title>



    <link rel="stylesheet" href="styles/loginstyle.css">
    <script src="script/script.js"></script>


</head>

<body>
<div class="login-page">
    <div class="form">
        <form class="login-form" method="post">
            <input type="text" name="email" placeholder="email"/>
            <input type="password" name="password" placeholder="password"/>
            <button type="submit" name="login">login</button>
        </form>
    </div>
</div>
<?php

include("db_config.php");

if(isset($_POST['login'])){
    global $con;

    $email = mysqli_real_escape_string($con , $_POST['email']);
    $pass = mysqli_real_escape_string($con ,$_POST['password']);

    $sel_user = "select * from admins where email='$email' AND password='$pass'";

    $run_user = mysqli_query($con, $sel_user);

    $check_user = mysqli_num_rows($run_user);

    if($check_user==1){

        $_SESSION['user_email']=$email;

        echo "<script>window.open('index.php','_self')</script>";

    }
    else {

        echo "<script>alert('Password or Email is wrong, try again!')</script>";

    }


}
?>
</body>
</html>
