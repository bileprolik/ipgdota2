<<<<<<< HEAD
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
<form action="insert_tires.php" method="post" enctype="multipart/form-data" style="color:black">
    <table align="center" width="795" border="2" >
        <tr align="center">
            <!-- Form name -->
            <td colspan="7"><h2 style="color: #000">Insert New Product</h2></td>
        </tr>
        <!--<tr>
            <td align="right" style="color:#fff"><b>Tire Title:</b></td>
            <td><input type="text" name="product_title" required/></td>
        </tr>-->
        <!-- Tire Brand -->
        <tr>
            <td align="right" style="color: #000"><b>Tire brand:</b></td>
            <td>
                <select name="id_marka">
                    <option>Select a Brand</option>
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
            <td align="right"style="color: #000"><b>Product Image:</b></td>
            <td><input type="file" name="slika"></td>
        </tr>

        <!-- Height -->
        <tr>
            <td align="right" style="color: #000"><b>Tire Height:</b></td>
            <td><input type="text" name="visina" required/></td>
        </tr>

        <!-- Width -->
        <tr>
            <td align="right" style="color: #000"><b>Tire Width:</b></td>
            <td><input type="text" name="sirina" required/></td>
        </tr>

        <!-- Diameter -->
        <tr>
            <td align="right" style="color: #000"><b>Diameter:</b></td>
            <td><input type="text" name="precnik" required/></td>
        </tr>

        <!-- Load -->

        <tr>
            <td align="right" style="color: #000"><b>Load:</b></td>
            <td><input type="text" name="opterecenje" required/></td>
        </tr>

        <!-- Speed index -->
        <tr>
            <td align="right" style="color: #000"><b>Speed Index:</b></td>
            <td><input type="text" name="indeks_brzine" required/></td>
        </tr>

        <!-- Season -->
        <tr>
            <td align="right" style="color:color: #000"><b>Season:</b></td>
            <td>
                <select name="id_sezona">
                    <option>Select a season</option>
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
            <td align="right"style="color: #000"><b>Product Price:</b></td>
            <td><input type="text" name="cena"></td>
        </tr>

        <tr>
            <td align="right"style="color: #000"><b>Warranty:</b></td>
            <td><input type="text" name="garancija"></td>
        </tr>

        <!-- Button - insert -->
        <tr>

            <td colspan="7" align="center"><input type="submit" name="insert_post" value="Insert Product Now"></td>
        </tr>
    </table>
</form>
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


        echo "<script>alert('Product has been inserted')</script>";

        echo "<script>window.open('insert_tires.php','_self')</script>";
    }
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');



};

=======
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
<form action="insert_tires.php" method="post" enctype="multipart/form-data" style="color:black">
    <table align="center" width="795" border="2" >
        <tr align="center">
            <!-- Form name -->
            <td colspan="7"><h2 style="color: #000">Insert New Product</h2></td>
        </tr>
        <!--<tr>
            <td align="right" style="color:#fff"><b>Tire Title:</b></td>
            <td><input type="text" name="product_title" required/></td>
        </tr>-->
        <!-- Tire Brand -->
        <tr>
            <td align="right" style="color: #000"><b>Tire brand:</b></td>
            <td>
                <select name="id_marka">
                    <option>Select a Brand</option>
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
            <td align="right"style="color: #000"><b>Product Image:</b></td>
            <td><input type="file" name="slika"></td>
        </tr>

        <!-- Height -->
        <tr>
            <td align="right" style="color: #000"><b>Tire Height:</b></td>
            <td><input type="text" name="visina" required/></td>
        </tr>

        <!-- Width -->
        <tr>
            <td align="right" style="color: #000"><b>Tire Width:</b></td>
            <td><input type="text" name="sirina" required/></td>
        </tr>

        <!-- Diameter -->
        <tr>
            <td align="right" style="color: #000"><b>Diameter:</b></td>
            <td><input type="text" name="precnik" required/></td>
        </tr>

        <!-- Load -->

        <tr>
            <td align="right" style="color: #000"><b>Load:</b></td>
            <td><input type="text" name="opterecenje" required/></td>
        </tr>

        <!-- Speed index -->
        <tr>
            <td align="right" style="color: #000"><b>Speed Index:</b></td>
            <td><input type="text" name="indeks_brzine" required/></td>
        </tr>

        <!-- Season -->
        <tr>
            <td align="right" style="color:color: #000"><b>Season:</b></td>
            <td>
                <select name="id_sezona">
                    <option>Select a season</option>
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
            <td align="right"style="color: #000"><b>Product Price:</b></td>
            <td><input type="text" name="cena"></td>
        </tr>

        <tr>
            <td align="right"style="color: #000"><b>Warranty:</b></td>
            <td><input type="text" name="garancija"></td>
        </tr>

        <!-- Button - insert -->
        <tr>

            <td colspan="7" align="center"><input type="submit" name="insert_post" value="Insert Product Now"></td>
        </tr>
    </table>
</form>
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


        echo "<script>alert('Product has been inserted')</script>";

        echo "<script>window.open('insert_tires.php','_self')</script>";
    }
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');



};

>>>>>>> d66c8591190033519438a91e2bc100c274aba297
?>