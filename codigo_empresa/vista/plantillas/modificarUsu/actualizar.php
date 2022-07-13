<?php

require_once("../../../connections/connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Datos</title>
    <link rel="icon" href="../../../img/icono.png">
    <link rel="stylesheet" href="../../css/diseñoActualiza.css">
</head>
<body>
    <div class="encabezado">
        <img class="logo" src="../../img/icono.png">
        <h1 class="titulo">Actualizacion de los datos</h1>
    </div>


    <div class="contenido">
           
        <form class="tabla" method="POST" action="cambiar.php">
        <label>Actualización de datos</label>
            <p>Id del registro a actualizar:
            <input type="text" name="id_documento" size="20" placeholder="Ingresar Id para actualizar">

            <input type="submit" value="Iniciar actualización" name="B1">
    
        </form>
        <br>
        <br>
        <div class="boton-regresar" >
        <button type="submit" class="regresar"><a href="../../usuario/index.html">Regresar a inicio </a></button>
    </div>
    </div>

</body>

</html>

