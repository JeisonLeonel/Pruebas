<?php

require_once("../../connections/connection.php");

?>

<?php
    if ((isset($_POST["MM_insert"]))&&($_POST["MM_insert"]=="formreg"))
    {
        $it_documento=    $_POST['it_documento'];
        $nombre_documento=     $_POST['nombre_documento'];
        $nombre_empresa=     $_POST['nombre_empresa'];
        $fecha=     $_POST['fecha'];
        

        $validar ="SELECT * FROM informacion_documento";
        $queryi=mysqli_query($mysqli,$validar);
        $fila1=mysqli_fetch_assoc($queryi);

        if ($it_documento=="" || $nombre_documento=="" || $nombre_empresa==""||$fecha=="" )
         {
            echo '<script>alert ("EXISTEN DATOS VACIOS");</script>';
            echo '<script>windows.location="agregarInf.php"</script>';
         }
 
         else
         {
    $insertsql="INSERT INTO informacion_documento(it_documento,nombre_documento,nombre_empresa,fecha) VALUES($it_documento','$nombre_documento','$nombre_empresa','$fecha')";
            mysqli_query($mysqli,$insertsql);
            echo '<script>alert (" Registro Exitoso, Gracias");</script>';
            echo '<script>window.location="agregarInf.php"</script>';
         }

    }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar Datos</title>
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../css/diseñoAgregarInf.css">
</head>
<body>
    <div class="encabezado">
        <img class="logo" src="../img/icono.png">
        <h1 class="titulo">Ingresar informacion del documento</h1>
    </div>
    <div class="agregar-box"> 
    <form method="POST" name="formeg" autocomplete="off">
        <label for="documento">Informacion del documento</label>

        <input type="text" name="it_documento" id="num_serial" placeholder="Ingrese numero de serie">

        <input type="text" name="nombre_documento" id="nombre_documento" placeholder="Ingrese el nombre del documento ">

        <input type="text" name="nombre_empresa" id="nombre_empresa" placeholder="Ingrese nombre de la empresa ">

        <input type="date" name="fecha" id="fecha" placeholder="Ingrese fecha del documento">

        <input type="submit" name="submit"value="Enviar datos">
            <input type="hidden" name="MM_insert" value="formreg">
            </form>
        </div>
    <div class="boton-regresar" >
        <button type="submit" class="regresar"><a href="../administrador/index.html">Regresar a menu </a></button>
    </div>

</body>
</html>