<?php


$hostname = "localhost";
$username = "root";
$password = "";
$database = "tecnosoft";


$mysqli = new mysqli($hostname, $username, $password, $database);
if ($mysqli->connect_error) {
    die("Fallo la conexion" . $mysqli_connect_error());
}
?>