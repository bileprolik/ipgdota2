<?php
session_start();
include "db_config.php";
include "function/functions.php";
if(isset($_GET['qty']) && is_numeric($_GET['qty']))
{
    global $con;
    $qty = $_GET['qty'];

    $sql = "SELECT * from users where email = '".$_SESSION['email'] ."'";

    $run_pro = mysqli_query($con, $sql);


    while ($row_pro = mysqli_fetch_array($run_pro)) {

        $id_user = $row_pro['id_user'];

    }

    $newbie = "select * from cart where id_user = $id_user ";

    $run = mysqli_query($con, $newbie);

    while ($row_pro = mysqli_fetch_array($run)) {

        $new_qty = $row_pro['qty'];
    }

    $izmena = mysqli_query($con,"UPDATE cart SET qty = '$qty' WHERE id_user = $id_user") or die(mysqli_error($con));




}

