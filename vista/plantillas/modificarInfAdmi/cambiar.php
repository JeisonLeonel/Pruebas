<html>

<head>
<title>Datos a actualizar</title>
<meta charset="UTF-8">
<link rel="icon" href="../../../img/icono.png">
<link rel="stylesheet" href="../../css/diseñoCambiarAdmi.css">

</head>

<?php 
$it_documento = $_POST['it_documento'];

require_once("../../../connections/connection.php");

$validar ="SELECT * FROM informacion_documento where it_documento = '$it_documento'";
$queryi=mysqli_query($mysqli,$validar);

if ($resultado = mysqli_fetch_assoc($queryi)){

echo "
<body>
<div class='encabezado'>
        <img class='logo' src='../../img/icono.png'>
        <h1 class='titulo'>Actualizacion de la informacion del documento</h1>
    </div>

<div class='contenido'>
     
        <form class='formulario' method='POST' action='actualiza.php'>

        <label>Actualice la informacion del documento que considere</label>
            
            <p>It del documento
            <br>
            <input type='text' name='it_documento'  value='".$resultado['it_documento']."'>

            <p>Nombre del documento
            <br>
            <input type='text' name='nombre_documento' value='".$resultado['nombre_documento']."'>

            <p>Nombre de empresa
            <br>
            <input type='text' name='nombre_empresa' value='".$resultado['nombre_empresa']."'>

            <p>Fecha
            <br>
            <input type='text' name='fecha'  value='".$resultado['fecha']."'>

            <br>

            <input type='hidden' name='id_documento' value='$it_documento'>
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