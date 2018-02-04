<?php
session_start();
include 'db_config.php';
include 'function/functions.php';
global $con;

?>

<?php

if(isset($_POST['poruci']) ) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $city_number = $_POST['city_number'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $notes = $_POST['notes'];
    $phone = $_POST['phone_number'];



    if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['city']) && isset($_POST['address'])  && is_numeric($_POST['city_number']) && filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL) && is_numeric($phone)) {


        $sql = "SELECT * from users where email = '" . $_SESSION['email'] . "'";

        $run_pro = mysqli_query($con, $sql);


        while ($row_pro = mysqli_fetch_array($run_pro)) {

            $id_user = $row_pro['id_user'];

        }





        $check_pro = "select * from cart where id_user='$id_user' ";


        $run = mysqli_query($con, $check_pro);


        while ($row = mysqli_fetch_array($run)) {
            $id_guma = $row['g_id'];

            $qtys = $row['qty'];

            $total_qty = array($row['qty']);


            $values_qty = array_sum($total_qty);


            $pro_price = "select * from gume g JOIN marka m ON g.id_marka = m.id_marka where id_guma='$id_guma'";

            $run_pro_price = mysqli_query($con, $pro_price);

            while ($pp_price = mysqli_fetch_array($run_pro_price)) {


                $tire_brand = $pp_price ['marka'];

                $product_price = array($pp_price['cena']);


                $single_price = $pp_price['cena'];

                $values = array_sum($product_price);


                $total_sum = $single_price * $values_qty;


                $insert_product = "INSERT INTO narudzba (id_gume,id_user,kolicina,cena,Ime,prezime,adresa,email,br_mob,grad,postanski_broj,napomena,datum)
VALUES ($id_guma,$id_user,$qtys,$single_price,'$first_name','$last_name','$address','$email','$phone','$city','$city_number','$notes',NOW())";

               (mysqli_query($con,$insert_product) or die(mysqli_error($con)));

            }


        }
        $get_pro = "SELECT  c.*, g.*, m.* from cart c
                JOIN gume g ON c.g_id = g.id_guma
                JOIN marka m ON g.id_marka = m.id_marka WHERE c.id_user = $id_user ";


        $run_data = mysqli_query($con, $get_pro);

        while ($row_data = mysqli_fetch_array($run_data)) {
            $visina = $row_data['visina'];
            $sirina = $row_data['sirina'];
            $marka = $row_data['marka'];
            $opterecenje = $row_data['opterecenje'];
            $precnik = $row_data['precnik'];
            $cena = $row_data['cena'];
            $indeks_brzine = $row_data ['indeks_brzine'];
            $qty = $row_data['qty'];


            $_SESSION['active'] = 0;
            $_SESSION['logged_in'] = true;
            global $visina, $sirina, $marka, $cena, $opterecenje, $precnik, $qty;


            $to = $email;
            $subject = 'Prodaja Guma - Narudzba ';
            $message_body = '
            
            Sajt Internet Prodaja Guma Vam se zahvaljuje na poverenju
            
            Poručili ste: ' .$marka .' ' . $sirina . ' '. $visina . ' ' . $opterecenje . ' ' . $precnik . ' ' . $indeks_brzine . ' 
             
            Kolicina : '.$qty.'
            
            Ukupna cena : '.$cena*$qty.'
            
            
            
            
             ';


            mail($to, $subject, $message_body);





        }

        ?>



        <html>
        <head>
            <title></title>
            <script src="js/sweetalert.min.js"></script>

        </head>
        </html>
<?php

        if($get_pro)
        {
            echo "<script>swal('Uspešno ste poručili proizvod')</script>";

            echo "<script>window.open('narudzba.php','_self')</script>";
        }

        $delete = "DELETE FROM cart WHERE id_user = $id_user";

        mysqli_query($con,$delete);



    }

}





