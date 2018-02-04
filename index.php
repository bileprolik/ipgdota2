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


    <script src="jquery.js"></script>
    <script src="js/index.js"></script>
    <script src="js/jqueryedge.js"></script>
    <script src="../validacija/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
    <script src="../validacija/jquery-validation-1.17.0/dist/additional-methods.min.js"></script>
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


    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />


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

        #id_marka-error, #brend-error, #visina-error,#sirina-error,#comment_text-error
        {
            color:white;
            display: block;
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
                        <li><a href='narudzba.php' style='color: white;'>Narudzbe:</a></li>
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
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  pretraga" style="padding: 0;border: 1px solid grey;">
        <br/>
        <br/>
        <br/>
        <br/>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 da   ">
            <!--Pretraga-->
            <?php
            ?>
            <h3 style="text-align: center;color: white">PRONAĐITE GUMU ZA VAS</h3>
            <div class="col-md-offset-2 col-md-8 linija" style="background-color: #31708f;height: 2px" ></div>
            <form id="pretrazivanje" method="POST" action="pretraga.php" enctype="multipart/form-data">
            <br />
            <div class="select-boxes" style="text-align: center">
                <script src="../validacija/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
                <script src="../validacija/jquery-validation-1.17.0/dist/additional-methods.min.js"></script>

                <!--Iscitavanje podataka u select -->
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('#brend').bind('change',function(){
                            var brendID = $(this).val();
                            if(brendID){
                                $.ajax({
                                    type:'POST',
                                    url:'ajaxData.php',
                                    data:'id_marka='+brendID,
                                    beforeSend: function(){ jQuery ("#ajaxLoader").show();  },
                                    complete: function(){ jQuery("#ajaxLoader").hide(); },
                                    success:function(html){
                                        $('#visina').html(html);
                                        $('#sirina').html('<option value="">Izaberite visinu prvo:</option>');
                                    }
                                });
                            }else{

                                $('#visina').html('<option value="">Izaberite brend prvo:</option>');
                                $('#sirina').html('<option value="">Izaberite visinu prvo:</option>');
                            }
                        });

                        $('#visina').bind('change',function(){
                            var visinaID = $(this).val();
                            if(visinaID){
                                $.ajax({
                                    type:'POST',
                                    url:'ajaxData.php',
                                    data:'visina='+visinaID,
                                    beforeSend: function(){ jQuery ("#ajaxLoader").show();  },
                                    complete: function(){ jQuery("#ajaxLoader").hide(); },
                                    success:function(html){
                                        $('#sirina').html(html);
                                    }
                                });
                            }else{
                                $('#sirina').html('<option value="">Izaberite visinu prvo:</option>');
                            }
                        });
                    });

                    $( "#pretrazivanje" ).validate({
                        rules: {
                            brend: {
                                required: true
                            },
                            visina: {
                                required: true
                            },
                            sirina: {
                                required: true
                            }

                        }
                        });





                </script>





                <?php
                include('db_config.php');
                global $con;
                $query = $con->query("SELECT id_marka, marka FROM marka ");
                $rowCount = $query->num_rows;
                ?>
                <select name="brend" title="Izaberite brend" id="brend" >
                    <option value="">Izaberite brend:</option>
                    <?php
                    if($rowCount > 0){
                        while($row = $query->fetch_assoc()){
                            echo '<option value="'.$row['id_marka'].'">'.$row['marka'].'</option>';
                        }
                    }
                    ?>
                </select>



                <br />
                <select name="visina" title="Izaberite visinu" id="visina" class="required" onchange="setTextField(this)">
                    <option value="">Izaberite brend prvo:</option>
                </select>

                <input id="visina1" type = "hidden" name = "visina1" value = "" />
                <script type="text/javascript">
                    function setTextField(ddl) {
                        document.getElementById('visina1').value = ddl.options[ddl.selectedIndex].text;
                    }
                </script>

                <br />
                <select name="sirina" id="sirina" title="Izaberite sirinu" onchange="setTextField2(this)">
                    <option value="">Izaberite visinu prvo:</option>
                </select>
                <input id="sirina2" type = "hidden" name = "sirina2" value = "" />
                <script type="text/javascript">
                    function setTextField2(ddl) {
                        document.getElementById('sirina2').value = ddl.options[ddl.selectedIndex].text;
                    }
                </script>

                <div id="ajaxLoader" style="display:none"><img src="ikonice/ajax-loader.gif" alt="loading..."></div>
                <br />

                <div class="highlight">
                    <input type="submit" id="submit" name="submit" value="Pretrazi" class="button">
                </div>
            </div>

            </form>





        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 desno">

            <h3 style="text-align: center;color: white">SLIKE KUPACA</h3>
            <form action="slike-kupaca-provera.php" id="kupci" method="post" enctype="multipart/form-data">
            <div class="col-md-offset-2 col-md-8 linija" style="background-color: #31708f;height: 2px" ></div>
            <br />
            <div class="col-xs-12 col-sm-12 col-md-12 box" style="text-align: center">
                <h4 style="color:white">Podelite sliku vaših poručenih guma sa svima</h4>

                <?php if(isset($_SESSION['email'])) { ?>

                    <div class="select-boxes" style="text-align: center">
                        <select name="id_marka" id="id_marka"  title="Izaberite gumu!">
                            <option value="">Izaberite gumu:</option>
                            <?php
                            $sql = "SELECT * from users where email = '" . $_SESSION['email'] . "'";

                            $run_pro = mysqli_query($con, $sql);


                            while ($row_pro = mysqli_fetch_array($run_pro)) {

                                $id_user = $row_pro['id_user'];

                            }

                            global $con;
                            $get_pro = "SELECT n.*, g.*, m.marka FROM narudzba n
                               JOIN gume g ON n.id_gume = g.id_guma 
                               JOIN marka m ON g.id_guma = m.id_marka WHERE n.id_user = $id_user GROUP BY m.id_marka";

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

                                echo "<option value='$tire_brand'>$tire_brand $sirina $visina $opterecenje $precnik  </option> ";
                            }

                            ?>

                        </select>


                    </div>

                    <textarea placeholder="Opišite proizvod..." title="" rows="4" name="comment" id="comment_text" cols="40" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea>



                  <!--  <label for="gender" style="color:white" class="error">Ocenite koliko ste zadovoljni kupovinom</label>
                    <br />
                    <label for="prezadovoljan">
                        <input  type="radio" id="prezadovoljan" value="m" name="gender" />
                        <label style="color:white " for="prezadovoljan">Prezadovoljan</label>
                    </label>
                    <label for="zadovoljan">
                        <input  type="radio" id="zadovoljan" value="f" name="gender"/>
                        <label style="color:white " for="zadovoljan">Zadovoljan</label>
                    </label>
                    <label for="moze_bolje">
                        <input  type="radio" id="moze_bolje" value="f" name="gender"/>
                        <label style="color:white " for="moze_bolje">Može bolje</label>
                    </label>
                    <label for="Nezadovoljan">
                        <input  type="radio" id="Nezadovoljan" value="f" name="gender"/>
                        <label style="color:white " for="Nezadovoljan">Nezadovoljan</label>
                    </label>-->


                <?php


                    echo "<br /><input type='file'  name='file'    id='file' class=\"inputfile inputfile-1 \"  required  />
                <label for='file'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"17\" viewBox=\"0 0 20 17\"><path d=\"M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z\"/></svg> <span>Izaberite fajl&hellip;</span></label>
                
                
                
                <div class=\"highlight\">
                    <input type=\"submit\" id=\"salji\" name=\"salji\" value=\"Postavi\"  class=\"button\">
                </div>";



                    ?>
                    <script>


                        $.validator.addMethod('filesize', function(value, element, param) {
                            return this.optional(element) || (element.files[0].size <= param)
                        });

                        $( "#kupci" ).validate({
                            rules: {
                                id_marka: {
                                    required: true
                                },
                                comment: {
                                    required: true,
                                    minlength: 20,
                                    maxlength: 255
                                },
                                file: {
                                    required: true,
                                    extension: "png|jpeg|jpg",
                                    filesize: 1048576
                                }

                            }


                        });
                        $.validator.messages.required = 'Polje je obavezno!';
                        $.validator.messages.minlength = 'Polje mora da sadrži najmanje 20 karaktera';
                        $.validator.messages.maxlength = 'Polje može da sadrži najviše 255 karaktera';




                    </script>

                <?php




                } else
                {
                    echo "<p style='color:white;font-size: 14px'>Da biste postavili sliku morate biti ulogovani</p>";
                    echo "<div class=\"highlight\">
                    <a href='login_stranica.php'><input type=\"button\" id=\"login\" name=\"login\" value=\"LOGIN\"  class=\"button\"></a>
                </div>";

                }


                ?>



            </form>






            </div>

        </div>



    </div>
    <br />
    <br />
    <br />



    <br />
<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 text">
    <h2 style="text-align: center">NOVO U PONUDI:</h2>
</div>
<br />
<br />



<!--Prikaz proizvoda-->
<div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 content" >
    <br />
    <div class="images">
        <div class="row">
            <?php index(); ?>
        </div>
        <br />

    </div>

</div>


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