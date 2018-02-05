<?php
session_start();
include "db_config.php";
include 'function/functions.php'
?>
<html>
<head>
    <title>Internet Prodaja Guma</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="style.css">
    <script src="js/uslovi.js"></script>
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
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"style=\"';\">Dobrodošli {$_SESSION['first_name']}<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu brands\" style=\"font-family: 'Bebas Neue Regular'; background-color:  #31708f;color:white\">
                        <li><a href='narudzba.php' style='color: white;'>Narudzbe: ".broj_narudzbi()." </a></li>
                        <li><a href='cart.php' style='color: white;'>Korpa: ".suma_proizvoda()."   <span class=\"glyphicon glyphicon-shopping-cart\"></span></a></li>
                        <hr>
                        <li style='color:white;text-align: center font-size:14px'>&nbsp Ukupna cena: ".total_price()."  RSD </li>
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
                                <a class="navbar-brand" href="slike-kupaca.php" style="background-color: #31708f;color: white;">GALERIJA</a>
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

<div class="col-md-12" style="text-align: center"><h3><b>USLOVI KORIŠĆENJA</b></h3><hr style="border: 1px solid lightblue;"></div>






<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 context" style="padding:10px;text-align: center;alignment: center;align-content: center;">
    <div class="row" style="text-align: center;">
        <div class="col-xs-6 col-sm-3 col-md-3 fleft"> <!-- This is the parent div -->
            <a  class="show_hide"><img  src="ikonice/logistics-delivery-truck-and-clock.png"></a>
            <h4 style="background-color: #eeeeee">DOSTAVA</h4>
            <div class="slidingDiv">

                <p><b>Svu robu isporučujemo kroz 1-2 radna dana</b></p>
                <p>Dostava za određene države:</p>
                <ul>
                    <li>Srbija,</li>
                    <li>Hrvatska,</li>
                    <li>Makedonija,</li>
                    <li>Slovenija.</li>
                </ul>
            </div>
        </div>
<div class="col-xs-6 col-sm-3 col-md-3 fleft"> <!-- This is the parent div -->
    <a class="show_hide"><img  src="ikonice/car-wheel%20(1).png"></a>
    <h4 style="background-color: #eeeeee">GUME</h4>
    <div class="slidingDiv">
        <p><b>Nudimo Vam najbolji izbor guma:</b></p>
        <ul>
            <li>Tigar</li>
            <li>Sava</li>
            <li>Goodyear</li>
            <li>Starfire</li>
            <li>Michelin</li>
        </ul>
        <img src="slike/michelinlogo.jpg" class="img-responsive">
    </div>
</div>
<div class="col-xs-6 col-sm-3 col-md-3 fleft"> <!-- This is the parent div -->
    <a  class="show_hide"><img  src="ikonice/taxi.png"></a>
    <h4 style="background-color: #eeeeee">DOTA 2</h4>
    <div class="slidingDiv">
        <h5><b>LJUBAZNO I PROFESIONALNO</b></h5>
        Posle višegodisnjeg iskustva u veleprodaji guma svih vrsta, početkom 2015. osnovana je nova firma Dota 2,koja pored pomenute veleprodaje pneumatika iz godine u godinu niže sve bolje rezultate,za potrebe kvalitetnog održavanja i servisiranja vašeg automobila.

    </div>
</div>
    <div class="col-xs-6 col-sm-3 col-md-3 fleft"> <!-- This is the parent div -->
        <a class="show_hide"><img  src="ikonice/phone-book.png"></a>
        <h4 style="background-color: #eeeeee">KONTAKT</h4>
        <div class="slidingDiv">
            <span><img src="ikonice/phone-contact.png">&nbsp <b>Telefon:</b> 555-333</span>
            <br />
            <span><img src="ikonice/email.png">&nbsp <b>Email:</b> dota2@team.com</span>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {

            $(".slidingDiv").hide();
            $(".show_hide").show();

            $('.show_hide').click(function() {
                $(this).parent().find(".slidingDiv").slideToggle();
            });

        });
    </script>
</div>




