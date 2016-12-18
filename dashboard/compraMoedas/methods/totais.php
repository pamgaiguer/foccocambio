<?php

	include "../../core/database.php";
	include "../../core/functions.php";

	$di = TratarData($_POST["search"]);
  $df = TratarDataFim($_POST["search"]);


  $rows = array();
  $sql_query = sprintf("SELECT sum(quantidade) quantidade, sum(total) total, (sum(total) / sum(quantidade)) taxa from compras WHERE data between '%s' and '%s'", $di, $df);

  $result = mysqli_query($conn, $sql_query);    
  while($row = mysqli_fetch_array($result)) $rows[] = $row;
	
  $ret = array();
	foreach($rows as $r){
    
    $quantidade = $r["quantidade"];
    $total = $r["total"];
    $taxa = $r["taxa"];

		$ret[] = floatval($quantidade);
    $ret[] = floatval($total);
    $ret[] = floatval($taxa);

	}

	echo json_encode($ret);
?>



