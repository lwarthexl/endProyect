<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/Sform.css">
	<link rel="stylesheet" href="../css/fonts.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<h1 align="left"><b><span class="icon-pencil2"></span> Nuevo Articulo</b></h1>
	<?php 
		//Requiero la conexion
		include("conexion.php");
		//Recibo el id mediante REQUEST
		$id=$_REQUEST ['ID'];
		//Creacion de sql filtrando por id (seleccion)
		$query="SELECT * FROM articulo WHERE ID=$id";
		//ejecucion del sql
		$resultado=$conexion->query($query);
		//Guardo los datos en un array con nombre $row
		$row=$resultado->fetch_assoc();
		?>	
		<!-- redireccion al formulario modificar proceso y envio datos mediante POST para su modificacion -->
<form action="modificar_proceso.php?ID=<?php echo $row['ID'] ?>" method="post" enctype="multipart/form-data">
	<label>Nombre del Articulo</label><input required type="text" name="NomArt" placeholder="Ingrese el Nombre del Articulo" value="<?php echo $row['NomArt']; ?>">
	<label>Categoria del articulo</label>
	<select name="CatArt">
	<option value=1>Noticias</option>
	<option value=2>Entrevistas</option>
	<option value=3>Reportajes</option>
	<option value=4>Actualidad</option>
	<option value=5>Personajes</option>
	<option value=6>Ultimo Minuto</option>

	</select>	
	<label>Ubicacion</label><input required type="text" name="ubicacion" placeholder="Ingrese la ubicación" value="<?php echo $row['ubicacion']; ?>">
	<label>Informacion</label><textarea required name="informacion" placeholder="Ingrese la Informacion" ><?php echo $row['informacion']; ?></textarea>
	<label>Informacion</label><textarea  name="informacion2" placeholder="Ingrese la Informacion segundo parrafo" ><?php echo $row['informacion2']; ?></textarea>
	<label>Informacion</label><textarea  name="informacion3" placeholder="Ingrese la Informacion tercer parrafo" ><?php echo $row['informacion3']; ?></textarea>
	<label>Nombre de la Foto</label><input required type="text" name="NomFt" placeholder="Ingrese el nombre de la foto" value="<?php echo $row['NomFt']; ?>">
	<img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>">
	<label>Foto</label><input required type="file" name="foto">
	<label>Caracteristicas</label><textarea required name="caracteristicas" placeholder="Ingrese las caracteristicas"><?php echo $row['caracteristicas']; ?></textarea>
	<label>Videos</label><input required type="text" name="video" placeholder="Ingrese URL del video" value="<?php echo $row['video']; ?>">
	<label>Recomendaciones</label><textarea required name="recomendaciones" placeholder="Ingrese las recomendaciones"><?php echo $row['recomendaciones']; ?></textarea>
	<input type="submit" value="Guardar">
</form>

</body>
</html>