<html>
<head>
    <link rel="stylesheet" href="../styles/style.css" media="all" />
    <title></title>

</head>
<body>
<?php


/*POVEZIVANJE SA BAZOM PODATAKA*/
$con=mysqli_connect("localhost","root","","ipgdota2");


if(mysqli_connect_errno())
{
    echo "The error was not established: ". mysqli_connect_error();
}

/*PRIKAZ PROIZVODA NA INDEXNOJ STRANICI*/
function show_tire()
{
    global $con;
    $get_pro = "SELECT g.id_guma , g.id_marka, g.slika, g.cena, g.sirina, g.visina, g.opterecenje, g.precnik, g.indeks_brzine, id_sezona, m.marka from gume g  
               JOIN marka m ON g.id_marka = m.id_marka ";
              /*JOIN product_size ps ON s.size_id = ps.size_id*/


    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {
            $id_guma = $row_pro ['id_guma'];
            $tire_brand = $row_pro ['marka'];
            $product_image = $row_pro ['slika'];
            $cena = $row_pro ['cena'];
            $sirina= $row_pro ['sirina'];
            $visina = $row_pro ['visina'];
            $opterecenje = $row_pro ['opterecenje'];
            $precnik = $row_pro ['precnik'];
            $indeks_brzine = $row_pro ['indeks_brzine'];
            $tire_season = $row_pro ['id_sezona'];




            echo "
            <div class='col-xs-12 col-sm-4 col-md-4 products mr-0'  style='padding: 60px;height:400px;border: 1px solid lightgrey'><br /><span> 
            <img src='http://localhost/ProdajaGuma/product_images/$product_image'  class='img-responsive'/></span> 
            <h2 class='top-left' style='background-color: aqua;color:white;position: absolute;top:20px;left: 0px;width: 150px;font-size: 15px'>&nbsp SEZONA &nbsp<span style='color:blue'>
            <img src='http://localhost/ProdajaGuma/ikonice/snow.ico' width='35px' ></span></span></h2><br /><br /><span></span> 
            <div  style='background-color: white;position: relative;top: -130px'><hr style='border: 1px solid orange'></span><span>$tire_brand $visina/$sirina $precnik $tire_season $opterecenje $indeks_brzine</span><br /><br /><span style='color: #428bca'>Cena: $cena</span><br/>
            <span><br /><a href='details.php?id_guma=$id_guma'><button class='btn btn-primary btn-responsive' style='background-color:green;margin: auto;display: block; width: 150px;height: 40px; color: white;'>Detaljnije...</button></a>
            </span></div></div>
            ";

        }


}



/*DROPMENU PRIKAZ PROIZVODA(HEADER)*/
function getBrands(){
    global $con;

    $get_brands = "select * from marka";
    $run_brands =  mysqli_query($con, $get_brands);

    while ($row_brands=mysqli_fetch_array($run_brands)){
        $id_marka = $row_brands['id_marka'];
        $marka =  $row_brands['marka'];

        echo "<li class='dropdown-toggle' data-toggle=\"dropdown\" role='button' aria-haspopup=\"true\" aria-expanded=\"false\" ><a href='details.php?brand=$id_marka'>$marka</a></li>";
    }
}

