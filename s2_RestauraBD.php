<?php
include("db.php");  //conexion en $conn

$filename = 'backup.sql';  //Futuro: Ofrecer navegar para obtener archivo a restaurar
$handle = fopen($filename,"r+");
$contents = fread($handle,filesize($filename));
$sql = explode(';',$contents);
foreach($sql as $query){
  $result = mysqli_query($conn,$query);
  if($result){
      echo '<tr><td><br></td></tr>';
      echo '<tr><td>'.$query.' <b>ÉXITO</b></td></tr>';
      echo '<tr><td><br></td></tr>';
  }
}
fclose($handle);
echo 'Importación exitosa';
header("location: Index2.php");
?>
