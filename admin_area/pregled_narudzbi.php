<html>
<head>
    <title></title>
</head>
<body>

</body>
</html>
<table width="795" align="center" bgcolor="#AFAFAF" >

    <tr align="center">
        <td colspan="7"><h2 style="color: grey;font-family: 'Bebas Neue Regular'">Pregled svih narudzbi</h2></td>
    </tr>

    <tr align="center" style="background-color: transparent;color: #969696"">
    <th style="text-align: center">ID</th>
    <th style="text-align: center;font-family: 'Bebas Neue Regular'">Marka</th>
    <th style="text-align: center;font-family: 'Bebas Neue Regular'">Slika</th>
    <th style="text-align: center;font-family: 'Bebas Neue Regular'">Količina</th>
    <th style="text-align: center;font-family: 'Bebas Neue Regular'">Cena</th>
    <th style="text-align: center;font-family: 'Bebas Neue Regular'">Ukupna cena</th>
    <th style="text-align: center;font-family: 'Bebas Neue Regular'">Adresa isporuke</th>
    <th style="text-align: center;font-family: 'Bebas Neue Regular'">Datum</th>
    </tr>


    <?php
    include("db_config.php");

    global $con;
    $get_pro = "SELECT  g.*, m.*, n.* from narudzba n 
                JOIN gume g ON n.id_gume = g.id_guma
                JOIN marka m ON g.id_guma = m.id_marka";

    $run_pro = mysqli_query($con, $get_pro);

    $i=0;

    while($row_pro = mysqli_fetch_array($run_pro)) {
        $id_gume = $row_pro['id_guma'];
        $visina = $row_pro['visina'];
        $sirina = $row_pro['sirina'];
        $opterecenje = $row_pro['opterecenje'];
        $precnik = $row_pro['precnik'];
        $indeks_brzine = $row_pro['indeks_brzine'];
        $marka = $row_pro['marka'];
        $slika = $row_pro['slika'];
        $cena = $row_pro['cena'];
        $kolicina = $row_pro['kolicina'];
        $ime = $row_pro['Ime'];
        $prezime = $row_pro['prezime'];
        $adresa = $row_pro['adresa'];
        $email = $row_pro['email'];
        $grad = $row_pro['grad'];
        $postanski_broj = $row_pro['postanski_broj'];
        $napomena = $row_pro['napomena'];
        $datum = $row_pro['Datum'];
        $i++;









        ?>
        <br />
        <tr align="center">
        <td style="color: #969696;font-family: 'Bebas Neue Regular'"><?php echo $i; ?></td>
        <td style="color: #969696;font-family: 'Bebas Neue Regular'"><?php echo $marka.' '.$visina.' '.$sirina.' '.$opterecenje.' '.$precnik.' '.$indeks_brzine?></td>
        <td><img style="background-color: transparent" src="product_images/<?php echo $slika;?>"width="60" height="60"/> </td>
        <td style="color: #969696;font-family: 'Bebas Neue Regular'"><?php echo $kolicina;?></td>
        <td style="color: #969696;font-family: 'Bebas Neue Regular'"><?php echo $cena;?></td>
        <td style="color: #969696;font-family: 'Bebas Neue Regular'"><?php echo $cena*$kolicina;?></td>
        <td style="color: #969696;font-family: 'Bebas Neue Regular'">Ime i prezime: <?php echo $ime.'     '.$prezime ?> <br /> E-mail: <?php echo $email ?> <br /> Grad : <?php echo $grad ?>
            <br /> Postanski broj: <?php echo $postanski_broj ?> <br /> Adresa: <?php echo $adresa ?><hr></td>
            <td style="color: #969696;font-family: 'Bebas Neue Regular'"><?php echo $datum;?></td>
        <!--<td><a href="index.php?izmena_proizvoda=<?php /*echo $id_gume; */?>">Izmeni</a></td>
        <td><a href="delete_pro.php?delete_pro=<?php /*echo $id_gume; */?>">Izbriši</a></td>-->
        </tr>




    <?php  } ?>


</table>
