<?php

error_reporting(E_ALL ^ E_NOTICE);
require_once('../config/conexion.php');
$usuario = $_POST['txtuser'];
$password = $_POST['txtpass'];

$sqlogin = mysqli_query($con,"select * from usuario where CODIGO='".$usuario."'");

while($row = mysqli_fetch_row($sqlogin)){
    if($row[6]==$password){
        
        header("Location: ../views/admin.php");
    }else{
        echo "no";
        header("Location: ../index.php");
    }

}

?>