<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM usuarios WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Borrado falló.");
  }

  $_SESSION['message'] = 'Usuario removido OK';
  $_SESSION['message_type'] = 'danger';
  header('Location: Tabla_usu.php');
}

?>
