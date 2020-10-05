
<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<?php include('userpw.php'); ?>

<!-- Componer menu autorizado de acuerdo al contenido de $_SESSION['usuario']-->

<!-- do while usuario no cierra sesión -->

<?php if($_SESSION['exito']==true) : ?>

<nav class="navbar navbar-expand bg-dark navbar-dark fixed-top">
	<a class="navbar-brand" href="#">
		<img src="docs/logo.jpg" alt="Logo" style="width:40px;">
	</a>
<!-- Links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" href="Bitacora.php">Solicitudes</a>
		</li>
<!-- Dropdown -->
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				Respaldo
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="s2_RespaldaBD.php">Respalda BD</a>
				<a class="dropdown-item" href="s2_Restaura_BD.php">Restaura BD</a>
			</div>
		</li>    

<!-- Dropdown -->
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				Mantenedores
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="Tabla_usu.php">Usuarios</a>
				<a class="dropdown-item" href="tabla_rol.php">Roles</a>
				<a class="dropdown-item" href="tabla_dom.php">Dominios</a>
				<a class="dropdown-item" href="tabla.obj.php">Objetos</a>
				<a class="dropdown-item" href="tabla_pri.php">Privilegios</a>
				<a class="dropdown-item" href="tabla_acc.php">Acciones</a>
				<a class="dropdown-item" href="tabla_cli.php">Clientes</a>		
				<a class="dropdown-item" href="tabla_prd.php">Productos</a>
				<a class="dropdown-item" href="tabla_prv.php">Proveedores</a>
				<a class="dropdown-item" href="tabla_ven.php">Vendedores</a>
			</div>
		</li>
	</ul>
</nav> 	
<?php endif; ?>
<!-- O cerrar conexiones y terminar??-->

<?php include('includes/footer.php'); ?>

