<?php
include("db_config.php");

if(isset($_GET['delete_cat'])){

    global $con;

    $delete_id = $_GET['delete_cat'];

    $delete_pro = "delete from marka where id_marka='$delete_id'";

    $run_delete = mysqli_query($con, $delete_pro);

    if($run_delete){

        echo "<script>alert('Marka je obrisana!')</script>";
        echo "<script>window.open('index.php?pregled_marki','_self')</script>";
    }

}





?>