<?php 
	
	include "../../core/database.php";
	include "../../core/functions.php";

	$sql_query = "SELECT * FROM clientes WHERE cpfCnpj like '".SomenteNumeros($_POST["search"])."%' ORDER BY razaoSocial;";
	$result = mysqli_query($conn, $sql_query);

	$rows = array();
	while($row = mysqli_fetch_array($result)) $rows[] = $row;

	$ret = "";
	foreach($rows as $r){
	  $ret .=
	  '<tr>
	  <td>'.$r["razaoSocial"].'</td>
	  <td>'.$r["email"].'</td>
	  <td>'.$r["telCelular"].' / '.$r["telFixo"].'</td>
	  <td class="center"><a href="/dashboard/clientes/visualizar?clienteId='.$r["id"].'"><i class="material-icons" title="Visualizar cliente">&#xE85D;</i></a></td>
	  <td class="center"><a href="/dashboard/clientes/alterar?clienteId='.$r["id"].'"><i class="material-icons" title="Editar cliente">&#xE3C9;</i></a></td>
	  <td class="center"><a href="/dashboard/clientes/excluir?clienteId='.$r["id"].'"><i class="material-icons" title="Excluir cliente">&#xE92B;</i></a></td>
	  </tr>';
	}

	echo $ret;
?>
