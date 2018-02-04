<br />
<form action="" method="post" style="padding:80px;">


    <b style="color: grey">Ubacite novu marku:</b>
    <input type="text" name="new_cat"  required/>
    <input type="submit" name="add_cat" value="Dodajte marku" />

</form>

<?php
include("db_config.php");

if(isset($_POST['add_cat'])){
    global $con;

    $new_cat = $_POST['new_cat'];

    $insert_cat = "insert into marka (marka) values ('$new_cat')";

    $run_cat = mysqli_query($con, $insert_cat);

    if($run_cat){

        echo "<script>alert('Nova marka je ubačena!')</script>";
        echo "<script>window.open('index.php?pregled_marki','_self')</script>";
    }
}

?>