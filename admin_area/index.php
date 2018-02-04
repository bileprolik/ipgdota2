<html>
<head>
    <title>Admin panel</title>

    <script src="../jquery.js"></script>
    <script src="../../validacija/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
    <script src="../../validacija/jquery-validation-1.17.0/dist/additional-methods.min.js"></script>
    <script>

    </script>

    <!-- META TAGS -->
    <meta name="description" content="Prodaja Zimskih i letnjih guma. Velika kolekcija guma za vas automobil. Puno modela guma: Cordiant, Goodyear, Michelin, Nokian, Sava, Starfire, Tigar." />
    <meta name="keywords" content="Gume, Zimske gume, Letnje Gume,Jeftine Gume, Cordiant, Goodyear, Michelin, Nokian, Sava, Starfire, Tigar" />
    <title>Internet Prodaja Guma - Pocetna stranica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- JQUERY -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 0;margin: 0;border-bottom: 1px solid grey" >

    <h1 class='elegantshadow' style="margin: 0"><span class="alt-logo">Admin Panel</span></h1>



</div>

<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 left" style="height: 500px;text-align: center;padding: 15px;background-color: #e7e5e4;">

    <a href='index.php?insert_tires'><div class=\"center-wrap\">
            <div class='button'>
                <a href="index.php?insert_tires" style="font-family: 'Bebas Neue Regular'">Ubacivanje proizvoda<span class='shift'>›</span></a>
                <div class='mask'></div>
            </div>
        </div></a>

    <br />


    <a href='index.php?pregled_proizvoda'><div class=\"center-wrap\">
            <div class='button'>
                <a href="index.php?pregled_proizvoda" style="font-family: 'Bebas Neue Regular'">Pregled proizvoda<span class='shift'>›</span></a>
                <div class='mask'></div>
            </div>
        </div></a>

    <br />

    <a href='index.php?insert_marka'><div class=\"center-wrap\">
            <div class='button'>
                <a href="index.php?insert_marka" style="font-family: 'Bebas Neue Regular'">Ubacivanje marki<span class='shift'>›</span></a>
                <div class='mask'></div>
            </div>
        </div></a>

    <br />

    <a href='index.php?pregled_marki'><div class=\"center-wrap\">
            <div class='button'>
                <a href="index.php?pregled_marki" style="font-family: 'Bebas Neue Regular'">Pregled marki<span class='shift'>›</span></a>
                <div class='mask'></div>
            </div>
        </div></a>

    <br />

    <a href='index.php?pregled_narudzbi'><div class=\"center-wrap\">
            <div class='button'>
                <a href="index.php?pregled_narudzbi" style="font-family: 'Bebas Neue Regular'">Pregled narudzbi<span class='shift'>›</span></a>
                <div class='mask'></div>
            </div>
        </div></a>

    <br />



    <br />

</div>
<div style="background-color: #e7e5e4; height: 1400px ">

    <?php

    if(isset($_GET['insert_tires'])){

    include("insert_tires.php");

    }
    if(isset($_GET['pregled_proizvoda']))
    {
        include('pregled_proizvoda.php');
    }
    if(isset($_GET['izmena_proizvoda']))
    {
        include('izmena_proizvoda.php');
    }
    if(isset($_GET['pregled_marki']))
    {
        include('pregled_marki.php');
    }
    if(isset($_GET['insert_marka']))
    {
        include('insert_marka.php');
    }
    if(isset($_GET['edit_cat']))
    {
        include('edit_cat.php');
    }
    if(isset($_GET['edit_cat']))
    {
        include('edit_cat.php');
    }
    if(isset($_GET['pregled_narudzbi']))
    {
        include('pregled_narudzbi.php');
    }


    ?>





</div>

</body>
</html>