<?php
session_start();
include 'db_config.php';

function cart(){






        $qty=$_GET['qty'];

        global $con;

        /*$ip = getIp();*/

        $sql = "SELECT * from users where email = '".$_SESSION['email'] ."'";

        $run_pro = mysqli_query($con, $sql);


        while ($row_pro = mysqli_fetch_array($run_pro)) {

            $id_user = $row_pro['id_user'];

        }



        $id_guma = $_GET['add_cart'];

        $check_pro = "select * from cart where id_user = $id_user  AND g_id='$id_guma' ";

        $run_check = mysqli_query($con, $check_pro);

        var_dump($run_check);

        if(mysqli_num_rows($run_check)>0){

            echo "";

        }








}
cart();


