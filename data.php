<?php
include_once ("function/functions.php");
include_once ("db_config.php");

$country = $_GET['id_marka'];

if(!$country) {
    return false;
}

/*function  dada()
{
    global $con;

    $sql = "SELECT id_guma,visina FROM GUME ";

    $result = mysqli_query($con,$sql);

    $users_arr = array();

    while( $row = mysqli_fetch_array($result) ){
        $userid = $row['id_guma'];
        $name = $row['visina'];

        $users_arr[] = array("id" => $userid, "visina" => $name);
    }

    var_dump($users_arr);

};*/



    $cities = array(
    1 => array('Kathmandu','Bhaktapur','Patan','Pokhara','Lumbini'),
    2 => array('Delhi','Mumbai','Kolkata','Bangalore','Hyderabad','Pune','Chennai','Jaipur','Goa'),
    3 => array('Beijing','Chengdu','Lhasa','Macau','Shanghai'),
    4 => array('Los Angeles','New York','Dallas','Boston','Seattle','Washington','Las Vegas'),
    5 => array('Birmingham','Bradford','Cambridge','Derby','Lincoln','Liverpool','Manchester')
);
global $users_arr;
$currentCities = $cities[$country];
?>

City:
<select name="id_marka">
    <option value="">Please Select</option>
    <?php
    foreach($currentCities as $city) {
        ?>
        <option value="<?php echo $city; ?>"><?php echo $city; ?></option>
        <?php
    }
    ?>
</select>
