<?php
include"db_config.php";
$visina="";
$sirina="";
$precnik="";
$eprice="";
$visina = isset($_REQUEST['visina'])?$_REQUEST['visina']:"";
$sirina = isset($_REQUEST['sirina'])?$_REQUEST['sirina']:"";
$precnik = isset($_REQUEST['precnik'])?$_REQUEST['precnik']:"";
$sprice = isset($_REQUEST['sprice'])?$_REQUEST['sprice']:"";
$eprice = isset($_REQUEST['eprice'])?$_REQUEST['eprice']:"";

$query = "select * from gume g JOIN marka m ON g.id_marka = m.id_marka where status = '1'";

//filter query start
if(!empty($visina)){
    $visinadata =implode("','",$visina);
    $query  .= " and visina in('$visinadata')";
}

if(!empty($sirina)){
    $sirinadata =implode("','",$sirina);
    $query  .= " and sirina in('$sirinadata')";
}

if(!empty($precnik)){
    $precnikdata =implode("','",$precnik);
    $query  .= " and precnik in('$precnikdata')";
}

if(!empty($sprice) && !empty($eprice)){
    $query  .= " and cena >='$sprice' and cena <='$eprice'";
}

$rs = mysqli_query($con,$query) or die("Error : ".mysqli_error());

while($product_data = mysqli_fetch_array($rs)){
    $id_guma = $product_data ['id_guma'];
    $tire_brand = $product_data ['marka'];
    ?>
    <div class="col-sm-4 col-lg-4 col-md-4" >
        <div class="thumbnail">
            <p style="text-align: center;font-size: 24px;padding: 10px;background-color: #31708f;color:white"> <?php echo $tire_brand ?></p>
            <img src="product_images/<?php echo $product_data['slika']; ?>" alt="">
            <div class="caption">

                <!--<p><strong><a href="#"><?php /*echo $product_data['product_name']; */?></a>
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