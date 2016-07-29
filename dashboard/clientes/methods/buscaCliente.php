<?php 
	
	include "../../core/database.php";
	include "../../core/functions.php";

	$sql_query = "SELECT * FROM clientes WHERE cpfCnpj like '".SomenteNumeros($_POST["search"])."%' ORDER BY razaoSocial;";
	$result = mysqli_query($conn, $sql_query);

	$rows = array();
	while($row = mysqli_fetch_array($result)) $rows[] = $row;

	$ret = "";
	foreach($rows as $r){

		$sql_query = "SELECT tipo FROM documentos WHERE tipo in ('RG', 'CPF') and clienteId = ". $r['id'];
		$result = mysqli_query($conn, $sql_query);
		$docs = array();
		while($row = mysqli_fetch_array($result)) $docs[] = $row;

		$cor = "";
		if (!$docs){
		  $cor = "cor-vermelha";
		} else {
		    $cor = "cor-verde";
		}

		switch ($r["categoria"]) {
      case 1: $categoria = "Focco"; break;
      case 2: $categoria = "FX53 Simplificado"; break;
      case 3: $categoria = "FX53 Premier"; break;
      case 4: $categoria = "FX53 Plus"; break;                
      default: $categoria = "Focco"; break;
    }

		$ret .=
		  '<tr>
		  <td>'.$r["razaoSocial"].'</td>
		  <td>'.$r["email"].'</td>
		  <td>'.$r["telCelular"].' / '.$r["telFixo"].'</td>
		  <td>'.$categoria.'</td>
		  <th>USD 3.000,00</th>
		  <th><i class="material-icons '.$cor.' ">&#xE5CA;</i>   </th>

		  <td class="center"><a href="/dashboard/clientes/visualizar?clienteId='.$r["id"].'"><i class="material-icons" title="Visualizar cliente">&#xE85D;</i></a></td>
		  <td class="center"><a href="/dashboard/clientes/alterar?clienteId='.$r["id"].'"><i class="material-icons" title="Editar cliente">&#xE3C9;</i></a></td>
		  <td class="center"><a href="/dashboard/clientes/excluir?clienteId='.$r["id"].'"><i class="material-icons" title="Excluir cliente">&#xE92B;</i></a></td>
		  </tr>';
	}

	echo $ret;
?>


