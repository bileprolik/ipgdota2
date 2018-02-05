<!DOCTYPE html>
<?php
include ("db_config.php");
include ("function/functions.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inserting Tire</title>
    <!--Tiny mce script-->
    <script>tinymce.init({ selector:'textarea',
            oninit : "setPlainText",
            plugins : "paste"});</script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
<!--Creating a form for inserting a product-->
<div style="background-color:background-color: #e7e5e4;">
<form action="insert_tires.php" method="post" enctype="multipart/form-data" style="color:black;text-align: center ">
    <table align="center" width="100%"  >
        <tr align="center">
            <!-- Form name -->
            <td colspan="7" style="text-align: center"><h2 style="color: #000">Ubacivanje novog proizvoda</h2></td>
        </tr>
        <!--<tr>
            <td align="right" style="color:#fff"><b>Tire Title:</b></td>
            <td><input type="text" name="product_title" required/></td>
        </tr>-->
        <!-- Tire Brand -->
        <tr style="">
            <td align="right" style="color: #000"><b>Marka gume:</b></td>
            <td>
                <select id="soflow" name="id_marka">
                    <option>Izaberite marku:</option>
                    <?php
                   $get_brands = "select * from marka";
                    $run_brands =  mysqli_query($con, $get_brands);

                    while ($row_brands=mysqli_fetch_array($run_brands)){
                        $id_marka = $row_brands['id_marka'];
                        $marka =  $row_brands['marka'];

                        echo "<option value='$id_marka'>$marka</option> ";
                    }

                    ?>

                </select>
            </td>
        </tr>
        <!-- Image -->
        <tr>
            <td align="right"style="color: #000"><b>Slika proizvoda:</b></td>
            <td><input type="file" name="slika" style="margin-left: 20px"></td>
        </tr>


        <!-- Height -->
        <tr>
            <td align="right" style="color: #000"><b>Visina gume:</b></td>
            <td><div style="position: relative"><input type="text" style="margin-left: 20px" class="effect-1" name="visina" required/><span class="focus-border"></span></div></td>
        </tr>

        <!-- Width -->
        <tr>
            <td align="right" style="color: #000"><b>Širina gume:</b></td>
            <td><div style="position: relative"><input type="text" style="margin-left: 20px" class="effect-1" name="sirina" required/><span class="focus-border"></span></div></td>
        </tr>

        <!-- Diameter -->
        <tr>
            <td align="right" style="color: #000"><b>Prečnik:</b></td>
            <td><div style="position: relative"><input type="text" style="margin-left: 20px" class="effect-1" name="precnik" required/><span class="focus-border"></span></div></td>
        </tr>

        <!-- Load -->

        <tr>
            <td align="right" style="color: #000"><b>Opterećenje:</b></td>
            <td><div style="position: relative"><input type="text" style="margin-left: 20px" class="effect-1" name="opterecenje" required/><span class="focus-border"></span></div></td>
        </tr>

        <!-- Speed index -->
        <tr>
            <td align="right" style="color: #000"><b>Indeks brzine:</b></td>
            <td><div style="position: relative"><input type="text" style="margin-left: 20px" class="effect-1" name="indeks_brzine" required/><span class="focus-border"></span></div></td>
        </tr>

        <!-- Season -->
        <tr>
            <td align="right" style="color:color: #000"><b>Sezona:</b></td>
            <td>
                <select id="soflow" name="id_sezona">
                    <option>Izaberite sezonu:</option>
                    <?php
                    $get_sezona = "select * from sezona";
                    $run_sezona =  mysqli_query($con, $get_sezona);

                    while ($row_sezona=mysqli_fetch_array($run_sezona)){
                        $id_sezona = $row_sezona['id_sezona'];
                        $sezona =  $row_sezona['sezona'];

                        echo "<option value='$id_sezona'>$sezona</option> ";
                    }

                    ?>

                </select>
            </td>
        </tr>

        <!-- Product price -->

        <tr>
            <td align="right"style="color: #000"><b>Cena:</b></td>
            <td><div style="position: relative"><input type="text" style="margin-left: 20px" class="effect-1" name="cena" required/><span class="focus-border"></span></div></td>
        </tr>

        <tr>
            <td align="right"style="color: #000"><b>Garancija:</b></td>
            <td><div style="position: relative"><input type="text" style="margin-left: 20px" class="effect-1" name="garancija" required/><span class="focus-border"></span></div></td>
        </tr>

        <!-- Button - insert -->
        <tr>

            <td colspan="7" align="center"><input type="submit" style="margin-top: 20px" name="insert_post" value="Ubacite novi proizvod"></td>
        </tr>
    </table>
</form>
</div>
</body>
</html>

<?php

if(isset($_POST['insert_post'])) {



    // Getting the text data from the fields


    $tire_brand = $_POST ['id_marka'];
    $visina = $_POST ['visina'];
    $sirina= $_POST ['sirina'];
    $precnik = $_POST ['precnik'];
    $opterecenje = $_POST ['opterecenje'];
    $indeks_brzine = $_POST ['indeks_brzine'];
    $tire_season = $_POST ['id_sezona'];
    $cena = $_POST ['cena'];
    $garancija = $_POST ['garancija'];

    // Getting the image from the field

    $product_image = $_FILES['slika']['name'];
    $product_image_tmp = $_FILES['slika']['tmp_name'];


    move_uploaded_file($product_image_tmp, "product_images/$product_image");

    $insert_product = "
     INSERT INTO gume(`id_marka`,`slika`,`visina`,`sirina`,`precnik`,`opterecenje`,`indeks_brzine`,`id_sezona`,`cena`,`garancija`)
      VALUES ($tire_brand,'$product_image','$visina','$sirina',$precnik,'$opterecenje','$indeks_brzine',$tire_season,'$cena','$garancija')";





    if(mysqli_query($con,$insert_product) or die(mysqli_error($con)));


    {
        echo "<script>window.open('index.php?insert_tires.php','_self')</script>";
    }
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');



};

?>