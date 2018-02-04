
<table width="795" align="center" bgcolor="pink">


    <tr align="center">
        <td colspan="6"><h2 style="font-family: 'Bebas Neue Regular';color:grey;">Pregled svih marki</h2></td>
    </tr>

    <tr align="center" style="font-family: 'Bebas Neue Regular'" ">
        <th style="color: #969696">Category ID<hr style="border: 1px solid green;"></th>
        <th style="color: #969696">Category Title<hr style="border: 1px solid green;"></th>
        <th style="color: #969696">Edit<hr style="border: 1px solid green;"></th>
        <th style="color: #969696">Delete<hr style="border: 1px solid green;"></th>
    </tr>
    <?php
    include("db_config.php");

    $get_cat = "select * from marka";

    $run_cat = mysqli_query($con, $get_cat);

    $i = 0;

    while ($row_cat=mysqli_fetch_array($run_cat)){

        $id_marka = $row_cat['id_marka'];
        $marka = $row_cat['marka'];
        $i++;

        ?>
        <tr align="left">
            <td style="color: #969696"><?php echo $i;?></td>
            <td style="color: #969696"><?php echo $marka;?></td>
            <td style="color: #969696"><a href="index.php?edit_cat=<?php echo $id_marka; ?>">Izmeni</a></td>
            <td style="color: #969696"><a href="delete_cat.php?delete_cat=<?php echo $id_marka;?>">Izbrisi</a></td>

        </tr>
    <?php } ?>




</table>