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
	      $docsObrigatorios = array('CPF');
	      break;

	    case 2:
	      $categoria = "FX53 Simplificado";
	      $docsObrigatorios = array('CPF', 'CR', 'FF');
	      break;

	    case 3:
	      $categoria = "FX53 Premier";
	      $docsObrigatorios = array('CPF', 'CR', 'FF', 'IR');
	      break;

	    case 4:
	      $categoria = "FX53 Plus";
	      $docsObrigatorios = array('CPF', 'CR', 'FF', 'IR', 'CA', 'CPS', 'PV');
	      break;

	    default: $categoria = "Focco";
	    $docsObrigatorios = array('CPF');
	    break;
	  }

	  switch ($r['origem']) {
      case 1:
      $origem =  "Matriz";
      break;
      case 2:
      $origem = "Loja 1";
      break;
      default:
      $origem = "Matriz";
      break;
    }

    $dtIni = date('Y')."-01-01 00:00:00";
    $dtFim = date('Y')."-12-31 23:59:59";

    $data = date('Y-m-d',strtotime("-360 days")); 
    $sql_query = "SELECT sum(quantidade) quantidade FROM boletagem 
    WHERE status = 1 AND data > '".$data."' AND clienteId = ". $r['id'];              
    $result = mysqli_query($conn, $sql_query);
    $totalQtd = array();
    while($row = mysqli_fetch_array($result)) $totalQtd[] = $row['quantidade'];
    $limiteDisponivel = floatval($r['limiteOperacionalAno']) - $totalQtd[0];

	  $sql_query = "SELECT tipo FROM documentos WHERE clienteId = ". $r['id'];
	  $result = mysqli_query($conn, $sql_query);
	  $docs = array();
	  while($row = mysqli_fetch_array($result)) $docs[] = $row['tipo'];

	  $dif = array_diff($docsObrigatorios, $docs);
	  $cor = "";	  

	  if (!$dif && !$r["bloqueado"]) {
      $cor = "green-text";
    }
    else if (!$dif && $r["bloqueado"]){
      // desbloqueia
      $sql_query = "UPDATE clientes SET bloqueado = 0 WHERE id = ". $r['id'];
      if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
      $cor = "green-text";
    }
    else if ($dif && !$r["bloqueado"]){
      // bloqueia
      $sql_query = "UPDATE clientes SET bloqueado = 1, motivoBloqueio = 1 WHERE id = ". $r['id'];
      if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
      $cor = "red-text";
    } else if ($dif || $r["bloqueado"]) 
      $cor = "red-text";

    
    $sql_query = "SELECT * FROM documentos WHERE tipo = 'PROV' AND clienteId = ". $r['id'];
    $result = mysqli_query($conn, $sql_query);
    $docprov = array();
    while($row = mysqli_fetch_array($result)) $docprov[] = $row["dataUltimaModificacao"];
    if ((sizeof($docprov) > 0) && $dif){
      $hoje = new DateTime(date('Y-m-d H:i:s'));
      $validade = new DateTime($docprov[0]);
      $validade->modify('+1 day');                
      if ($validade < $hoje){
        $sql_query = "UPDATE clientes SET bloqueado = 1, motivoBloqueio = 1 WHERE id = ". $r['id'];
        if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
        $cor = "red-text";
      } else {
        $cor = "green-text";
      }
    }


    $sql_query = "SELECT * FROM documentos WHERE tipo = 'IR' AND clienteId = ". $r['id'];
    $result = mysqli_query($conn, $sql_query);
    $docir = array();
    while($row = mysqli_fetch_array($result)) $docir[] = $row["dataUltimaModificacao"];
    if (sizeof($docir) > 0){
      $vigencia = new DateTime(date('Y')."-05-01 00:00:00");
      $dataIr = new DateTime($docir[0]);
      if ($dataIr < $vigencia){                  
        $sql_query = "UPDATE clientes SET bloqueado = 1, motivoBloqueio = 2 WHERE id = ". $r['id'];
        if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
        $cor = "red-text";
      }
    }

    if ($r["cnh"] != ""){
      if (strtotime($r["cnhDataValidade"]) < strtotime(date('Y-m-d h:m:s'))) {
        $sql_query = "UPDATE clientes SET bloqueado = 1, motivoBloqueio = 2 WHERE id = ". $r['id'];
        if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
        $cor = "red-text";
      }
    }

    if ($r["vip"]) $cor = "amber-text";              


    $docprov = 
    $cor == "red-text" 
    ? 
      '<td><a class="link-acao modal-trigger green-text" href="modal2" data-acao="doc-prov" data-cliente-id="'.$r["id"].'"><i class="material-icons" title="Liberação por documento provisório">lock</i></a></td>' 
    : 
      '<td></td>';

		$ret .=
		  '<tr>
		  <td>'.$r["razaoSocial"].'</td>
		  <td>'.$r["email"].'</td>
		  <td>('.substr($r["telCelular"], 0, 2).') '.substr($r["telCelular"], 2, 5).'-'.substr($r["telCelular"], 7).' / ('.substr($r["telFixo"], 0, 2).') '.substr($r["telFixo"], 2, 4).'-'.substr($r["telFixo"], 6).'</td>
		  <td>'.$categoria.' - ' .$origem.'</td>
		  <th>'.number_format($limiteDisponivel,2,",",".").'</th>
		  <th><i class="material-icons '.$cor.' ">&#xE5CA;</i>   </th>

		  '.$docprov.'

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



