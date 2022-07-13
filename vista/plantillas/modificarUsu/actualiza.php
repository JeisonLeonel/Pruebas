<?php

require_once("../../../connections/connection.php");
?>


<html>

<head>
        <title>Actualizacion de datos completada </title>
        <meta charset="UTF-8">
        <link rel="icon" href="../../../img/icono.png">
        <link rel="stylesheet" href="../../css/modiActualiza.css">
</head>

<div class='encabezado'>
        <img class='logo' src='../../img/icono.png'>
        <h1 class='titulo'>Actualizacion de datos</h1>
    </div>

<body>

<?php

        $id_documento = $_POST['id_documento'];
        $it_documento=    $_POST['it_documento'];
        $id_usuario=   $_POST['id_usuario'];
        $nombre_documento=     $_POST['nombre_documento'];
        $fecha=     $_POST['fecha'];
        $tipo_contrato=     $_POST['tipo_contrato'];
        $ubicacion_bloque=     $_POST['ubicacion_bloque'];
         


        $actualizar="UPDATE documento SET it_documento='$it_documento',id_usuario='$id_usuario',nombre_documento='$nombre_documento',fecha='$fecha',
        tipo_contrato='$tipo_contrato',ubicacion_bloque='$ubicacion_bloque' WHERE id_documento='$id_documento'";
        $resultUpdate = mysqli_query($mysqli, $actualizar); 

       if($resultUpdate){
            echo "
            <main class='contenido-principal'>
            <div class='texto-mitad'>
                <p>Los datos han sido actualizados con exito.</p>
                <br>
                        <button type='submit' class='regresar-menu'><a href='../../usuario/index.html'>Regresar a menu</a></button>
                <br>
                        <button type='submit' class='regresar-actualizar'><a href='actualizar.php'>Regresar a actualizar dato</a></button>
                </div>
            </main>
          
                    ";
            }

?>
<
</div>
</body>

</html>
