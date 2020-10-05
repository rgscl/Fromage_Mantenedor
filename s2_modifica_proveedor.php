<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="form">
		<?php

			$id_p=$_REQUEST['id'];
            
			include("conexionFROMAGE.php");
			
			$query="SELECT * FROM Proveedor WHERE id_Proveedor='$id_p'";
			$resultado= $conexionDB->query($query);
			$row=$resultado->fetch_assoc();
		?>

		<form action="modifica_p_proceso.php?id=<?php echo $row['id_Proveedor']; ?>" method="POST" onsubmit='return rutexiste(m_RUT)'>
			<p>Rectifique Datos Proveedor</p>
			
			<label for="Nombre">Ingrese nombre</label>
			<br>
			<input type="text" REQUIRED name="m_Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']; ?>" /> <br/><br/>
			
			<label for="RUT">Ingrese RUT</label>
			<br>
			<input type="text" REQUIRED name="m_RUT"  placeholder="11223344-9" 
				pattern="\d{3,8}-[\d|kK]{1}" title="Debe ser un Rut valido" value="<?php echo $row['RUT']; ?>" /> <br/><br/>
			
			<label for="Direccion">Ingrese Direccion</label>
			<br>
			<input type="text" REQUIRED name="m_Direccion" placeholder="Direccion" value="<?php echo $row['Dirección']; ?>" /> <br/><br/>
			
			<label for="Telefono">Ingrese Telefono</label>
			<br>
			<input type="text" REQUIRED name="m_Telefono" placeholder="Telefono" value="<?php echo $row['Teléfono']; ?>" /> <br/><br/>
			
			<label for="Contacto">Ingrese Contacto</label>
			<br>
			<input type="text" REQUIRED name="m_Contacto" placeholder="Persona de Contacto" value="<?php echo $row['Contacto']; ?>" /> <br/><br/> 
			<input type="submit" value="Guarda Modificaciones">
		</form>
	</div>
</body>
</html>

<?php
function rutexiste($rut) {
	include("conexionFROMAGE.php");
	$rutexiste = false;
	mysql_select_db('Proveedor', $conexionDB);
	$sql = mysql_query("SELECT * FROM proveedor WHERE RUT = '".$rut."'",$conexionDB);
    $contar = mysql_num_rows($sql);
 
    if($contar == 0){
        $rutexiste = false;

    }else{
        $rutexiste = true;
        alert('RUT ya está registrado');
    }

return $rutexiste;

}
?>