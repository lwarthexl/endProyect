<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
</head>
<body>
<center>
<table  border="3">
	<!-- Cabecera de la tabla -->
	<thead>
		<!-- columnas -->
		<tr>
			<!-- redireccion al formulario -->
			<!-- filas-->
			<th colspan="1"><a href="formulario.php"> Nuevo Articulo</a></th>
			<th colspan="5">Articulos</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>ID</td>
			<td>Nombre del articulo</td>
			<td>Ubicacion</td>
			<td>Foto</td>
			<td colspan="2"><b> Operaciones</b></td>
		</tr>
		<?php 
		/*PHP para generar la consulta o visualizar los datos 
		-solicito el archivo donde se encuentra la conexion
		*/
		include("conexion.php");

		$query="SELECT * FROM articulo";
		/*llamado a la funccion  $conexion del archivo php
		-variable $Resultado almacena el resultado de la consulta y crea una array
		*/
		//ejecuto el sql mediante query
		$resultado=$conexion->query($query);
		/*Creacion de while para mostrar todos los datos de la consulta*/
		while ($row=$resultado->fetch_assoc()) {
		?>	
		<tr>
			<!-- Invocacion de datos mediante php atravez  de $row (array) contiene los datos -->
			<td><?php echo $row['ID']; ?></td>
			<td><?php echo $row['NomArt']; ?></td>
			<td><?php echo $row['ubicacion']; ?></td>
			<!--Presentar la imagen y quitado de bits-->
			<td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>"></td>
			<!-- redireccion al procceso modificar,eliminar envio el ID mediante php -->
			<td><a href="Modificar.php?ID=<?php echo $row['ID'] ?>">Modificar</a></td>
			<td><a href="eliminar.php?ID=<?php echo $row['ID'] ?>">Eliminar</a></td>
		</tr>
		<?php 
		}


		 ?>
	</tbody>

</table>
</center>

</body>
</html>
