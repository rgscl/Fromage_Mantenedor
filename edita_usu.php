<?php
include("db.php");
$nombreusu = '';
$passwdusu = '';
$perfilusu = '';

if  (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "SELECT * FROM usuarios WHERE Id_usuario=$id";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_array($result);
		$nombreusu = $row['Nombre'];
		$passwdusu = $row['Contraseña'];
		$perfilusu = $row['Perfil'];
	}
}

if (isset($_POST['update'])) {
	$id = $_GET['id'];
	$nombreusu = $_POST['nombreusu'];
	$passwdusu = $_POST['passwdusu'];
	$perfilusu = $_POST['perfilusu'];

	$query = "UPDATE usuario set Nombre = '$nombreusu', Contraseña = '$passwdusu', Perfil = '$perfilusu' WHERE Id_usuario=$id";
	mysqli_query($conn, $query);
	$_SESSION['message'] = 'Usuario actualizado OK';
	$_SESSION['message_type'] = 'warning';
	header('Location: Tabla_usu.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<div class="card card-body">
				<form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
					<div class="form-group">
						<input name="nombreusu" type="text" class="form-control" value="<?php echo $nombreusu; ?>" placeholder="Actualice nombre">
					</div>
					<div class="form-group">
						<input name="passwdusu" type="password" class="form-control" value="<?php echo $passwdusu; ?>" placeholder="Actualice clave">
					</div>
					<div class="form-group">
<!-- El perfil se selecciona dropdown desde BD roles -->					
						<input name="perfilusu" type="text" class="form-control" value="<?php echo $perfilusu; ?>" placeholder="Actualice perfil">
					</div>

					<button class="btn-success" name="update">
						Actualiza
					</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include('includes/footer.php'); ?>
