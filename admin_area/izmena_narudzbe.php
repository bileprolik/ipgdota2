
<?php

include("db_config.php");

if(isset($_GET['izmena_narudzbe'])) {

    global $con;

    $narudzba_id = $_GET['izmena_narudzbe'];

    $get_pro = "SELECT id_narudzba, status_narudzbe FROM narudzba WHERE id_narudzba = $narudzba_id";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {

        $status = $row_pro['status_narudzbe'];

    }
}
?>

<form action="" method="post" style="padding:80px;text-align: center">

    <h2>Promena statusa</h2>
    <b style="color: grey">Priprema:</b>
    <input type="radio" name="group1"  value="1"   required/>
    <b style="color: grey">U tranzitu:</b>
    <input type="radio" name="group1" value="2"   required/>
    <input type="submit" name="izmenite" value="Izmenite" />

</form>

<?php

if(isset($_POST['izmenite']))
{
    global $con;
    $nov_status = $_POST['group1'];

    $izmena = mysqli_query($con,"UPDATE narudzba SET status_narudzbe = '$nov_status' WHERE id_narudzba = $narudzba_id") or die(mysqli_error($con));

    if($izmena)
    {
        echo "<script>alert('Status je izmenjen!')</script>";
        echo "<script>window.open('index.php?pregled_narudzbi','_self')</script>";
    }
}

?>


