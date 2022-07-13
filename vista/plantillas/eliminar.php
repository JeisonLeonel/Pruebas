<?php

require_once("../../connections/connection.php");

?>

<?php
    if ((isset($_POST["MM_insert"]))&&($_POST["MM_insert"]=="formreg"))
    {
        $id_documento=  $_POST['id_documento'];

        $validar ="SELECT * FROM documento";
        $queryi=mysqli_query($mysqli,$validar);
        $fila1=mysqli_fetch_assoc($queryi);

        if ($fila1) 
         {
        $insertsql="DELETE FROM documento WHERE id_documento = '$id_documento' ";
            mysqli_query($mysqli,$insertsql);
            echo '<script>alert (" Datos eliminados correctamente");</script>';
            echo '<script>window.location="../plantillas/eliminar.php"</script>';
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
        <label>Eliminar datos con el Id del documento</label>
        <input type="text" name="id_documento" id="num_documento" placeholder="Eliminar id del documento ">

        <input type="submit" name="submit"value="Eliminar datos">
            <input type="hidden" name="MM_insert" value="formreg">

            <button type="submit" class="regresar"><a href="../usuario/index.html">Regresar a menu</a></button>

    </form>
</body>
</html>