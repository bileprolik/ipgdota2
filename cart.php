<?php
session_start();
include ("db_config.php");
include ("function/functions.php");
global $total_sum;



?>
<html>
<head>
    <?php include 'css/css.html'; ?>
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

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';

    }

    elseif (isset($_POST['register'])) { //user registering

        require 'register.php';

    }
}
?>
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
<br />




<div class="col-md-offset-2 col-md-8">

    <?php

    cart();
    ?>

    <br />

    <form name="tablecart" method="post" enctype="multipart/form-data" action="">
        <table align="center" width="100%" bgcolor="#ffffff" style="text-align: center; margin: auto;  ">
            <tr>
                <td colspan="5"><h2 style="color: #31708f;font-family: 'Bebas Neue Regular'">Vaša korpa</h2><hr width="100%"></td>

            </tr>

            <tr>
                <th style="font-family: 'Bebas Neue Regular';color: #858585">Ukloni<hr></th>
                <th style="text-align: center;font-family: 'Bebas Neue Regular';color: #858585"> Proizvodi<hr></th>
                <th style="text-align: center;font-family: 'Bebas Neue Regular';color: #858585"> Količina<hr></th>
                <th colspan="2" style="text-align: center;font-family: 'Bebas Neue Regular';color: #858585">Cena<hr width="100%"></th>


            </tr>
            <?php

            $total = 0;

            global $con;

            $sql = "SELECT * from users where email = '".$_SESSION['email'] ."'";

            $run_pro = mysqli_query($con, $sql);


            while ($row_pro = mysqli_fetch_array($run_pro)) {

                $id_user = $row_pro['id_user'];

            }

            $sel_price = "select * from cart where id_user='$id_user'";

            $run_price = mysqli_query($con, $sel_price);

            while($p_price=mysqli_fetch_array($run_price)){

                $id_cart = $p_price['id_cart'];

                $id_guma = $p_price['g_id'];

                $qty = $p_price['qty'];

                $total_qty = array($p_price['qty']);


                $values_qty = array_sum($total_qty);



                $pro_price = "select * from gume g JOIN marka m ON g.id_marka = m.id_marka where id_guma='$id_guma'";

                $run_pro_price = mysqli_query($con,$pro_price);

                while ($pp_price = mysqli_fetch_array($run_pro_price)){

                    $product_brand = $pp_price['marka'];

                    $product_sirina = $pp_price['sirina'];

                    $product_precnik = $pp_price['precnik'];

                    $product_indeks_brzine = $pp_price['indeks_brzine'];

                    $product_opterecenje = $pp_price['opterecenje'];

                    $product_visina = $pp_price['visina'];

                    $product_price = array($pp_price['cena']);

                    $product_title = $pp_price['id_marka'];

                    $product_image = $pp_price['slika'];

                    $single_price = $pp_price['cena'];

                    $values = array_sum($product_price);




                    $total += $values*$qty;

                    ?>


                    <?php if(isset($_SESSION['email'])){

                        $total_sum = $single_price * $values_qty;

                        ?>
                        <tr align="center">

                            <td><input type="checkbox" name="remove[]" value="<?php echo $id_guma;  ?>"/>
                            <div id="open"></div>
                            <td style="font-family: 'Bebas Neue Regular';color: #858585;text-align: center"><?php echo "$product_brand $product_sirina $product_visina $product_precnik $product_opterecenje $product_indeks_brzine" ?><br><img src="product_images/<?php echo $product_image; ?>" width="80" height="80" </td>
                            <td colspan="1" style="font-family: 'Bebas Neue Regular';color: #858585;text-align: center;max-width: 50px">
                                <input type='number' size='' pattern='[0-9]*' name="qty" inputmode='numeric' class='form-control input-lg text-center place-order-input ' value='<?php echo $qty ?>' min='1' max='99' id='qty'  style='width: 100%'>
                            <div  id="row_dim" style="display: none;background-color: #1d93d1">
                                <input type="submit"  value="Ažuriraj količinu" name="azuriraj_kolicinu" id="azuriraj_kolicinu" style="color:white">

                            </div>
                            </td>

                            <td colspan="2" style="font-family: 'Bebas Neue Regular';color: #858585;text-align: center"><?php echo $total_sum . "&nbsp RSD"  ?></td>

                        </tr>
                    <?php } ?>
                <?php }  } ?>

            <?php

           /* function update()
            {
                global $id_user,$con;
                if (isset($_POST['azuriraj_kolicinu'])) {

                    foreach ($_POST['remove'] as $id_gumice) {

                        $delete_product = "delete from cart where g_id='3' AND id_user='$id_user'";

                        $run_delete = mysqli_query($con, $delete_product);

                        if($run_delete){

                            echo "<script>window.open('cart.php','_self')</script>";

                        }

                    }
                }
            }*/


            ?>



            <script>
                $("#qty").on("change", function() {
                    $('#row_dim').show();
                    var qty = $(this).val();
                    $(document).ready(function() {
                        $("#azuriraj_kolicinu").click(function () {

                            $.ajax({
                                url: 'qty.php',
                                type: 'GET',
                                data: { qty: qty },
                                success: function(data) {
                                    window.location.href='cart.php';
                                    $('#result').html(data)
                                }
                            });

                        });
                    })
                });

            </script>



            <?php if(isset($_SESSION['email'])){
                

                ?>
                <tr align="right">
                    <td colspan="4" style="text-align: center;font-family: 'Bebas Neue Regular';color: #858585"><b>Ukupno: <?php echo $total  ."&nbsp RSD";   ?><hr width="100%"></b></td>
                </tr>
            <?php } ?>
            <tr align="center">
                <td colspan="2" style=";color: #858585"><button class="btn-success" type="submit" name="update_cart" style="background-color: #31708f;border: 3px solid #31708f" "/>Potvrdi</button></td>
                <td style=";color: #858585"><button class="btn-success" type="submit" name="continue" style="background-color: #31708f;border: 3px solid #31708f"  />Nastavi </td>
                <td style=";color: #858585"><button class="btn-success" name="poruci" style="background-color: #31708f;border: 3px solid #31708f"><a href="checkout.php">Poruči</a></button></td>
            </tr>
        </table>
    </form>
    <?php

    function updatecart(){

        global $con;

        $sql = "SELECT * from users where email = '".$_SESSION['email'] ."'";

        $run_pro = mysqli_query($con, $sql);


        while ($row_pro = mysqli_fetch_array($run_pro)) {

            $id_user = $row_pro['id_user'];

        };

        if(isset($_POST['update_cart'])){

            foreach($_POST['remove'] as $remove_id){

                $delete_product = "delete from cart where g_id='$remove_id' AND id_user='$id_user'";

                $run_delete = mysqli_query($con, $delete_product);

                if($run_delete){

                    echo "<script>window.open('cart.php','_self')</script>";

                }

            }

        }
        if(isset($_POST['continue'])){

            echo "<script>window.open('gume.php','_self')</script>";

        }


    }
    echo @$up_cart = updatecart();


    ?>

</div>
<br />




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




</body>
</html>
<!--
<a class="navbar-brand" style="background-color: rgba(255,69,0,0.75);color: white;float: right"><span><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>ŠKOLSKI PROJEKAT</a>-->