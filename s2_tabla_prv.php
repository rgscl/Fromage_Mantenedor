<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabla</title
</head>
<body>
	<center>
		<table bgcolor="#e5dfcd" border="3">
			<thead>
				<tr>
					<th colspan="1"><a href="Index.html">Atrás</a></th>
					<th colspan="1"><a href="Mantenedor.html">Nuevo</a></th>
					<th colspan="6">Listado de Proveedores</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Id Proveedor</td>
					<td>Nombre</td>
					<td>RUT</td>
					<td>Dirección</td>
					<td>Teléfono</td>
					<td>Contacto</td>
					<td colspan="2">Opciones</td>
				</tr>
				<?php
					
					include("conexionFROMAGE.php");

					$query="Select * from Proveedor";
					$resultado= $conexionDB->query($query);
					while($row=$resultado->fetch_assoc()){
				?>
					<tr>
						<td><?php echo $row['id_Proveedor']; ?></td>
						<td><?php echo $row['Nombre']; ?></td>
						<td><?php echo $row['RUT']; ?></td>
						<td><?php echo $row['Dirección']; ?></td>
						<td><?php echo $row['Teléfono']; ?></td>
						<td><?php echo $row['Contacto']; ?></td>
						<td><a href="Modifica_proveedor.php?id=<?php echo $row['id_Proveedor']; ?>">Modificar</a></td>
						<td><a href="Elimina_proveedor.php?id=<?php echo $row['id_Proveedor']; ?>">Eliminar</a></td>
					</tr>
				<?php
					}
				?>					
			</tbody>
		</table>
	</center>
</body>
</html>
