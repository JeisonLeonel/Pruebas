<?php

require_once("../../connections/connection.php");

?>

<?php
    if ((isset($_POST["MM_insert"]))&&($_POST["MM_insert"]=="formreg"))
    {
        $id_documento=  $_POST['id_documento'];
        $it_documento=    $_POST['it_documento'];
        $id_usuario=   $_POST['id_usuario'];
        $nombre_documento=     $_POST['nombre_documento'];
        $fecha=     $_POST['fecha'];
        $tipo_contrato=     $_POST['tipo_contrato'];
        $ubicacion_bloque=     $_POST['ubi_bloque'];

        $validar ="SELECT * FROM documento";
        $queryi=mysqli_query($mysqli,$validar);
        $fila1=mysqli_fetch_assoc($queryi);

        if ($id_documento=="" || $it_documento=="" || $id_usuario=="" || $nombre_documento=="" || $fecha=="" || $tipo_contrato==""|| $ubicacion_bloque=="" )
         {
            echo '<script>alert ("EXISTEN DATOS VACIOS");</script>';
            echo '<script>windows.location="agregar.php"</script>';
         }
 
         else
         {
    $insertsql="INSERT INTO documento(id_documento,it_documento,id_usuario,nombre_documento,fecha,tipo_contrato,ubicacion_bloque) VALUES('$id_documento','$it_documento','$id_usuario','$nombre_documento','$fecha','$tipo_contrato','$ubicacion_bloque')";
            mysqli_query($mysqli,$insertsql);
            echo '<script>alert (" Registro Exitoso, Gracias");</script>';
            echo '<script>window.location="../usuario/index.html"</script>';
         }

    }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar Datos</title>
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../css/diseñoAgregar.css">
</head>
<body>
    <div class="encabezado">
        <img class="logo" src="../img/icono.png">
        <h1 class="titulo">Ingresar los datos del documento</h1>
    </div>
    <div class="agregar-box"> 
    <form method="POST" name="formeg" autocomplete="off">
        <label for="documento">Datos del documento</label>
        <input type="text" name="id_documento" id="num_documento" placeholder="Ingresa id del documento ">

        <input type="text" name="it_documento" id="num_serial" placeholder="Ingrese numero de serie">

        <input type="text" name="id_usuario" id="id_usuario" placeholder="Ingrese id del usuario ">

        <input type="text" name="nombre_documento" id="nombre_documento" placeholder="Ingrese el nombre del documento ">

        <input type="date" name="fecha" id="fecha" placeholder="Ingrese fecha del documento">

        <input type="text" name="tipo_contrato" id="tipo_contrato" placeholder="Ingrese tipo de contrato ">

        <input type="text" name="ubi_bloque" id="ubi_bloque" placeholder="Ingrese ubicacion del bloque">

        <input type="submit" name="submit"value="Enviar datos">
            <input type="hidden" name="MM_insert" value="formreg">
            </form>
        </div>
    <div class="boton-regresar" >
        <button type="submit" class="regresar"><a href="../usuario/index.html">Regresar a menu </a></button>
    </div>

</body>
</html>