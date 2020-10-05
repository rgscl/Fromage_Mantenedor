<?php

	include("conexionFROMAGE.php");

	$id=$_REQUEST['id'];

	$nombre=$_POST['m_Nombre'];
	$rut=$_POST['m_RUT'];
	$direccion=$_POST['m_Direccion'];
	$telefono=$_POST['m_Telefono'];
	$contacto=$_POST['m_Contacto'];

	$query="UPDATE PROVEEDOR SET Nombre='$nombre', 
								RUT='$rut', 
								Dirección='$direccion', 
								Teléfono='$telefono', 
								Contacto='$contacto' 
							WHERE id_Proveedor='$id' ";
	$resultado= $conexionDB->query($query);
									
	if($resultado){
		header("location: tabla.php");
		}
	else{
		echo"No se ejecutó!";
	}
?>
