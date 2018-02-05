<?php
session_start();
include 'function/functions.php';
include 'db_config.php';
global $con;

?>

<head>
    <title>

    </title>
    <script src="jquery.js"></script>

    <script src="js/index.js"></script>
    <script src="js/jqueryedge.js"></script>
    <script src="../validacija/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
    <script src="../validacija/jquery-validation-1.17.0/dist/additional-methods.min.js"></script>
    <script>

    </script>

    <!-- META TAGS -->
    <meta name="description" content="Prodaja Zimskih i letnjih guma. Velika kolekcija guma za vas automobil. Puno modela guma: Cordiant, Goodyear, Michelin, Nokian, Sava, Starfire, Tigar." />
    <meta name="keywords" content="Gume, Zimske gume, Letnje Gume,Jeftine Gume, Cordiant, Goodyear, Michelin, Nokian, Sava, Starfire, Tigar" />
    <title>Internet Prodaja Guma - Pocetna stranica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- JQUERY -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<?php

if(isset($_POST['salji']))
{
    $id_marka = $_POST ['id_marka'];
    $opis = $_POST['comment'];
    $product_image = $_FILES['file']['name'];
    $product_image_tmp = $_FILES['file']['tmp_name'];




    move_uploaded_file($product_image_tmp, "admin_area/customer_images/$product_image");

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
        echo "<script>window.open('slike-kupaca.php#show','_self')</script>";
    }









};
?>
<script>
    $(document).ready({
            (window.location.hash == "#show") {
        $("#divId").show();
    }
    });
</script>








