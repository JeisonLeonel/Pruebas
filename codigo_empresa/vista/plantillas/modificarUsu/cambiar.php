<html>

<head>
<title>Datos a actualizar.</title>
<meta charset="UTF-8">
<link rel="icon" href="../../../img/icono.png">
<link rel="stylesheet" href="../../css/diseñoCambiar.css">

</head>

<?php 
$id_documento = $_POST['id_documento'];

require_once("../../../connections/connection.php");

$validar ="SELECT * FROM documento where id_documento = '$id_documento'";
$queryi=mysqli_query($mysqli,$validar);

if ($resultado = mysqli_fetch_assoc($queryi)){

echo "
<body>
<div class='encabezado'>
        <img class='logo' src='../../img/icono.png'>
        <h1 class='titulo'>Actualizacion de datos</h1>
    </div>

<div class='contenido'>
     
        <form class='formulario' method='POST' action='actualiza.php'>

        <label>Actualice los datos que considere</label>
            <br>
            <p>Id_documento 
            <br>
            <input type='text' name='id_documento'  value='".$resultado['id_documento']."'>

            <p>It_documento
            <br>
            <input type='text' name='it_documento'  value='".$resultado['it_documento']."'>
            
            <p>Id_usuario
            <br>
            <input type='text' name='id_usuario'  value='".$resultado['id_usuario']."'>

            <p>Nombre_documento
            <br>
            <input type='text' name='nombre_documento' value='".$resultado['nombre_documento']."'>

            <p>Fecha
            <br>
            <input type='text' name='fecha'  value='".$resultado['fecha']."'>

            <p>Tipo_contrato
            <br>
            <input type='text' name='tipo_contrato' value='".$resultado['tipo_contrato']."'>

            <p>Ubicacion_bloque
            <br>
            <input type='text' name='ubicacion_bloque' value='".$resultado['ubicacion_bloque']."'>

            <br>

            <input type='hidden' name='id_documento' value='$id_documento'>
            <input type='submit' value='Actualizar datos' name='B1'></td>
        </form>
</div>
";
}
?>
<br>
<br>
<br>

</body>

</html>