<?php
include("db_config.php");

if(isset($_GET['delete_pro'])){

    global $con;

    $delete_id = $_GET['delete_pro'];

    $delete_pro = "delete from gume where id_guma='$delete_id'";

    $run_delete = mysqli_query($con, $delete_pro);

    if($run_delete){

        echo "<script>alert('Proizvod je obrisan!')</script>";
        echo "<script>window.open('index.php?pregled_proizvoda','_self')</script>";
    }

}





?>