<br />
<div class="col-xs-12 col-sm-12  col-md-12 uslovi" >
    <div class="col-xs-12 col-sm-2 col-md-2 baner1" style="text-align: center">
        <ul>
            <li><a href="http://www.polovniautomobili.com"><img src="baneri/polovniautomobili-infostud-logo.png"></a></li>
            <li><a href="http://www.poslonaut.com"><img src="baneri/poslonaut-infostud-logo.png"></a></li>
            <li><a href="http://www.poslovi.infostud.com"><img src="baneri/poslovi-infostud-logo.png"></a></li>
            <li><a href="http://www.prijemni.infostud.com"><img src="baneri/prijemni-infostud-logo.png"></a></li>
        </ul>
    </div>
    <div class="col-sm-8 col-md-8">
    <h3 style="color: orangered;">OPŠTI USLOVI</h3>
    <p>Tvoju narudžbenicu za gume možemo da primimo putem sajta, telefona ili mejla, kako god da tebi više odgovara. Ukoliko su gume koje si naručio raspoložive, gume se rezervišu na tvoje ime u trajanju od 24 časa. Potvrdu narudžbenice (u vidu predračuna) i obaveštenje o rezervaciji ćemo ti poslati putem mejla i sms-a. Ukoliko gume koje si naručio nisu raspoložive, naša je obaveza da te o tome obavestimo i ponudimo odgovarajuću zamenu ukoliko je to moguće. Narudžbenice prispele do 15 časova, obrađuju se istog dana, a narudžbenice prispele nakon 15 časova obrađuju se narednog radnog dana. Narudžbina se smatra potvrđenom sa tvoje strane izvršenjem uplate celokupnog iznosa koji je naznačen na predračunu i u okviru roka važnosti predračuna. Naša je obaveza da naručene gume isporučimo saobrazno ugovoru na daljinu koji smo sa tobom sklopili.</p>

    <b>Sastavni deo ovih uslova su i:</b>

    <ul style="margin-left: 10px">
        <li>Isporuka</li>
        <li>Saobraznost robe</li>
        <li>Garancija zadovoljstva</li>
        <li>Garancija kvaliteta</li>
        <li>Načini plaćanja</li>
        <li>Zaštita privatnosti</li>
        <li>Opisi, cene i raspoloživost</li>
    </ul>
    </div>
    <div class="col-xs-12 col-sm-2 col-md-2 baner2" style="text-align: center">
        <li><a href="http://www.mojtim.com"><img src="baneri/mojtim-infostud-logo.png"></a></li>
        <li><a href="http://www.helloworld.com"><img src="baneri/hw-infostud-logo.png"></a></li>
        <li><a href="http://www.najposlodavac.com"><img src="baneri/najboljiposlodavac-infostud-logo.png"></a></li>
        <li><a href="http://www.najstudent.com"><img src="baneri/najstudent-infostud-logo.png"></a></li>
    </div>
</div>
<br />
<div class="col-xs-12 col-sm-12col-md-12">
    <hr style="border: 1px solid lightblue;">
    <h2 style="text-align: center">ZAHVALNICA</h2>
    <div class="col-md-offset-2 col-md-8 zahvalnica" style="border:padding: 0;text-align: center">
        <span style="background-color: orangered;font-size: 18px; color:white;text-align: center"><i class="fa fa-graduation-cap" aria-hidden="true"></i>ŠKOLSKI PROJEKAT</span>&nbsp - &nbsp<span>Internet prodaja guma je projekat <a href="http://www.vts.su.ac.rs" style="color: orangered"><b>Visoke Tehničke Škole Strukovnih Studija</b></a> u Subotici.<br />Zahvaljujemo se sajtu <a href="http://www.internet-prodaja-guma.com" style="color: orangered"><b>Internet-prodaja-guma</b>&nbsp</a>kao i organizaciji Infostud, što su nam omogućili da koristimo njihov materijal.</span>
    <br />

    </div>

</div>
<div class="col-xs-12 col-sm-12 col-md-12"><hr style="border: 1px solid lightblue;"></div>






<!--<div class="col-xs-6 col-sm-6 col-md-offset-1 col-md-5 podmeni"  >
    <div class="row" style="background-color: #003a73" >
        <div class="col-md-2" style="background-color:aqua;">
    <img src="ikonice/taxi.png" class="img-responsive" style="color:white">
        </div>
        <div class="col-md-offset-2" style="background-color: ;margin: 0px;padding: 0px"><h5  style="color: #fff;text-align: center">Zasto Dota2 gume?</h5></div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-2">
            <img src="ikonice/logistics-delivery-truck-and-clock.png" class="img-responsive">
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-2">
            <img src="ikonice/car-wheel%20(1).png" class="img-responsive">
        </div>
    </div>
    <br />
</div>-->
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

<div class="col-xs-12 col-sm-12 col-md-12">
    <h6 style="text-align: center">Copyright © 2015 - 2017 - Sva prava zadržana | Internet Prodaja Guma je deo Dota2 tima! </h6>
</div>



</body>
</html>