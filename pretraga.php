<?php
session_start();
include ("db_config.php");
include ("function/functions.php");


?>
<html>
<head>
    <!-- FACEBOOK OPEN GRAPH -->
    <meta property="og:url" content="https://internetprodajagumadota2.000webhostapp.com" />
    <meta property="og:title" content="Internet prodaja guma - Online prodaja guma" />
    <meta property="og:description" content="Internet prodaja guma je online prodavnica koja pruza kupovinu guma po najpovoljnijim cenama" />


    <!-- GLOBAL SITE TAG (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109814276-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-109814276-1');



    </script>
    <script type="text/javascript">

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


    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/index.js"></script>

    <!--STYLE-->
    <style>
        h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
        body {font-family: "Open Sans"}


        .select-boxes{text-align: center;}
        select {
            background-color: #F5F5F5;
            border: 1px double #15a6c7;
            color: #1d93d1;
            font-family: Georgia;
            font-weight: bold;
            font-size: 14px;
            height: 39px;
            padding: 7px 8px;
            width: 250px;
            outline: none;
            margin: 10px 0 10px 0;
        }
        select option{
            font-family: Georgia;
            font-size: 14px;
        }

    </style>



</head>
<body>
<nav class="navbar navbar-default">
    <div class="navbar-header">
        <div class="navbar-wrapper">
            <div class="container-fluid">
                <nav class="navbar navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php">&nbsp PRODAJA GUMA</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php" class="">NASLOVNA</a></li>
                                <li class=" dropdown">
                                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROIZVODI <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class=" dropdown">
                                            <a href="tigar.php" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><a href="tigar.php">Tigar</a></a>
                                        </li>
                                        <li>
                                            <a href="goodyear.php" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><a href="goodyear.php">Goodyear</a></a>
                                        </li>
                                        <li>
                                            <a href="sava.php" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><a href="sava.php">Sava</a></a>
                                        </li>
                                        <li>
                                            <a href="nokian.php" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><a href="nokian.php">Nokian</a></a>
                                        </li>
                                        <li>
                                            <a href="michelin.php" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><a href="michelin.php">Michelin</a></a>
                                        </li>
                                        <li>
                                            <a href="starfire.php" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><a href="starfire.php">Starfire</a></a>
                                        </li>
                                        <li>
                                            <a href="cordiant.php" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><a href="cordiant.php">Cordiant</a></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="uslovi.php">USLOVI KORIŠĆENJA</a></li>

                                <?php

                                if(isset($_SESSION['email'])) {

                                    echo "<li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"style=\"';\">Hello {$_SESSION['email']}<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu brands\" style=\"font-family: 'Bebas Neue Regular'; background-color:  #31708f;color:white\">
                        <li><a href='#' style='color: white;'>Narudzbe:</a></li>
                        <li><a href='cart.php' style='color: white;'>Korpa:  <span class=\"glyphicon glyphicon-shopping-cart\"></span></a></li>
                        <hr>
                        <li style='color:white;text-align: center font-size:14px'>&nbsp Ukupna cena:  RSD </li>
                        <hr>
                        <li style='color:white; font-size:14px'><a href='logout.php'>Logout</a> </li>
                       
                       
                        
                        
                    </ul>";
                                }
                                else
                                {
                                    echo "<li><a href=\"login_stranica.php\">LOGIN</a></li>";
                                }
                                ?>

                            </ul>
                            <ul class="nav navbar-nav pull-right">
                                <a class="navbar-brand" style="background-color: #31708f;color: white;"><span><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>ŠKOLSKI PROJEKAT</a>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- /.nav-collapse -->
</nav>


<div class="underheader" style="text-align: center;">
    <img src="slike/internet_prodaja_guma_besplatna_isporuka_desktop.png" class="img-responsive"  alt="besplatna_dostava"  >
</div>




<!--Gume, crtica, patosnice-->
<div class="col-xs-12 col-sm-12 col-md-12 menu" style="text-align: center;vertical-align: middle;display: table-cell;">

    <div class="col-xs-6 col-sm-6 col-md-6" style="border-right: 1px solid white">
        <a href="gume.php" style="font-size: 18px"><img src="ikonice/gume2_icon.png" alt="gume" width="30px"><span class="hidden-xs">&nbsp GUME</span></a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <a href="uslovi.php" style="font-size: 18px"><span><img src="ikonice/about.png" alt="o_nama" width="30px"><span class="hidden-xs">&nbsp O NAMA</span></a>
    </div>

</div>
<br />
<br />
<br />

<!--<div class="col-xs-12 col-sm-3 col-md-offset-1 col-md-2 col-lg-2" style="background-color: red;height: 1000px"></div>-->
<?php



if(isset($_POST['brend']) && isset($_POST['visina']) && isset($_POST['visina1']) && isset($_POST['sirina2'])) {
    global $con;
    $brend = $_POST['brend'];
    $visina = $_POST['visina'];
    $visina1 = $_POST['visina1'];
    $sirina2 = $_POST['sirina2'];




    $get_pro = "SELECT g.id_guma , g.id_marka, g.slika, g.cena, g.sirina, g.visina, g.opterecenje, g.precnik, g.indeks_brzine, g.garancija, g.id_sezona, i.sezona, m.marka from gume g 
               JOIN marka m ON g.id_marka = m.id_marka 
               JOIN sezona i ON g.id_sezona = i.id_sezona WHERE  g.sirina = $sirina2 AND g.visina = $visina1";

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



        echo "<div class='col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10' style='border: 1px solid lightgrey;margin-left: '><div class='col-xs-12 col-sm-4 col-md-4   mr-0'  style='padding: 60px;height:auto;text-align: center'><br /><span> 
<img src='http://localhost/ProdajaGuma/product_images/$product_image' alt='$tire_brand $visina $sirina $opterecenje $precnik $indeks_brzine $tire_season'  class='img-responsive' /></span> 
<h2 class='top-left' style='background-color: aqua;color:white;position: absolute;top:20px;left: 0px;width: 150px;font-size: 15px'>&nbsp SEZONA &nbsp<span style='color:blue'>
<img src='ikonice/snow.ico' width='35px' ></span></span></h2><br /><br /><span></span>
</div>

<div class='col-sm-4 col-md-4' style='font-size: 18px;text-align: center'>Naziv: <br /><br /><b>$tire_brand $sirina/$visina $opterecenje $precnik $indeks_brzine<br/><span style='float: right;color: #31708f'></span><br /><br />
<div class='' style='padding: 0'><table style='width: 100%'>
<tr>
<th colspan='2' style='text-align: center;background-color: #31708f;color:white;font-size: 14px'>SPECIFIKACIJE ZA : $tire_brand $sirina/$visina $opterecenje $precnik $indeks_brzine $tire_season</th></tr>
<tr style='background-color: #f1f1f1;'><td>Proizvođač:</td><td>$tire_brand</td></tr>
<tr><td>Širina:</td><td>$sirina</td></tr>
<tr style='background-color: #f1f1f1;'><td>Visina:</td><td>$visina</td></tr>
<tr><td>Prečnik:</td><td>$precnik</td></tr>
<tr style='background-color: #f1f1f1;'><td>Opterećenje:</td><td>$opterecenje</td></tr>
<tr><td>Indeks brzine:</td><td>$indeks_brzine</td></tr>
<tr style='background-color: #f1f1f1;'><td>Sezona:</td><td>$tire_season</td></tr>
<tr><td>Garancija:</td><td>$garancija</td></tr></table></div>
</b>
<br />  
</div>
<div class='col-xs-12 col-sm-4 col-md-4' style='font-size: 18px;'><b>Cena:<br/><span style='float: right;color: #31708f'>$cena RSD</span><br /><br />
<div style='background-color: lightgrey;color:white;width: 100%;'>BESPLATNA ISPORUKA</div><div style='text-align: center'></div>
<br />
<p style='text-align: center;font-size: 14px' >Sve porudzbine se šalju kurirskom službom B & S , rok isporuke je 1-2 dana u zavisnosti od vremena porudzbine. Vikendom ne isporučujemo robu.</p>

<span><br /><a href='details.php?id_guma=$id_guma'><button class='btn btn-primary btn-responsive' style='background-color:green;margin: auto;display: block; width: 150px;height: 40px; color: white;'>Detaljnije...</button></a>
<br />
</div>

</div> ";


    }

}


