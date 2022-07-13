<?php

require_once("../../connections/connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="../css/diseñoMos.css">
    <title>Mostrar Informacion del Documento</title>
    <link rel="icon" href="../../img/icono.png">
</head>
<body>
<div class="encabezado">
        <img class="logo" src="../img/icono.png">
        <h1 class="titulo">Aqui esta la informacion del documento</h1>
    </div>
	
	<div class="boton-regresar" >
        <button type="submit" class="regresar"><a href="../administrador/index.html">Regresar a menu </a></button>
    </div>
    
    <table class="tabla-contenido">
        <tr>
			<td>It_Documento</td>
			<td>Nombre_documento</td>
			<td>Nombre_empresa</td>
			<td>Fecha</td>	
            
		</tr>

        <?php 
		$sql="SELECT * from informacion_documento";
		$result=mysqli_query($mysqli,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['it_documento'] ?></td>
			<td><?php echo $mostrar['nombre_documento'] ?></td>
			<td><?php echo $mostrar['nombre_empresa'] ?></td>
            <td><?php echo $mostrar['fecha'] ?></td>
		</tr>
	<?php 
	}
	 ?>
    </table>
    
</body>
</html>