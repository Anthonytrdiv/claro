<?php

$mysql_host= 'localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db= 'dbclaro';
$con = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
if(mysqli_connect_errno()){
echo "Error en la conexion" . mysqli_connect_error();
}
?>