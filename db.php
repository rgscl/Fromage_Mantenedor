<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'FROMAGE'
) or die(mysqli_erro($mysqli));

?>
