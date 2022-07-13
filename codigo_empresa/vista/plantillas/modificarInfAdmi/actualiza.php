<?php

require_once("../../../connections/connection.php");
?>


<html>

<head>
        <meta charset="UTF-8">
        <title>Actualizacion de informacion del documento </title>
        <link rel="icon" href="../../../img/icono.png">
        <link rel="stylesheet" href="../../css/modiActualiza.css">
</head>

<div class='encabezado'>
        <img class='logo' src='../../img/icono.png'>
        <h1 class='titulo'>Actualizacion de la informacion</h1>
    </div>

<body>

<?php

        $it_documento=    $_POST['it_documento'];
        $nombre_documento=     $_POST['nombre_documento'];
        $nombre_empresa= $_POST['nombre_empresa'];
        $fecha=     $_POST['fecha'];
         


        $actualizar="UPDATE informacion_documento SET nombre_documento='$nombre_documento',nombre_empresa='$nombre_empresa',fecha='$fecha'
         WHERE it_documento='$it_documento'";
        $resultUpdate = mysqli_query($mysqli, $actualizar); 

       if($resultUpdate){
            echo "
            <main class='contenido-principal'>
            <div class='texto-mitad'>
                <p>El documento se a actualizado con exito</p>
                <br>
                        <button type='submit' class='regresar-menu'><a href='../../administrador/index.html'>Regresar a menu</a></button>
                <br>
                        <button type='submit' class='regresar-actualizar'><a href='actualizar.php'>Regresar a actualizar la informacion</a></button>
                </div>
            </main>
          
                    ";
            }

?>
<
</div>
</body>

</html>
