<?php
//Include database configuration file
include('db_config.php');
include ('function/functions.php');



if($_POST['id_marka']==1)

{
    echo "<option value=\"\">Izaberite visinu:</option>";
    $get_brands = "select DISTINCT * from gume WHERE id_marka = 1";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $id_marka = $row_brands['id_marka'];
        $visina = $row_brands['visina'];


        echo "<option value='$id_marka'>$visina</option> ";

    }
}
else if ($_POST['id_marka']==2)
{
    echo "<option value=\"\">Izaberite visinu:</option>";
    $get_brands = "select DISTINCT * from gume WHERE id_marka = 2";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $id_marka = $row_brands['id_marka'];
        $visina = $row_brands['visina'];

        echo "<option value='$id_marka'>$visina</option> ";
    }
}
else if ($_POST['id_marka']==3)
{
    echo "<option value=\"\">Izaberite visinu:</option>";
    $get_brands = "select DISTINCT * from gume WHERE id_marka = 3";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $id_marka = $row_brands['id_marka'];
        $visina = $row_brands['visina'];

        echo "<option value='$id_marka'>$visina</option> ";
    }
}
else if ($_POST['id_marka']==4)
{
    echo "<option value=\"\">Izaberite visinu:</option>";
    $get_brands = "select DISTINCT * from gume WHERE id_marka = 4";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $id_marka = $row_brands['id_marka'];
        $visina = $row_brands['visina'];

        echo "<option value='$id_marka'>$visina</option> ";
    }
}
else if ($_POST['id_marka']==5)
{
    echo "<option value=\"\">Izaberite visinu:</option>";
    $get_brands = "select DISTINCT * from gume WHERE id_marka = 5";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $id_marka = $row_brands['id_marka'];
        $visina = $row_brands['visina'];

        echo "<option value='$id_marka'>$visina</option> ";
    }
}
else if ($_POST['id_marka']==6)
{
    echo "<option value=\"\">Izaberite visinu:</option>";
    $get_brands = "select DISTINCT * from gume WHERE id_marka = 6";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $id_marka = $row_brands['id_marka'];
        $visina = $row_brands['visina'];

        echo "<option value='$id_marka'>$visina</option> ";
    }
}
else if ($_POST['id_marka']==7)
{
    echo "<option value=\"\">Izaberite visinu:</option>";
    $get_brands = "select DISTINCT * from gume WHERE id_marka = 7";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $id_marka = $row_brands['id_marka'];
        $visina = $row_brands['visina'];

        echo "<option value='$id_marka'>$visina</option> ";
    }
}



/*//Get all state data
$query = $db->query("SELECT visina FROM gume WHERE id_marka = ".$_POST['id_marka']." AND status = 1 ORDER BY visina ASC");

//Count total number of rows
$rowCount = $query->num_rows;

//Display states list
if($rowCount > 0){
    echo '<option value="">Select state</option>';
    while($row = $query->fetch_assoc()){
        echo '<option value="'.$row['id_marka'].'">'.$row['visina'].'</option>';
    }
}else{
    echo '<option value="">State not available</option>';
}*/


if($_POST['visina']==1)
{
    echo "<option value=\"\">Izaberite sirinu:</option>";
    $get_brands = "select DISTINCT sirina from gume WHERE id_marka = 1";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $id_marka = $row_brands['id_marka'];
        $sirina = $row_brands['sirina'];


        echo "<option value='$id_marka'>$sirina</option> ";

    }
}
else if($_POST['visina']==2)
{
    echo "<option value=\"\">Izaberite sirinu:</option>";
    $get_brands = "select DISTINCT sirina from gume WHERE id_marka = 2";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $id_marka = $row_brands['id_marka'];
        $sirina = $row_brands['sirina'];


        echo "<option value='$id_marka'>$sirina</option> ";

    }
}
else if($_POST['visina']==3)
{
    echo "<option value=\"\">Izaberite sirinu:</option>";
    $get_brands = "select DISTINCT sirina from gume WHERE id_marka = 3";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $id_marka = $row_brands['id_marka'];
        $sirina = $row_brands['sirina'];


        echo "<option value='$id_marka'>$sirina</option> ";

    }
}
else if($_POST['visina']==4)
{
    echo "<option value=\"\">Izaberite sirinu:</option>";
    $get_brands = "select DISTINCT sirina from gume WHERE id_marka = 4";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $id_marka = $row_brands['id_marka'];
        $sirina = $row_brands['sirina'];


        echo "<option value='$id_marka'>$sirina</option> ";

    }
}
else if($_POST['visina']==5)
{
    echo "<option value=\"\">Izaberite sirinu:</option>";
    $get_brands = "select DISTINCT sirina from gume WHERE id_marka = 5";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $id_marka = $row_brands['id_marka'];
        $sirina = $row_brands['sirina'];


        echo "<option value='$id_marka'>$sirina</option> ";

    }
}
else if($_POST['visina']==6)
{
    echo "<option value=\"\">Izaberite sirinu:</option>";
    $get_brands = "select DISTINCT sirina from gume WHERE id_marka = 6";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $id_marka = $row_brands['id_marka'];
        $sirina = $row_brands['sirina'];


        echo "<option value='$id_marka'>$sirina</option> ";

    }
}
else if($_POST['visina']==7)
{
    echo "<option value=\"\">Izaberite sirinu:</option>";
    $get_brands = "select DISTINCT sirina from gume WHERE id_marka = 7";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $id_marka = $row_brands['id_marka'];
        $sirina = $row_brands['sirina'];


        echo "<option value='$id_marka'>$sirina</option> ";

    }
}



/*if(isset($_POST["visina"]) && !empty($_POST["visina"])){
    //Get all city data
    $query = $db->query("SELECT sirina FROM gume WHERE id_marka = ".$_POST['id_marka']." AND status = 1 ORDER BY city_name ASC");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}*/
?>