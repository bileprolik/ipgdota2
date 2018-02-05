<?php
include_once("db_config.php");

$code = $_POST['code'];
$used_email = $_POST['used_email'];
$sql = $con -> query ("SELECT * FROM popust WHERE used_email='$used_email' ");

if(mysqli_num_rows($sql)>0){
    echo "insert_err";
}
else{
    $sql2 = $con -> query("INSERT INTO popust(code,used_email) VALUES('$code','$used_email')");

if($sql2){
     echo "insert_ok";
}else{
    echo "insert_err"; 
}

}

?>