/*PRIKAZ TIGAR GUMA*/
function getTigar()
{
    global $con;
    $get_brands = "select * from marka WHERE id_marka = 1";
    $run_brands = mysqli_query($con, $get_brands);

    while ($row_brands = mysqli_fetch_array($run_brands)) {
        $brand_id = $row_brands['id_marka'];
        $brand_title = $row_brands['marka'];

        echo "<li><a href='tigar.php'style='color:white'>$brand_title</a></li> ";
    }
}
/*PRIKAZ CORDIANT GUMA*/
function getCordiant()
{
    global $con;
    $get_brands = "select * from marka WHERE id_marka = 2";
    $run_brands =  mysqli_query($con, $get_brands);

    while ($row_brands=mysqli_fetch_array($run_brands)){
        $brand_id = $row_brands['id_marka'];
        $brand_title =  $row_brands['marka'];

        echo "<li><a href='cordiant.php'style='color:white'>$brand_title</a></li> ";
    }
}
/*PRIKAZ STARFIRE GUMA*/
function getStarfire()
{
    global $con;
    $get_brands = "select * from marka WHERE id_marka = 3";
    $run_brands =  mysqli_query($con, $get_brands);

    while ($row_brands=mysqli_fetch_array($run_brands)){
        $brand_id = $row_brands['id_marka'];
        $brand_title =  $row_brands['marka'];

        echo "<li><a href='starfire.php'style='color:white'>$brand_title</a></li> ";
    }
}
/*PRIKAZ MICHELIN GUMA*/
function getMichelin()
{
    global $con;
    $get_brands = "select * from marka WHERE id_marka = 4";
    $run_brands =  mysqli_query($con, $get_brands);

    while ($row_brands=mysqli_fetch_array($run_brands)){
        $brand_id = $row_brands['id_marka'];
        $brand_title =  $row_brands['marka'];

        echo "<li><a href='michelin.php'style='color:white'>$brand_title</a></li> ";
    }
}
/*PRIKAZ SAVA GUMA*/
function getSava()
{
    global $con;
    $get_brands = "select * from marka WHERE id_marka = 5";
    $run_brands =  mysqli_query($con, $get_brands);

    while ($row_brands=mysqli_fetch_array($run_brands)){
        $brand_id = $row_brands['id_marka'];
        $brand_title =  $row_brands['marka'];

        echo "<li><a href='sava.php'style='color:white'>$brand_title</a></li> ";
    }
}
/*PRIKAZ GOODYEAR GUMA*/
function getGoodyear()
{
    global $con;
    $get_brands = "select * from marka WHERE id_marka = 6";
    $run_brands =  mysqli_query($con, $get_brands);

    while ($row_brands=mysqli_fetch_array($run_brands)){
        $brand_id = $row_brands['id_marka'];
        $brand_title =  $row_brands['marka'];

        echo "<li><a href='goodyear.php'style='color:white'>$brand_title</a></li> ";
    }
}
/*PRIKAZ NOKIAN GUMA*/
function getNokian()
{
    global $con;
    $get_brands = "select * from marka WHERE id_marka = 7";
    $run_brands =  mysqli_query($con, $get_brands);

    while ($row_brands=mysqli_fetch_array($run_brands)){
        $brand_id = $row_brands['id_marka'];
        $brand_title =  $row_brands['marka'];

        echo "<li><a href='nokian.php'style='color:white'>$brand_title</a></li> ";
    }
}

