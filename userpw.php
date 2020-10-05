<?php include("db.php"); ?>

<?php

// define variables and set to empty values
$usuario = $clave = "";
$_SESSION['exito']="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $usuario = test_input($_POST["usuario"]);
  $clave = md5($_POST["clave"]);

//validar con la bd
$query = "SELECT Id_usuario, Nombre, Contraseña, Perfil FROM usuarios WHERE Nombre = '{$usuario}'";

$result = $conn -> query($query);

$_SESSION['usuario']= '';
$var=mysqli_num_rows($result);

if ($var == 1) {
	$row = mysqli_fetch_array($result);
	if ($clave == $row['Contraseña']) {
		$_SESSION['usuario'] = $row['Id_usuario'];
		echo "Éxito";
		$_SESSION['exito']=true;

	}
}
else{
	$_SESSION['message'] = 'Usuario o clave inválidos';
	$_SESSION['message_type'] = 'warning';
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

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
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="form-group">
            Usuario: <input type="text" name="usuario" class="form-control" placeholder="Usuario" autofocus>
          </div>
		  <div class="form-group">
            Contraseña: <input type="text" name="clave" class="form-control" placeholder="Contraseña" autofocus>
          </div>
          <input type="submit" name="ingresar" class="btn btn-success btn-block" value="Ingresar">
        </form>
      </div>
    </div>
	
    <div class="col-md-8">
    </div>
  </div>
</main>

