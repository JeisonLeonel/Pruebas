<?php


$hostname="localhost";
$username="root";
$password="";
$database="empresa_bd";


$mysqli = new mysqli($hostname,$username,$password,$database);

if($mysqli->connect_errno)
{
    die("Fallo la conexion". $mysqli_connect_errno());
}
    

?>