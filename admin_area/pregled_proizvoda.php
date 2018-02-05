<html>
<head>
    <title></title>
</head>
<body>

</body>
</html>
<table width="100%" align="center" bgcolor="#AFAFAF" >

    <tr align="center">
        <td colspan="6"><h2 style="color: grey;font-family: 'Bebas Neue Regular'">Pregled svih proizvoda</h2></td>
    </tr>

    <tr align="center" style="background-color: transparent;color: #969696"">
        <th style="text-align: center">ID</th>
        <th style="text-align: center">Marka</th>
        <th style="text-align: center">Slika</th>
        <th style="text-align: center">Cena</th>
        <th style="text-align: center">Izmena</th>
        <th style="text-align: center">Brisanje</th>

    </tr>

    <?php
    include("db_config.php");

    global $con;
    $get_pro = "select g.*,m.* from gume g
    JOIN marka m ON g.id_marka = m.id_marka ";

    $run_pro = mysqli_query($con, $get_pro);

    $i=0;

    while($row_pro = mysqli_fetch_array($run_pro)) {
        $id_gume = $row_pro['id_guma'];
        $marka = $row_pro['marka'];
        $slika = $row_pro['slika'];
        $cena = $row_pro['cena'];
        $i++;





        ?><tr align="center">
            <td style="color: #969696;font-family: 'Bebas Neue Regular'"><?php echo $i; ?></td>
            <td style="color: #969696;font-family: 'Bebas Neue Regular'"><?php echo $marka;?></td>
            <td><img style="background-color: transparent" src="product_images/<?php echo $slika;?>"width="60" height="60"/> </td>
            <td style="color: #969696;font-family: 'Bebas Neue Regular'"><?php echo $cena;?></td>
            <td><a href="index.php?izmena_proizvoda=<?php echo $id_gume; ?>">Izmeni</a></td>
            <td><a href="delete_pro.php?delete_pro=<?php echo $id_gume; ?>">Izbriši</a></td>
        </tr>
    <?php } ?>

</table>


