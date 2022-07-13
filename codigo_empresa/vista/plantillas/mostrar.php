<?php

require_once("../../connections/connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="../css/diseñoMos.css">
    <title>Mostrar datos</title>
    <link rel="icon" href="../../img/icono.png">
</head>
<body>
<div class="encabezado">
        <img class="logo" src="../img/icono.png">
        <h1 class="titulo">Aqui estan los datos</h1>
    </div>
	
	<div class="boton-regresar" >
        <button type="submit" class="regresar"><a href="../usuario/index.html">Regresar a menu </a></button>
    </div>
    
    <table class="tabla-contenido">
        <tr>
			<td>Id_Documento</td>
			<td>It_Documento</td>
			<td>Id_Usuario</td>
			<td>Nombre_Documento</td>
			<td>Fecha</td>	
            <td>Tipo_Contrato</td>
            <td>Ubicacion_Bloque</td>
		</tr>

        <?php 
		$sql="SELECT * from documento";
		$result=mysqli_query($mysqli,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id_documento'] ?></td>
			<td><?php echo $mostrar['it_documento'] ?></td>
			<td><?php echo $mostrar['id_usuario'] ?></td>
			<td><?php echo $mostrar['nombre_documento'] ?></td>
			<td><?php echo $mostrar['fecha'] ?></td>
            <td><?php echo $mostrar['tipo_contrato'] ?></td>
            <td><?php echo $mostrar['ubicacion_bloque'] ?></td>
		</tr>
	<?php 
	}
	 ?>
    </table>
    
</body>
</html>