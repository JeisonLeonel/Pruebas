<?php

require_once("../../connections/connection.php");

?>

<?php
    if ((isset($_POST["MM_insert"]))&&($_POST["MM_insert"]=="formreg"))
    {
        $it_documento=  $_POST['it_documento'];

        $validar ="SELECT * FROM informacion_documento";
        $queryi=mysqli_query($mysqli,$validar);
        $fila1=mysqli_fetch_assoc($queryi);

        if ($fila1) 
         {
        $insertsql="DELETE FROM informacion_documento WHERE it_documento = '$it_documento' ";
            mysqli_query($mysqli,$insertsql);
            echo '<script>alert (" Datos eliminados correctamente");</script>';
            echo '<script>window.location="../plantillas/eliminarInf.php"</script>';
         }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Datos</title>
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../css/diseñoElimina.css">
</head>
<body>
    <div class="encabezado">
        <img class="logo" src="../img/icono.png">
        <h1 class="titulo">Eliminar datos </h1>
    </div>
    <div class="agregar-box"> 
    <form method="POST" name="formeg" autocomplete="off">
        <label>Eliminar informacion con el It del documento</label>
        <input type="text" name="it_documento"  placeholder="Eliminar informacion del documento ">

        <input type="submit" name="submit"value="Eliminar informacion">
            <input type="hidden" name="MM_insert" value="formreg">

            <button type="submit" class="regresar"><a href="../administrador/index.html">Regresar a menu</a></button>

    </form>
</body>
</html>