
<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
	<div class="row">
		<div class="col-md-4">
			<!-- MESSAGES -->

			<?php if (isset($_SESSION['message'])) { ?>
			<div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
				<?= $_SESSION['message']?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php session_unset(); } ?>

			<!-- ADD TASK FORM -->
			<div class="card card-body">
				<form action="crea_usu.php" method="POST">
					<div class="form-group">
						<input type="text" name="nombreusu" class="form-control" placeholder="Nombre usuario" autofocus>
					</div>
					<div class="form-group">
						<input type="password" name="passwdusu" class="form-control" placeholder="Contraseña" autofocus>
					</div>
					<div class="form-group">
<!-- El perfil se selecciona dropdown desde BD roles -->					
					<input type="text" name="perfilusu" class="form-control" placeholder="Nombre usuario" autofocus>
					</div>
					
					<input type="submit" name="Registra" class="btn btn-success btn-block" value="Registra">
				
				</form>
			</div>
		</div>
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Clave</th>
						<th>Perfil</th>
						<th>Acción</th>
					</tr>
				</thead>
			
				<tbody>
					<?php
						$query = "SELECT * FROM usuarios";
						$result_usuarios = mysqli_query($conn, $query);    

						while($row = mysqli_fetch_assoc($result_usuarios)) { ?>
							<tr>
								<td><?php echo $row['Nombre']; ?></td>
								<td><?php echo $row['Contraseña']; ?></td>
								<td><?php echo $row['Perfil']; ?></td>
								<td>
									<a href="edita_usu.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
										<i class="fas fa-marker"></i>
									</a>
									<a href="borra_usu.php?id=<?php echo $row['id']?>" class="btn btn-danger">
										<i class="far fa-trash-alt"></i>
									</a>
								</td>
							</tr>
						<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</main>

<?php include('includes/footer.php'); ?>

