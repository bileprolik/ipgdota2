<html>
<head>
    <title></title>
</head>
<body>

</body>
</html>
<table width="100%" align="center" bgcolor="#AFAFAF" >

    <tr align="center">
        <td colspan="8"><h2 style="color: grey;font-family: 'Bebas Neue Regular'">Pregled galerije</h2></td>
    </tr>

    <tr align="center" style="background-color: transparent;color: #969696"">
    <th style="text-align: center">ID</th>
    <th style="text-align: center;font-family: 'Bebas Neue Regular'">Marka</th>
    <th style="text-align: center;font-family: 'Bebas Neue Regular'">Slika</th>
    <th style="text-align: center;font-family: 'Bebas Neue Regular'">Opis</th>
    <th style="text-align: center;font-family: 'Bebas Neue Regular'">Postavio</th>
    <th style="text-align: center;font-family: 'Bebas Neue Regular'">Status</th>
    <th style="text-align: center;font-family: 'Bebas Neue Regular'">Promena Statusa</th>
    <th style="text-align: center;font-family: 'Bebas Neue Regular'">Datum</th>

    </tr>


    <?php
    include("db_config.php");

    global $con;

    $sql = "SELECT * from users";

    $run_pro = mysqli_query($con, $sql);


    while ($row_pro = mysqli_fetch_array($run_pro)) {

        $id_user = $row_pro['first_name'];

    }

    global $con;
    $get_pro = "SELECT  g.*,gg.*,m.*,u.* FROM galerija g 
     JOIN gume gg ON g.id_guma = gg.id_guma 
     JOIN marka m ON gg.id_marka = m.id_marka
     JOIN users u ON g.id_user = u.id_user ";

    $run_pro = mysqli_query($con, $get_pro);

    $i=0;

    while($row_pro = mysqli_fetch_array($run_pro)) {
        $id_slike = $row_pro['id_slika'];
        $id_gume = $row_pro['id_guma'];
        $visina = $row_pro['visina'];
        $sirina = $row_pro['sirina'];
        $opterecenje = $row_pro['opterecenje'];
        $precnik = $row_pro['precnik'];
        $indeks_brzine = $row_pro['indeks_brzine'];
        $marka = $row_pro['marka'];
        $slika = $row_pro['slike'];
        $opis = $row_pro['opis'];
        $user = $row_pro['first_name'];

        $datum = $row_pro['Datum'];
        $status = $row_pro['status_slike'];
        $i++;


        ?>

        <tr align="center">
            <td style="color: #969696;font-family: 'Bebas Neue Regular'"><?php echo $i; ?></td>
            <td style="color: #969696;font-family: 'Bebas Neue Regular'"><?php echo $marka.' '.$visina.' '.$sirina.' '.$opterecenje.' '.$precnik.' '.$indeks_brzine?></td>
            <td><img style="background-color: transparent" src="customer_images/<?php echo $slika;?>"width="60" height="60"/> </td>
            <td style="color: #969696;font-family: 'Bebas Neue Regular';max-width: 300px"><?php echo $opis;?></td>
            <td style="color: #969696;font-family: 'Bebas Neue Regular'"><?php echo $user;?></td>
            <td style="color: #969696;font-family: 'Bebas Neue Regular'">
                <?php if($status == 0)
                {
                    echo "Ceka se odobrenje";
                }else
                {
                    echo "Odobreno";
                }
                ?>
            </td>

            <td><a href="index.php?izmena_slike=<?php echo $id_slike; ?>">Izmeni</a></td>
            <td style="color: #969696;font-family: 'Bebas Neue Regular'"><?php echo $datum;?></td>
            <!--<td><a href="index.php?izmena_proizvoda=<?php /*echo $id_gume; */?>">Izmeni</a></td>
        <td><a href="delete_pro.php?delete_pro=<?php /*echo $id_gume; */?>">Izbriši</a></td>-->
        </tr>




    <?php  } ?>


</table>
