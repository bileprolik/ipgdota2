
<?php

include("db_config.php");

if(isset($_GET['edit_cat'])) {

    global $con;

    $edit_id = $_GET['edit_cat'];

    $get_pro = "SELECT marka FROM marka WHERE id_marka = $edit_id ";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {

        $marka = $row_pro['marka'];

    }
}
?>

<form action="" method="post" style="padding:80px;">

    <b style="color: grey">Izmenite marku:</b>
    <input type="text" name="marka"   required/>
    <input type="submit" name="izmenite" value="Izmenite" />

</form>

<?php

if(isset($_POST['izmenite']))
{
    $nova_marka = $_POST['marka'];

    $izmena = mysqli_query($con,"UPDATE marka SET marka = '$nova_marka' WHERE id_marka = $edit_id") or die(mysqli_error($con));

    if($izmena)
    {
        echo "<script>alert('Marka je izmenjena!')</script>";
        echo "<script>window.open('index.php?pregled_marki','_self')</script>";
    }
}

?>


