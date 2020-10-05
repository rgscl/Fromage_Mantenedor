<?php

	include("conexionFROMAGE.php");

	//id_Proveedor es auto-increment
	$nombre=$_POST['Nombre'];
	$rut=$_POST['RUT'];
	$direccion=$_POST['Direccion'];
	$telefono=$_POST['Telefono'];
	$contacto=$_POST['Contacto'];

	$query="INSERT INTO PROVEEDOR(Nombre, RUT, Dirección, Teléfono, Contacto) VALUES (
											'$nombre',
											'$rut',
											'$direccion',
											'$telefono',
											'$contacto')";
	$resultado= $conexionDB->query($query);
										
	if($resultado){
		header("location: tabla.php");
		}
	else{
		echo"No se ejecutó!";
	}
?>
