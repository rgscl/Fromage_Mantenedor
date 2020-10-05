<?php
	include("conexionFROMAGE.php");

	$id=$_REQUEST['id'];

	$query="DELETE FROM Proveedor WHERE id_Proveedor='$id' ";
	$resultado= $conexionDB->query($query);
									
	if($resultado){
		header("location: tabla.php");
		}
	else{
		echo"No se Borró!";
	}
?>
