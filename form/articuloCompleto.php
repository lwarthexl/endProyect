<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Caso Estudio: Revista Web</title>
	<!--Importacion de estilos y el menu js--> 
	<link rel="stylesheet" href="../css/styleform.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="../css/style.css">
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
					<li><a href="../content/Noticias.php"><span class="icon-newspaper"></span>Noticias</a></li>
					<li><a href="../content/Entrevistas.php"><span class="icon-mic"></span>Entrevistas</a></li>
					<li><a href="../content/Reportajes.php"><span class="icon-pencil2"></span>Reportajes</a></li>
					<li><a href="../content/Actualidad.php"><span class="icon-tv"></span>Actulidad</a></li>
					<li><a href="../content/Personajes.php"><span class="icon-users"></span>Personajes</a></li>
					<li><a href="../content/UltimoMinuto.php"><span class="icon-earth"></span>Ultimo Minuto</a></li>
					<li><a href="../form/formulario.php">+ Crear Articulo</a></li>
			
				</ul>
	</div>
	</header>

<?php 
		/*PHP para generar la consulta o visualizar los datos 
		-solicito el archivo donde se encuentra la conexion
		*/
		include("conexion.php");
		$id=$_REQUEST['ID'];
		$query="SELECT * FROM articulo WHERE ID=$id";
		/*llamado a la funccion  $conexion del archivo php
		-variable $Resultado almacena el resultado de la consulta y crea una array
		*/
		//ejecuto el sql mediante query
		$resultado=$conexion->query($query);
		/*Creacion de while para mostrar todos los datos de la consulta*/
		while ($row=$resultado->fetch_assoc()) {	
		?>	
		<div>
		<h1><b><?php echo $row['NomArt']; ?></b></h1></br>
		<p class="ubicacion"><i>Ubicacion: <?php echo $row['ubicacion']; ?></i></p></br>
		<img class="img" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>"></br>
		<p class="ubicacion">Nombre de la foto: <i><?php echo $row['NomFt']; ?></i></p></br>
		<p align="justify" class="parrafo"><?php echo $row['informacion']; ?></p></br>
		<p align="justify" class="parrafo"><?php echo $row['informacion2']; ?></p></br>
		<p align="justify" class="parrafo"><?php echo $row['informacion3']; ?></p></br>
		<p align="justify" class="parrafo"><b>Caracteristicas:</b></br></br><?php echo $row['caracteristicas']; ?></p></br>
		<!--Revision --> 
		<p class="parrafo"><b>Video:</b> <a href="<?php echo $row['video']; ?>"target="_blank" >ver video</a></p></br>
		<p align="justify" class="parrafo"><b>Recomendaciones: </b></br></br><?php echo $row['recomendaciones']; ?></p></br>
	
		
		

		</div>
		<?php 
		}
		 ?>
		 
		 <p class="parrafo"><b>Comparte </b></p></br>
		 <div class="share-buttons-row">
			<!--Facebook's Button -->
			<div class="share-fb"></div>
			<!--Twitter's Button -->
			<div class="share-twitter"></div>
			<!--Facebook's Button -->
			<div class="share-google-plus"></div>
			<!--Linkedin's Button -->
			<div class="share-linkedin"></div>
			<!--Pinterest's Button -->
			<div class="share-pinterest"></div>
			<!--Tumblr's Button -->
			<div class="share-tumblr"></div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="../js/functions.js"></script>

		<div>
			</br></br><p class="parrafo"><b>Comenta esta publicacion</b></p></br>
			<form action="operacion_guardar_comentarios.php" method="post" enctype="multipart/form-data">
			<label >Nombre de Usuario</label><input required type="text" name="Nom" placeholder="Ingrese el Nombre de usuario">
		</div>
</body>
</html>	