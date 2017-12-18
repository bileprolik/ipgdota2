<<<<<<< HEAD
<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ipgdota2';
//Creating config file
$con= mysqli_connect($host,$username,$password,$database);


if(mysqli_connect_errno())
{
    echo "Failed to connect to mysql: ". mysqli_connect_error();
}

=======
<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ipgdota2';
//Creating config file
$con= mysqli_connect($host,$username,$password,$database);


if(mysqli_connect_errno())
{
    echo "Failed to connect to mysql: ". mysqli_connect_error();
}

>>>>>>> d66c8591190033519438a91e2bc100c274aba297
?>