?>


<div class="col-xs-12 col-sm-12 hidden-md hidden-lg brands">
    <div class="col-xs-6 col-sm-6">
        <img src="brandphotos/continental.png">
        <img src="brandphotos/sava.png">
    </div>
    <div class="col-xs-6 col-sm-6">
        <img src="brandphotos/dunlop.png">
        <img src="brandphotos/michelin.png">
    </div>

</div>




<div class="hidden-xs hidden-sm col-sm-offset-1 col-sm-10 col-md-10 col-md-offset-1">
    <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="col-md-2 col-sm-6 col-xs-12"><a href="#"><img src="brandphotos/continental.png" class="img-responsive"></a></div>
            </div>
            <div class="item">
                <div class="col-md-2 col-sm-6 col-xs-12"><a href="#"><img src="brandphotos/sava.png" class="img-responsive"></a></div>
            </div>
            <div class="item">
                <div class="col-md-2 col-sm-6 col-xs-12"><a href="#"><img src="brandphotos/tigar.png" class="img-responsive"></a></div>
            </div>
            <div class="item">
                <div class="col-md-2 col-sm-6 col-xs-12"><a href="#"><img src="brandphotos/dunlop.png" class="img-responsive"></a></div>
            </div>
            <div class="item">
                <div class="col-md-2 col-sm-6 col-xs-12"><a href="#"><img src="brandphotos/michelin.png" class="img-responsive"></a></div>
            </div>
            <div class="item">
                <div class="col-md-2 col-sm-6 col-xs-12"><a href="#"><img src="brandphotos/nokian.png" class="img-responsive"></a></div>
            </div>


        </div>
    </div>

    <script>
        $('.carousel[data-type="multi"] .item').each(function(){
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i=0;i<4;i++) {
                next=next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
            }
        });
    </script>
