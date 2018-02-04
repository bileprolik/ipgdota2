<?php
session_start();
include_once("function/functions.php");
include_once("db_config.php");
?>
<html>
<head>
    <title>Internet Prodaja Guma</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
          rel = "stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">


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
                                        <?php
                                        getTigar();
                                        getCordiant();
                                        getStarfire();
                                        getMichelin();
                                        getGoodyear();
                                        getSava();
                                        getNokian();
                                        ?>
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
                        <li style='color:white; font-size:14px'><a href='logout1.php'>Logout</a> </li>
                       
                       
                        
                        
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
<br />



<div class="col-md-offset-1 col-md-10 linija" style="background-color: #31708f;height: 2px" >
</div>
<div class="col-md-12 col-lg-12 text">
    <h2 style="text-align: center">SVI PROIZVODI</h2>

</div>
<div class="container" style="padding-top:2%;" >
    <div class="row">
        <div class="col-md-offset-1 col-md-2">
            <p class="lead">Filter</p>
            <div class="list-group">
                <h3>Cena</h3>
                <input type="hidden" class="price1" value="100" >
                <input type="hidden" class="price2" value="12000"  >
                <p id="priceshow"></p>
                <div id="slider-range" style=""></div>
            </div>
            <div class="list-group">
                <h3>Visina</h3>
                <?php
                $query = "select distinct visina from gume where status = '1'";
                $rs = mysqli_query($con,$query) or die("Error : ".mysqli_error());
                while($visina_data = mysqli_fetch_array($rs)){
                    ?>
                    <a href="javascript:void(0);" class="list-group-item">
                        <input type="checkbox" class="item_filter visina" value="<?php echo $visina_data['visina']; ?>"  >
                        &nbsp;&nbsp; <?php echo $visina_data['visina']; ?></a>
                <?php } ?>
            </div>
            <div class="list-group">
                <h3>Sirina</h3>
                <?php
                $query = "select distinct sirina from gume where status = '1'";
                $rs = mysqli_query($con,$query) or die("Error : ".mysqli_error());
                while($sirina_data = mysqli_fetch_array($rs)){
                    ?>
                    <a href="javascript:void(0);" class="list-group-item">
                        <input type="checkbox" class="item_filter sirina" value="<?php echo $sirina_data['sirina']; ?>" >
                        &nbsp;&nbsp; <?php echo $sirina_data['sirina']; ?></a>
                <?php } ?>
            </div>
            <div class="list-group">
                <h3>Precnik</h3>
                <?php
                $query = "select distinct precnik from gume where status = '1'";
                $rs = mysqli_query($con,$query) or die("Error : ".mysqli_error());
                while($precnik_data = mysqli_fetch_array($rs)){
                    ?>
                    <a href="javascript:void(0);" class="list-group-item">
                        <input type="checkbox" class="item_filter precnik" value="<?php echo $precnik_data['precnik']; ?>"  >
                        &nbsp;&nbsp; <?php echo $precnik_data['precnik']; ?></a>
                <?php } ?>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row product-data"  >
                <?php

                $query = "select *,  m.marka from gume g JOIN marka m ON g.id_marka = m.id_marka where status = '1'";

                $rs = mysqli_query($con,$query) or die("Error : ".mysqli_error());

                while($product_data = mysqli_fetch_array($rs)){
                    $id_guma = $product_data ['id_guma'];
                    $tire_brand = $product_data ['marka'];
                    ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <p style="text-align: center;font-size: 24px;padding: 10px;background-color: #31708f;color:white"> <?php echo $tire_brand ?></p>
                            <img src="product_images/<?php echo $product_data['slika']; ?>" alt="">
                            <div class="caption">

                               <!-- <p><strong><a href="#"><?php /*echo $product_data['product_name']; */?></a>
                                        </strong></p>-->
                                <h4 style="text-align:center;" ><?php echo $product_data['cena']; ?> RSD</h4>
                                <hr>
                                <p style="text-align: center"><b>Visina : </b><?php echo $product_data['visina']; ?></p><hr><p style="text-align: center"><b>Sirina :</b> <?php echo $product_data['sirina']; ?> </p><hr>

                                <p style="text-align: center"><b>Precnik :</b> <?php echo $product_data['precnik']; ?> </p><hr><!--<p style="text-align: center"><b>Indeks brzine :</b> <?php /*echo $product_data['indeks_brzine']; */?> </p>-->

                                <a href='details.php?id_guma=<?php echo $id_guma     ?>'><button class='btn btn-primary btn-responsive' style='background-color:green;margin: auto;display: block; width: 150px;height: 40px; color: white;'>Detaljnije...</button></a>

                            </div>
                        </div>
                    </div>
                <?php  } ?>

            </div>

        </div>

    </div>

</div>
<!-- /.container -->

<div class="container">

    <hr>

    <!-- Footer -->


</div>
<!-- /.container -->

<!-- jQuery -->

<style>
    #loaderpro{text-align:center; background: url('loader.gif') no-repeat center; height: 150px;}
</style>
<script>
    var visina,sirina,precnik;
    $(function(){
        $('.item_filter').click(function(){
            $('.product-data').html('<div id="loaderpro" style="" ></div>');

            visina = multiple_values('visina');
            sirina  = multiple_values('sirina');
            precnik   = multiple_values('precnik');

            $.ajax({
                url:"ajax.php",
                type:'post',
                data:{visina:visina,sirina:sirina,precnik:precnik,sprice:$(".price1" ).val(),eprice:$( ".price2" ).val()},
                success:function(result){
                    $('.product-data').html(result);
                }
            });
        });

    });


    function multiple_values(inputclass){
        var val = new Array();
        $("."+inputclass+":checked").each(function() {
            val.push($(this).val());
        });
        return val;
    }


    $(function() {
        $( "#slider-range" ).slider({
            range: true,
            min: 100,
            max: 12000,
            values: [ 100, 12000 ],
            slide: function( event, ui ) {
                $( "#priceshow" ).html(  ui.values[ 0 ] + " RSD - " + ui.values[ 1 ] + " RSD " );
                $( ".price1" ).val(ui.values[ 0 ]);
                $( ".price2" ).val(ui.values[ 1 ]);
                $('.product-data').html('<div id="loaderpro" style="" ></div>');
                visina = multiple_values('visina');
                sirina  = multiple_values('sirina');
                precnik   = multiple_values('precnik');
                $.ajax({
                    url:"ajax.php",
                    type:'post',
                    data:{visina:visina,sirina:sirina,precnik:precnik,sprice:ui.values[ 0 ],eprice:ui.values[ 1 ]},
                    success:function(result){
                        $('.product-data').html(result);
                    }
                });
            }
        });

        $( "#priceshow" ).html($( "#slider-range" ).slider( "values", 0 ) +
            " RSD - " + $( "#slider-range" ).slider( "values", 1 ) + " RSD " );
    });

</script>




<!--Prikaz proizvoda-->

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
<!--
<a class="navbar-brand" style="background-color: rgba(255,69,0,0.75);color: white;float: right"><span><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>ŠKOLSKI PROJEKAT</a>-->
