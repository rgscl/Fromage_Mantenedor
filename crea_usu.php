<?php

include('db.php');

if (isset($_POST['crea_usu'])) {
  $nombreusu = $_POST['nombreusu'];
  $passwdusu = $_POST['passwdusu'];
  $perfilusu = $_POST['perfilusu'];
  $query = "INSERT INTO usuarios(Nombre, Contraseña, Perfil) VALUES ('$nombreusu', '$passwdusu', $perfilusu)";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Usuario creado OK';
  $_SESSION['message_type'] = 'success';
  header('Location: Tabla_usu.php');

}

?>
