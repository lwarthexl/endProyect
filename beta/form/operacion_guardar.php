<?php 
include("conexion.php");

 $NomArt=htmlspecialchars($_POST['NomArt']);
 $CatArt=htmlspecialchars($_POST['CatArt']);
 $informacion=htmlspecialchars($_POST['informacion']);
 $informacion2=htmlspecialchars($_POST['informacion2']);
 $informacion3=htmlspecialchars($_POST['informacion3']);
 $NomFt=htmlspecialchars($_POST['NomFt']);
 $foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));
 $ubicacion=htmlspecialchars($_POST['ubicacion']);
 $caracteristicas=htmlspecialchars($_POST['caracteristicas']);
 $video=htmlspecialchars($_POST['video']);
 $recomendaciones=htmlspecialchars($_POST['recomendaciones']);

 	/*Instruccion de insercion*/

 	$query="INSERT INTO articulo (NomArt,CatArt,informacion,informacion2,informacion3,NomFt,foto,ubicacion,caracteristicas,video,recomendaciones) VALUES ('$NomArt','$CatArt','$informacion','$informacion2','$informacion3','$NomFt','$foto','$ubicacion','$caracteristicas','$video','$recomendaciones')";
 	/**/
 	$resultado=$conexion->query($query);
 	if ($resultado) {
 		header("Location:tabla.php");
 	}else{
 		echo "Inserccion fallida";
 	}

 ?>