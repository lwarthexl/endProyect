<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Articulo</title>
	<meta charset="utf-8">
	<!-- Conecto estilos -->
	<link rel="stylesheet" href="../css/Sform.css">
	<link rel="stylesheet" href="../css/fonts.css">
	<!-- Lo pongo adaptativo o responsize  para movil-->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<h1 align="left"><b><span class="icon-pencil2"></span> Nuevo Articulo</b></h1>
<!-- redireccion al formulario operacion guardar y envio de datos mediante POST -->
<form action="operacion_guardar.php" method="post" enctype="multipart/form-data">
	<label>Nombre del Articulo</label><input required type="text" name="NomArt" placeholder="Ingrese el Nombre del Articulo">
	<label>Categoria del articulo</label>
	<select name="CatArt">
	<option value=1>Noticias</option>
	<option value=2>Entrevistas</option>
	<option value=3>Reportajes</option>
	<option value=4>Actualidad</option>
	<option value=5>Personajes</option>
	<option value=6>Ultimo Minuto</option>
	</select>	
	<label>Ubicacion</label><input required type="text" name="ubicacion" placeholder="Ingrese la ubicación">
	<label>Informacion</label><textarea required name="informacion" placeholder="Ingrese la Informacion primer parrafo"></textarea>
	<label>Informacion</label><textarea  name="informacion2" placeholder="Ingrese la Informacion segundo parrafo"></textarea>
	<label>Informacion</label><textarea name="informacion3" placeholder="Ingrese la Informacion tercer parrafo "></textarea>
	<label>Nombre de la Foto</label><input required type="text" name="NomFt" placeholder="Ingrese el nombre de la foto">
	<label>Foto</label><input required type="file" name="foto">
	<label>Caracteristicas</label><textarea required name="caracteristicas" placeholder="Ingrese las caracteristicas"></textarea>
	<label>Videos</label><input required type="text" name="video" placeholder="Ingrese URL del video">
	<label>Recomendaciones</label><textarea required name="recomendaciones" placeholder="Ingrese las recomendaciones"></textarea>
	<input type="submit" value="Guardar">
</form>
</body>
</html>