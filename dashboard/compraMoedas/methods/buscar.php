<?php

	include "../../core/database.php";
	include "../../core/functions.php";

	$di = TratarData($_POST["search"]);
  $df = TratarDataFim($_POST["search"]);


  $rows = array();
  $sql_query = sprintf("SELECT * FROM compras WHERE data between '%s' and '%s'", $di, $df);

  $result = mysqli_query($conn, $sql_query);    
  while($row = mysqli_fetch_array($result)) $rows[] = $row;
	
  $ret ="";
	foreach($rows as $r){

    $usuarioId = $r["usuarioId"];
    $data = $r["data"];
    $moeda = $r["moeda"];
    $caixaId = $r["caixaId"];
    $quantidade = $r["quantidade"];
    $taxa = $r["taxa"];
    $total = $r["total"];
    $fechamento = $r["fechamento"];
    $entrega = $r["entrega"];

    $usuarios = array();
    $sql_query = sprintf("SELECT * FROM usuarios WHERE id = %s", $usuarioId);
    $result = mysqli_query($conn, $sql_query);
    while($row = mysqli_fetch_array($result)) $usuarios[] = $row;


    switch ($caixaId) {
      case 1: $caixa = "Focco"; break;
      case 2: $caixa = "Focco X"; break;
      case 3: $caixa = "FX 53"; break;      
    }



		$ret .=
		  '<tr>
		  <td>'.date('d/m/y h:m:s', strtotime($data)).'</td>
		  <td>'.$usuarios[0]["nome"].'</td>
		  <td>'.$moeda.'</td>
		  <td>'.$caixa.'</td>
		  <th>'.number_format($quantidade,2,",",".").'</th>
      <th>'.number_format($taxa,5,",",".").'</th>
      <th>'.number_format($total,2,",",".").'</th>
      <td>'.$fechamento.'</td>
      <td>'.$entrega.'</td>
      </tr>		  

		  ';
	}

	echo $ret;
?>



