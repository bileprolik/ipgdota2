<?php
session_start();
include 'function/functions.php';
include 'db_config.php';
global $con;

if(isset($_POST['salji']))
{
    $id_marka = $_POST ['id_marka'];
    $opis = $_POST['comment'];
    $product_image = $_FILES['file']['name'];
    $product_image_tmp = $_FILES['file']['tmp_name'];




    move_uploaded_file($product_image_tmp, "customer_images/$product_image");

    /*echo "<img src='customer_images/$product_image' style='max-width: 150px'>";*/



    $sql = "SELECT * from users where email = '" . $_SESSION['email'] . "'";

    $run_pro = mysqli_query($con, $sql);


    while ($row_pro = mysqli_fetch_array($run_pro)) {

        $id_user = $row_pro['id_user'];

    }


    $get_pro = "SELECT g.id_guma, m.marka FROM gume g  
    JOIN marka m ON g.id_guma = m.id_marka WHERE marka = '$id_marka'";

    $run_data = mysqli_query($con, $get_pro);

    while ($row_data = mysqli_fetch_array($run_data)) {
        $id_guma = $row_data['id_guma'];


    }

    global $id_user, $id_guma;
    $galerija = "INSERT INTO galerija(`id_user`,`id_guma`,`slike`,`opis`,`Datum`) VALUES ($id_user, $id_guma,'$product_image','$opis',NOW())";

    if(mysqli_query($con,$galerija) or die(mysqli_error($con)));
    {
        echo "<script>window.open('slike-kupaca.php','_self')</script>";
    }









};







