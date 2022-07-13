<?php

require_once("../../connections/connection.php");

?>
<?php
    $control = "SELECT  * From tipo_usuario";
    $queryi = mysqli_query($mysqli, $control);
    $fila = mysqli_fetch_assoc($queryi);
?>  

<?php
    if ((isset($_POST["MM_insert"]))&&($_POST["MM_insert"]=="formreg"))
    {
        $id_usuario=  $_POST['id_usuario'];
        $nombre=    $_POST['nombre'];
        $documento=   $_POST['documento'];
        $password=     $_POST['password'];
        $ocupacion=     $_POST['ocupacion'];
        $id_tipo_usuario=     $_POST['id_tipo_usuario'];

        $validar ="SELECT * FROM documento";
        $queryi=mysqli_query($mysqli,$validar);
        $fila1=mysqli_fetch_assoc($queryi);

        if ($id_usuario=="" || $nombre=="" || $documento=="" || $password=="" || $ocupacion=="" || $id_tipo_usuario=="" )
         {
            echo '<script>alert ("EXISTEN DATOS VACIOS");</script>';
            echo '<script>windows.location="agregarUsu.php"</script>';
         }
 
         else
         {
    $insertsql="INSERT INTO usuario(id_usuario,nombre,documento,password,ocupacion,id_tipo_usuario) VALUES('$id_usuario','$nombre','$documento','$password','$ocupacion','$id_tipo_usuario')";
            mysqli_query($mysqli,$insertsql);
            echo '<script>alert (" Registro Exitoso, Gracias");</script>';
            echo '<script>window.location="agregarUsu.php"</script>';
         }

    }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar Datos</title>
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../css/diseñoAgregarUsu.css">
</head>
<body>
    <div class="encabezado">
        <img class="logo" src="../img/icono.png">
        <h1 class="titulo">Ingresar los datos del usuario</h1>
    </div>
    <div class="agregar-box"> 
    <form method="POST" name="formeg" autocomplete="off">
        <label for="documento">Datos del usuario</label>
        <input type="text" name="id_usuario" id="id_usuario" placeholder="Ingresar id del usuario ">

        <input type="text" name="nombre" id="nombre" placeholder="Ingresar nombre del usuario">

        <input type="text" name="documento" id="documento"  placeholder="Ingrese documento del usuario ">

        <input type="password" name="password" id="password"  placeholder="Ingrese contraseña del usuario ">

        <input type="text" name="ocupacion" id="ocupacion"  placeholder="Ingrese ocupacion del usuario">

        <select name="id_tipo_usuario">
                <option value="">Seleccione uno...</option>
                <?php
                   do {
                
                ?>
                    <option value="<?php echo($fila['id_tipo_usuario'])?>"> <?php echo($fila['tipo_usuario'])?>

               <?php   
                   }while($fila=mysqli_fetch_assoc($queryi));
               
               ?>
        </select>
        <br>
        <br>

        <input type="submit" name="submit"value="Enviar datos">
            <input type="hidden" name="MM_insert" value="formreg">
            </form>
        </div>

    <div class="boton-regresar" >
        <button type="submit" class="regresar"><a href="../administrador/index.html">Regresar a menu </a></button>
    </div>

</body>
</html>