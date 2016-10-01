<?php
  include "core/database.php";

  $sql_query = sprintf("SELECT * FROM usuarios WHERE tipo < 3 and login = '%s' AND senha = '%s'", $_POST["login"], $_POST["senha"]);
  //$sql_query = sprintf("SELECT * FROM usuarios WHERE login = '%s' AND senha = '%s'", $_GET["login"], $_GET["senha"]);
  $result = mysqli_query($conn, $sql_query);

  if (mysqli_num_rows($result) > 0) echo json_encode("ok");
  else echo json_encode("nope");

?>
