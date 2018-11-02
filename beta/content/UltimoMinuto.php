<!DOCTYPE html>
<html>
<head>
	<title>Ultimo Minuto</title>
	<meta charset="utf-8">
	<!--Importacion de estilos y el menu js--> 
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="../css/styleform.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="../js/menu.js"></script>
	<script src="../js/menu2.js"></script>
</head>
<body>
	<header>
			<div class="contenido">
			<div class="LogoPagina">
				<img src="../content/logo.jpg" alt="">
			</div>
			<div class="BotonMenu">
			<a href="#" class="BotonM"><span class="icon-menu"></span> Menu</a>
			</div>
			<nav class="menu">
				<ul>
					<li><a href="../index.php"><span class="icon-home"></span>Inicio</a></li>
					<li><a href="Noticias.php"><span class="icon-newspaper"></span>Noticias</a></li>
					<li><a href="Entrevistas.php"><span class="icon-mic"></span>Entrevistas</a></li>
					<li><a href="Reportajes.php"><span class="icon-pencil2"></span>Reportajes</a></li>
					<li><a href="Actualidad.php"><span class="icon-tv"></span>Actulidad</a></li>
					<li><a href="Personajes.php"><span class="icon-users"></span>Personajes</a></li>
					<li><a href="UltimoMinuto.php"><span class="icon-earth"></span>Ultimo Minuto</a></li>
					<li><a href="../form/formulario.php">+ Crear Articulo</a></li>
				</ul>
			</nav>
	</div>
	</header>
		<?php 
		/*PHP para generar la consulta o visualizar los datos 
		-solicito el archivo donde se encuentra la conexion
		*/
		include("../form/conexion.php");

		$query="SELECT * FROM articulo WHERE CatArt=6 ORDER BY ID desc";
		/*llamado a la funccion  $conexion del archivo php
		-variable $Resultado almacena el resultado de la consulta y crea una array
		*/
		//ejecuto el sql mediante query
		$resultado=$conexion->query($query);
		/*Creacion de while para mostrar todos los datos de la consulta*/
		while ($row=$resultado->fetch_assoc()) {	
		?>	
		<div>
		<h1><b><a class="oculta" href="../form/articuloCompleto.php?ID=<?php echo $row['ID'] ?>"><?php echo $row['NomArt']; ?></b></a></h1></br>
		<p class="ubicacion"><i><?php echo $row['ubicacion']; ?></i></p></br>
		<img class="img" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>"></br>
		<p align="justify" class="parrafo"><?php echo $row['informacion']; ?></p></br>


		</div>
		<?php 
		}
		 ?>
</body>
</html>