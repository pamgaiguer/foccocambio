<?php 

	include "../includes/header.php";


	include "../core/database.php";
	
	$sql_query = sprintf("SELECT * FROM usuarios WHERE tipo > %s", $_SESSION['currentUser']['tipo']);
	$result = mysql_query($sql_query, $conn);
	

	$rows = array();
	while($row = mysql_fetch_array($result)) $rows[] = $row;
?>


<a href="/dashboard/usuarios/adicionar">Adicionar usuário</a>

<table class="table table-responsive">
	<thead>
	<tr>
		<th>Login</th>
		<th>Nome</th>
		<th>Email</th>
		<th>Telefone</th>
		<th></th>
	</tr>
	</thead>
<tbody>
<?php


	foreach($rows as $r){		
		echo 
		'<tr>
			<td>'.$r["login"].'</td>
			<td>'.$r["nome"].'</td>
			<td>'.$r["email"].'</td>
			<td>'.$r["telefone"].'</td>
			<td><a href="/dashboard/usuarios/alterar?usuarioId='.$r["id"].'"><span class="fa fa-file-text-o"></span></a></td>
		</tr>';
	}

	
		


	include "../includes/footer.php";

?>

</tbody>

</table>