/*PRIKAZ PROIZVODA NA TIGAR STRANICI*/
function Tigar()
{
    global $con;
    $get_pro = "SELECT g.id_guma , g.id_marka, g.slika, g.cena, g.sirina, g.visina, g.opterecenje, g.precnik, g.indeks_brzine, id_sezona, m.marka from gume g 
               JOIN marka m ON g.id_marka = m.id_marka WHERE g.id_marka=1";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {
        $id_guma = $row_pro ['id_guma'];
        $tire_brand = $row_pro ['marka'];
        $product_image = $row_pro ['slika'];
        $cena = $row_pro ['cena'];
        $sirina= $row_pro ['sirina'];
        $visina = $row_pro ['visina'];
        $opterecenje = $row_pro ['opterecenje'];
        $precnik = $row_pro ['precnik'];
        $indeks_brzine = $row_pro ['indeks_brzine'];
        $tire_season = $row_pro ['id_sezona'];




        echo "
            <div class='col-xs-12 col-sm-4 col-md-4 products mr-0'  style='padding: 60px;height:400px;border: 1px solid lightgrey'><br /><span> 
            <img src='http://localhost/ProdajaGuma/product_images/$product_image'  class='img-responsive'/></span> 
            <h2 class='top-left' style='background-color: aqua;color:white;position: absolute;top:20px;left: 0px;width: 150px;font-size: 15px'>&nbsp SEZONA &nbsp<span style='color:blue'>
            <img src='http://localhost/ProdajaGuma/ikonice/snow.ico' width='35px' ></span></span></h2><br /><br /><span></span> 
            <div  style='background-color: white;position: relative;top: -130px'><hr style='border: 1px solid orange'></span><span>$tire_brand $visina/$sirina $precnik $tire_season $opterecenje $indeks_brzine</span><br /><br /><span style='color: #428bca'>Cena: $cena</span><br/>
            <span><br /><a href='details.php?id_guma=$id_guma'><button class='btn btn-primary btn-responsive' style='background-color:green;margin: auto;display: block; width: 150px;height: 40px; color: white;'>Detaljnije...</button></a>
            </span></div></div>
            ";

    }


}
/*PRIKAZ PROIZVODA NA CORDIANT STRANICI*/
function Cordiant()
{
    global $con;
    $get_pro = "SELECT g.id_guma , g.id_marka, g.slika, g.cena, g.sirina, g.visina, g.opterecenje, g.precnik, g.indeks_brzine, id_sezona, m.marka from gume g 
               JOIN marka m ON g.id_marka = m.id_marka WHERE g.id_marka=2";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {
        $id_guma = $row_pro ['id_guma'];
        $tire_brand = $row_pro ['marka'];
        $product_image = $row_pro ['slika'];
        $cena = $row_pro ['cena'];
        $sirina= $row_pro ['sirina'];
        $visina = $row_pro ['visina'];
        $opterecenje = $row_pro ['opterecenje'];
        $precnik = $row_pro ['precnik'];
        $indeks_brzine = $row_pro ['indeks_brzine'];
        $tire_season = $row_pro ['id_sezona'];




        echo "
            <div class='col-xs-12 col-sm-4 col-md-4 products mr-0'  style='padding: 60px;height:400px;border: 1px solid lightgrey'><br /><span> 
            <img src='http://localhost/ProdajaGuma/product_images/$product_image'  class='img-responsive'/></span> 
            <h2 class='top-left' style='background-color: aqua;color:white;position: absolute;top:20px;left: 0px;width: 150px;font-size: 15px'>&nbsp SEZONA &nbsp<span style='color:blue'>
            <img src='http://localhost/ProdajaGuma/ikonice/snow.ico' width='35px' ></span></span></h2><br /><br /><span></span> 
            <div  style='background-color: white;position: relative;top: -130px'><hr style='border: 1px solid orange'></span><span>$tire_brand $visina/$sirina $precnik $tire_season $opterecenje $indeks_brzine</span><br /><br /><span style='color: #428bca'>Cena: $cena</span><br/>
            <span><br /><a href='details.php?id_guma=$id_guma'><button class='btn btn-primary btn-responsive' style='background-color:green;margin: auto;display: block; width: 150px;height: 40px; color: white;'>Detaljnije...</button></a>
            </span></div></div>
            ";

    }


}
/*PRIKAZ PROIZVODA NA STARFIRE STRANICI*/
function Starfire()
{
    global $con;
    $get_pro = "SELECT g.id_guma , g.id_marka, g.slika, g.cena, g.sirina, g.visina, g.opterecenje, g.precnik, g.indeks_brzine, id_sezona, m.marka from gume g 
               JOIN marka m ON g.id_marka = m.id_marka WHERE g.id_marka=3";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {
        $id_guma = $row_pro ['id_guma'];
        $tire_brand = $row_pro ['marka'];
        $product_image = $row_pro ['slika'];
        $cena = $row_pro ['cena'];
        $sirina= $row_pro ['sirina'];
        $visina = $row_pro ['visina'];
        $opterecenje = $row_pro ['opterecenje'];
        $precnik = $row_pro ['precnik'];
        $indeks_brzine = $row_pro ['indeks_brzine'];
        $tire_season = $row_pro ['id_sezona'];




        echo "
            <div class='col-xs-12 col-sm-4 col-md-4 products mr-0'  style='padding: 60px;height:400px;border: 1px solid lightgrey'><br /><span> 
            <img src='http://localhost/ProdajaGuma/product_images/$product_image'  class='img-responsive'/></span> 
            <h2 class='top-left' style='background-color: aqua;color:white;position: absolute;top:20px;left: 0px;width: 150px;font-size: 15px'>&nbsp SEZONA &nbsp<span style='color:blue'>
            <img src='http://localhost/ProdajaGuma/ikonice/snow.ico' width='35px' ></span></span></h2><br /><br /><span></span> 
            <div  style='background-color: white;position: relative;top: -130px'><hr style='border: 1px solid orange'></span><span>$tire_brand $visina/$sirina $precnik $tire_season $opterecenje $indeks_brzine</span><br /><br /><span style='color: #428bca'>Cena: $cena</span><br/>
            <span><br /><a href='details.php?id_guma=$id_guma'><button class='btn btn-primary btn-responsive' style='background-color:green;margin: auto;display: block; width: 150px;height: 40px; color: white;'>Detaljnije...</button></a>
            </span></div></div>
            ";

    }


}
/*PRIKAZ PROIZVODA NA MICHELIN STRANICI*/
function Michelin()
{
    global $con;
    $get_pro = "SELECT g.id_guma , g.id_marka, g.slika, g.cena, g.sirina, g.visina, g.opterecenje, g.precnik, g.indeks_brzine, id_sezona, m.marka from gume g 
               JOIN marka m ON g.id_marka = m.id_marka WHERE g.id_marka=4";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {
        $id_guma = $row_pro ['id_guma'];
        $tire_brand = $row_pro ['marka'];
        $product_image = $row_pro ['slika'];
        $cena = $row_pro ['cena'];
        $sirina= $row_pro ['sirina'];
        $visina = $row_pro ['visina'];
        $opterecenje = $row_pro ['opterecenje'];
        $precnik = $row_pro ['precnik'];
        $indeks_brzine = $row_pro ['indeks_brzine'];
        $tire_season = $row_pro ['id_sezona'];




        echo "
            <div class='col-xs-12 col-sm-4 col-md-4 products mr-0'  style='padding: 60px;height:400px;border: 1px solid lightgrey'><br /><span> 
            <img src='http://localhost/ProdajaGuma/product_images/$product_image'  class='img-responsive'/></span> 
            <h2 class='top-left' style='background-color: aqua;color:white;position: absolute;top:20px;left: 0px;width: 150px;font-size: 15px'>&nbsp SEZONA &nbsp<span style='color:blue'>
            <img src='http://localhost/ProdajaGuma/ikonice/snow.ico' width='35px' ></span></span></h2><br /><br /><span></span> 
            <div  style='background-color: white;position: relative;top: -130px'><hr style='border: 1px solid orange'></span><span>$tire_brand $visina/$sirina $precnik $tire_season $opterecenje $indeks_brzine</span><br /><br /><span style='color: #428bca'>Cena: $cena</span><br/>
            <span><br /><a href='details.php?id_guma=$id_guma'><button class='btn btn-primary btn-responsive' style='background-color:green;margin: auto;display: block; width: 150px;height: 40px; color: white;'>Detaljnije...</button></a>
            </span></div></div>
            ";

    }


}
/*PRIKAZ PROIZVODA NA SAVA STRANICI*/
function Sava()
{
    global $con;
    $get_pro = "SELECT g.id_guma , g.id_marka, g.slika, g.cena, g.sirina, g.visina, g.opterecenje, g.precnik, g.indeks_brzine, id_sezona, m.marka from gume g 
               JOIN marka m ON g.id_marka = m.id_marka WHERE g.id_marka=5";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {
        $id_guma = $row_pro ['id_guma'];
        $tire_brand = $row_pro ['marka'];
        $product_image = $row_pro ['slika'];
        $cena = $row_pro ['cena'];
        $sirina= $row_pro ['sirina'];
        $visina = $row_pro ['visina'];
        $opterecenje = $row_pro ['opterecenje'];
        $precnik = $row_pro ['precnik'];
        $indeks_brzine = $row_pro ['indeks_brzine'];
        $tire_season = $row_pro ['id_sezona'];




        echo "
            <div class='col-xs-12 col-sm-4 col-md-4 products mr-0'  style='padding: 60px;height:400px;border: 1px solid lightgrey'><br /><span> 
            <img src='http://localhost/ProdajaGuma/product_images/$product_image'  class='img-responsive'/></span> 
            <h2 class='top-left' style='background-color: aqua;color:white;position: absolute;top:20px;left: 0px;width: 150px;font-size: 15px'>&nbsp SEZONA &nbsp<span style='color:blue'>
            <img src='http://localhost/ProdajaGuma/ikonice/snow.ico' width='35px' ></span></span></h2><br /><br /><span></span> 
            <div  style='background-color: white;position: relative;top: -130px'><hr style='border: 1px solid orange'></span><span>$tire_brand $visina/$sirina $precnik $tire_season $opterecenje $indeks_brzine</span><br /><br /><span style='color: #428bca'>Cena: $cena</span><br/>
            <span><br /><a href='details.php?id_guma=$id_guma'><button class='btn btn-primary btn-responsive' style='background-color:green;margin: auto;display: block; width: 150px;height: 40px; color: white;'>Detaljnije...</button></a>
            </span></div></div>
            ";

    }


}
/*PRIKAZ PROIZVODA NA GOODYEAR STRANICI*/
function Goodyear()
{
    global $con;
    $get_pro = "SELECT g.id_guma , g.id_marka, g.slika, g.cena, g.sirina, g.visina, g.opterecenje, g.precnik, g.indeks_brzine, id_sezona, m.marka from gume g 
               JOIN marka m ON g.id_marka = m.id_marka WHERE g.id_marka=6";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {
        $id_guma = $row_pro ['id_guma'];
        $tire_brand = $row_pro ['marka'];
        $product_image = $row_pro ['slika'];
        $cena = $row_pro ['cena'];
        $sirina= $row_pro ['sirina'];
        $visina = $row_pro ['visina'];
        $opterecenje = $row_pro ['opterecenje'];
        $precnik = $row_pro ['precnik'];
        $indeks_brzine = $row_pro ['indeks_brzine'];
        $tire_season = $row_pro ['id_sezona'];




        echo "
            <div class='col-xs-12 col-sm-4 col-md-4 products mr-0'  style='padding: 60px;height:400px;border: 1px solid lightgrey'><br /><span> 
            <img src='http://localhost/ProdajaGuma/product_images/$product_image'  class='img-responsive'/></span> 
            <h2 class='top-left' style='background-color: aqua;color:white;position: absolute;top:20px;left: 0px;width: 150px;font-size: 15px'>&nbsp SEZONA &nbsp<span style='color:blue'>
            <img src='http://localhost/ProdajaGuma/ikonice/snow.ico' width='35px' ></span></span></h2><br /><br /><span></span> 
            <div  style='background-color: white;position: relative;top: -130px'><hr style='border: 1px solid orange'></span><span>$tire_brand $visina/$sirina $precnik $tire_season $opterecenje $indeks_brzine</span><br /><br /><span style='color: #428bca'>Cena: $cena</span><br/>
            <span><br /><a href='details.php?id_guma=$id_guma'><button class='btn btn-primary btn-responsive' style='background-color:green;margin: auto;display: block; width: 150px;height: 40px; color: white;'>Detaljnije...</button></a>
            </span></div></div>
            ";

    }


}
/*PRIKAZ PROIZVODA NA NOKIAN STRANICI*/
function Nokian()
{
    global $con;
    $get_pro = "SELECT g.id_guma , g.id_marka, g.slika, g.cena, g.sirina, g.visina, g.opterecenje, g.precnik, g.indeks_brzine, id_sezona, m.marka from gume g 
               JOIN marka m ON g.id_marka = m.id_marka WHERE g.id_marka=7";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {
        $id_guma = $row_pro ['id_guma'];
        $tire_brand = $row_pro ['marka'];
        $product_image = $row_pro ['slika'];
        $cena = $row_pro ['cena'];
        $sirina= $row_pro ['sirina'];
        $visina = $row_pro ['visina'];
        $opterecenje = $row_pro ['opterecenje'];
        $precnik = $row_pro ['precnik'];
        $indeks_brzine = $row_pro ['indeks_brzine'];
        $tire_season = $row_pro ['id_sezona'];




        echo "
            <div class='col-xs-12 col-sm-4 col-md-4 products mr-0'  style='padding: 60px;height:400px;border: 1px solid lightgrey'><br /><span> 
            <img src='http://localhost/ProdajaGuma/product_images/$product_image'  class='img-responsive'/></span> 
            <h2 class='top-left' style='background-color: aqua;color:white;position: absolute;top:20px;left: 0px;width: 150px;font-size: 15px'>&nbsp SEZONA &nbsp<span style='color:blue'>
            <img src='http://localhost/ProdajaGuma/ikonice/snow.ico' width='35px' ></span></span></h2><br /><br /><span></span> 
            <div  style='background-color: white;position: relative;top: -130px'><hr style='border: 1px solid orange'></span><span>$tire_brand $visina/$sirina $precnik $tire_season $opterecenje $indeks_brzine</span><br /><br /><span style='color: #428bca'>Cena: $cena</span><br/>
            <span><br /><a href='details.php?id_guma=$id_guma'><button class='btn btn-primary btn-responsive' style='background-color:green;margin: auto;display: block; width: 150px;height: 40px; color: white;'>Detaljnije...</button></a>
            </span></div></div>
            ";

    }


}
/*PRIKAZ 'DETALJNIJE...' details.php*/
function Specific()
{
    global $con;
    $id_gume = $_GET ['id_guma'];
    $get_pro = "SELECT g.id_guma , g.id_marka, g.slika, g.cena, g.sirina, g.visina, g.opterecenje, g.precnik, g.indeks_brzine, g.garancija, g.id_sezona, i.sezona, m.marka from gume g 
               JOIN marka m ON g.id_marka = m.id_marka 
               JOIN sezona i ON g.id_sezona = i.id_sezona WHERE g.id_guma = $id_gume ";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {
        $id_guma = $row_pro ['id_guma'];
        $tire_brand = $row_pro ['marka'];
        $product_image = $row_pro ['slika'];
        $cena = $row_pro ['cena'];
        $sirina = $row_pro ['sirina'];
        $visina = $row_pro ['visina'];
        $opterecenje = $row_pro ['opterecenje'];
        $precnik = $row_pro ['precnik'];
        $indeks_brzine = $row_pro ['indeks_brzine'];
        $tire_season = $row_pro ['sezona'];
        $garancija = $row_pro ['garancija'];


        echo "<div class='col-sm-4 col-md-4  mr-0'  style='padding: 60px;height:auto;border: 1px solid lightgrey'><br /><span> 
<div class='productss'><img src='http://localhost/ProdajaGuma/product_images/$product_image' alt='$tire_brand $visina $sirina $opterecenje $precnik $indeks_brzine $tire_season'  class='img-responsive' /></div></span> 
<h2 class='top-left' style='background-color: aqua;color:white;position: absolute;top:20px;left: 0px;width: 150px;font-size: 15px'>&nbsp SEZONA &nbsp<span style='color:blue'>
<img src='ikonice/snow.ico' width='35px' ></span></span></h2><br /><br /><span></span>
<div class='item-overlay top'></div>
</div>
<div class='col-sm-4 col-md-4' style='font-size: 18px;'><b>Cena:<br/><span style='float: right;color: orangered'>$cena RSD</span><br /><br />
<div style='background-color: lightgrey;color:white;width: 100%'>BESPLATNA ISPORUKA</div><div style='text-align: center'><br /><span style='font-size: 12px;margin-left: 7px;' ><img src='ikonice/zoom.png' style='width:30px; '>Pređite preko slike da biste zumirali</span></div></b>
<br /><input type='number' size='' pattern='[0-9]*' inputmode='numeric' class='form-control input-lg text-center place-order-input unos' value='1' min='1' max='99' name='unos' style='width: 100%'>
<br /><div style='text-align: center' class=''><span style='font-size: 10px'><img src='ikonice/i.png' style='width:50px;'>U polje iznad upišite koliko komada zelite da kupite </span></div>
<br /><button class='btn btn-primary btn-responsive' data-toggle='modal' data-target='#myModal' style='background-color:green;margin: auto;display: block; width: 150px;height: 40px; color: white;'><a href='#'>NARUČITE</a></button><br />
</span></div>
<div class='col-xs-12 col-sm-4 col-md-4' style='padding: 0'><table style='width: 100%'>
<tr>
<th colspan='2' style='text-align: center;background-color: orangered;color:white;font-size: 14px'>SPECIFIKACIJE ZA : $tire_brand $sirina/$visina $opterecenje $precnik $indeks_brzine $tire_season</th></tr>
<tr style='background-color: #f1f1f1;'><td>Proizvođač:</td><td>$tire_brand</td></tr>
<tr><td>Širina:</td><td>$sirina</td></tr>
<tr style='background-color: #f1f1f1;'><td>Visina:</td><td>$visina</td></tr>
<tr><td>Prečnik:</td><td>$precnik</td></tr>
<tr style='background-color: #f1f1f1;'><td>Opterećenje:</td><td>$opterecenje</td></tr>
<tr><td>Indeks brzine:</td><td>$indeks_brzine</td></tr>
<tr style='background-color: #f1f1f1;'><td>Sezona:</td><td>$tire_season</td></tr>
<tr><td>Garancija:</td><td>$garancija</td></tr></table></div> ";

    }
}
function Index()
{
    global $con;
    $get_pro = "SELECT g.id_guma , g.id_marka, g.slika, g.cena, g.sirina, g.visina, g.opterecenje, g.precnik, g.indeks_brzine, id_sezona, m.marka from gume g 
               JOIN marka m ON g.id_marka = m.id_marka ORDER BY g.id_guma DESC LIMIT 0,3 ";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {
        $id_guma = $row_pro ['id_guma'];
        $tire_brand = $row_pro ['marka'];
        $product_image = $row_pro ['slika'];
        $cena = $row_pro ['cena'];
        $sirina= $row_pro ['sirina'];
        $visina = $row_pro ['visina'];
        $opterecenje = $row_pro ['opterecenje'];
        $precnik = $row_pro ['precnik'];
        $indeks_brzine = $row_pro ['indeks_brzine'];
        $tire_season = $row_pro ['id_sezona'];




        echo "
            <div class='col-xs-12 col-sm-4 col-md-4 col-lg-4 products mr-0'  style='padding: 60px;height:430px;border: 1px solid lightgrey'><br /><span>
        <img src='http://localhost/ProdajaGuma/product_images/$product_image' alt='$tire_brand $visina $sirina $opterecenje $precnik $indeks_brzine $tire_season'  class='img-responsive'  /></span>
        <h2 class='top-left' style='background-color: aqua;color:white;position: absolute;top:20px;left: 0px;width: 150px;font-size: 15px'>&nbsp SEZONA &nbsp<span style='color:blue'>
        <img src='ikonice/snow.ico' width='35px' ></span></span></h2><br /><br /><span></span>
        <div  style='background-color: white;position: relative;top: -130px'><hr style='border: 1px solid orange'></span><span>$tire_brand $visina $sirina $opterecenje $precnik $indeks_brzine $tire_season</span><br /><br /><span style='color: #428bca'>Cena: $cena<p style='text-decoration: line-through'></p></span><br/>
        <span><br /><a href='details.php?id_guma=$id_guma'><button class='btn btn-primary btn-responsive' style='background-color:green;margin: auto;display: block; width: 150px;height: 40px; color: white;'>Detaljnije...</button></a>
        </span></div></div>";


    }


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

        echo "<option value='$userid'>$name</option> ";
    }


};*/



?>






</body>
</html>
