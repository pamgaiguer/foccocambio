<?php

	include "../../core/database.php";
	include "../../core/functions.php";

	$sql_query = "SELECT * FROM clientes WHERE ativo = 1 and cpfCnpj like '".SomenteNumeros($_POST["search"])."%' ORDER BY razaoSocial;";
	$result = mysqli_query($conn, $sql_query);

	$rows = array();
	while($row = mysqli_fetch_array($result)) $rows[] = $row;

	$ret = "";
	foreach($rows as $r){

		switch ($r["categoria"]) {
	    case 1:
	      $categoria = "Focco";
	      $docsObrigatorios = array('CPF', 'RG');
	      break;

	    case 2:
	      $categoria = "FX53 Simplificado";
	      $docsObrigatorios = array('CPF', 'RG', 'CR', 'FF');
	      break;

	    case 3:
	      $categoria = "FX53 Premier";
	      $docsObrigatorios = array('CPF', 'RG', 'CR', 'FF', 'IR');
	      break;

	    case 4:
	      $categoria = "FX53 Plus";
	      $docsObrigatorios = array('CPF', 'RG', 'CR', 'FF', 'IR', 'CA', 'CPS', 'PV');
	      break;

	    default: $categoria = "Focco";
	    $docsObrigatorios = array('CPF', 'RG');
	    break;
	  }

	  $sql_query = "SELECT tipo FROM documentos WHERE clienteId = ". $r['id'];
	  $result = mysqli_query($conn, $sql_query);
	  $docs = array();
	  while($row = mysqli_fetch_array($result)) $docs[] = $row['tipo'];

	  $dif = array_diff($docsObrigatorios, $docs);
	  $cor = "";

	  if (!$dif){

	    $cor = "green-text";

	  } else if (in_array("CPF", $dif)){

	    $cor = "red-text";

	  } 


	  if ($r["vip"]) $cor .= " amber-text";

		$ret .=
		  '<tr>
		  <td>'.$r["razaoSocial"].'</td>
		  <td>'.$r["email"].'</td>
		  <td>'.$r["telCelular"].' / '.$r["telFixo"].'</td>
		  <td>'.$categoria.'</td>
		  <th>USD 3.000,00</th>
		  <th><i class="material-icons '.$cor.' ">&#xE5CA;</i>   </th>

		  <td class="center"><a class="link-acao" data-acao="visualizar" data-cliente-id="'.$r["id"].'" href="/dashboard/clientes/visualizar?clienteId='.$r["id"].'" data-href="/dashboard/clientes/visualizar?clienteId='.$r["id"].'"><i class="material-icons" title="Visualizar cliente">&#xE85D;</i></a></td>
      <td class="center"><a class="link-acao" data-acao="alterar" data-cliente-id="'.$r["id"].'" href="/dashboard/clientes/alterar?clienteId='.$r["id"].'" data-href="/dashboard/clientes/alterar?clienteId='.$r["id"].'"><i class="material-icons" title="Editar cliente">&#xE3C9;</i></a></td>
      <td class="center"><a class="link-acao" data-acao="excluir" data-cliente-id="'.$r["id"].'" href="/dashboard/clientes/excluir?clienteId='.$r["id"].'" data-href="/dashboard/clientes/excluir?clienteId='.$r["id"].'"><i class="material-icons" title="Excluir cliente">&#xE92B;</i></a></td>
		  </tr>

		  <script>
			  focco.indexCliente();
			</script>

		  ';
	}

	echo $ret;
?>



