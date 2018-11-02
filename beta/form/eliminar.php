<?php 
//Solicito la conexion 
include("conexion.php");
//A travez de  REQUEST recibo el ID
 $id=$_REQUEST['ID'];

 	/*Escribo el sql filtrandolo por ID*/	
 	$query="DELETE FROM articulo WHERE ID='$id'";
 	/*Ejecuto el sql*/
 	$resultado=$conexion->query($query);
 	//Pongo un if en cuyo caso falle aparece el mensaje, si no redirecciona
 	if ($resultado) {
 		//Redireccion a el archivo tabla.php
 		header("Location:tabla.php");
 	}else{
 		//Mensaje en caso de error
 		echo "No se ha podido eliminar el articulo";
 	}

 ?>