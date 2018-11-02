<?php 
include("conexion.php");
 $id=$_REQUEST['ID'];
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

 	$query="UPDATE articulo SET NomArt='$NomArt',CatArt='$CatArt',informacion='$informacion',informacion2='$informacion2',informacion3='$informacion3',NomFt='$NomFt',foto='$foto',ubicacion='$ubicacion',caracteristicas='$caracteristicas',video='$video',recomendaciones='$recomendaciones' WHERE ID='$id'";
 	/**/
 	$resultado=$conexion->query($query);
 	if ($resultado) {
 		header("Location:tabla.php");
 	}else{
 		echo "Inserccion fallida";
 	}

 ?>