</div>
<div class="footer col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="position: relative;">
    <img src="slike/rsz_1footer-bg.jpg" alt="footer" style='border-top: 2px solid #31708f;border-bottom:2px solid #31708f'>
    <div class="col-xs-12 col-sm-12 col-md-12 copyrights">
        <div class="col-xs-4 col-sm-offset-1 col-sm-3 col-md-offset-1 col-md-3">
            <h5 style="color:orangered"><b>PONUDA GUMA</b></h5>
            <ul style="color: white">
                <li><a href="tigar.php">Tigar</li>
                <li><a href="starfire.php">Starfire</a></li>
                <li><a href="goodyear.php">Goodyear</a></li>
                <li><a href="michelin.php">Michelin</a></li>
                <li><a href="nokian.php">Nokian</a></li>
                <li><a href="sava.php">Sava</a></li>
                <li><a href="cordiant.php">Cordiant</a></li>
            </ul>
        </div>
        <div class="col-xs-4 col-sm-offset-1 col-sm-3 col-md-offset-1 col-md-3 dota2">
            <h5 style="color: orangered"><b>DOTA 2 TEAM</b></h5>
            <ul style="color: white">
                <li style="list-style: none">Internet Prodaja Guma</li>
                <li style="list-style: none">Milutina Uskokovica 1, 24000 Subotica</li>
                <li style="list-style: none">Maticni broj: Jos nemamo</li>
            </ul>
        </div>
        <div class="col-xs-4 col-sm-offset-1 col-sm-3 col-md-offset-1 col-md-3">
            <h5 style="color: orangered"><b>KONTAKT:</b></h5>
            <span class="fa fa-phone" aria-hidden="true" style="color: white;font-size: 14px">&nbsp Telefon: 555-333</span>
            <br />
            <br />
            <span class="fa fa-envelope" aria-hidden="true" style="color: white;font-size: 14px">&nbsp Email: dota2@team.com</span>
            <br /><br />
            <i class="fa fa-facebook-square" aria-hidden="true" style="font-size: 40px;color: orangered"></i>
            <i class="fa fa-instagram" aria-hidden="true" style="font-size: 40px;color: orangered"></i>
            <i class="fa fa-twitter-square" aria-hidden="true" style="font-size: 40px;color: orangered"></i>
        </div>




    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12" style="font-weight:bold ">
    <h6 style="text-align: center">Copyright © 2015 - 2017 - Sva prava zadržana | Internet Prodaja Guma je deo Dota2 tima! </h6>
</div>


<script src="js/custom-file-input.js"></script>

</body>
</html>
<!--
<a class="navbar-brand" style="background-color: rgba(255,69,0,0.75);color: white;float: right"><span><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>ŠKOLSKI PROJEKAT</a>-->