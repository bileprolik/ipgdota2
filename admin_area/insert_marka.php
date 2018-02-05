<head>
    <title></title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<form action="" method="post" style="padding:80px;text-align: center">


    <h2>Nova marka</h2>
    <b style="color: grey">Ubacite novu marku:</b>
    <td><div style="position: relative"><input type="text"  class="effect-1" name="new_cat" required/></div></td>
    <input type="submit" name="add_cat" style="margin-top: 10px" value="Dodajte marku" />

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