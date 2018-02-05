
<?php

include("db_config.php");

if(isset($_GET['izmena_slike'])) {

    global $con;

    $slika_id = $_GET['izmena_slike'];

    $get_pro = "SELECT id_slika, status_slike FROM galerija WHERE id_slika = $slika_id";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {

        $status = $row_pro['status_slike'];

    }
}
?>

<form action="" method="post" style="padding:80px;text-align: center">

    <h2>Promena statusa</h2>
    <b style="color: grey">Obrišite oglas:</b>
    <input type="radio" name="group1"  value="2"   required/>
    <b style="color: grey">Odobrite oglas:</b>
    <input type="radio" name="group1"  value="1"   required/>
    <input type="submit" name="izmenite" value="Izmenite" />

</form>

<?php

if(isset($_POST['izmenite']))
{
    global $con;
    $nov_status = $_POST['group1'];

    if($nov_status == "1")
    {
        $izmena = mysqli_query($con,"UPDATE galerija SET status_slike = '$nov_status' WHERE id_slika = $slika_id") or die(mysqli_error($con));
    }
    else
    {
        $delete = "DELETE FROM galerija WHERE id_slika = $slika_id";
        mysqli_query($con,$delete);
    }

    global $izmena;
    if($izmena)
    {
        echo "<script>alert('Status je izmenjen!')</script>";
        echo "<script>window.open('index.php?pregled_galerije','_self')</script>";
    }
    global $delete;
    if($delete)
    {
        echo "<script>alert('Oglas je obrisan!')</script>";
        echo "<script>window.open('index.php?pregled_galerije','_self')</script>";
    }
}

?>


