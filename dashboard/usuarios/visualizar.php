<?php

include "../core/database.php";
include "../includes/header.php";

$sql_query = sprintf("SELECT * FROM usuarios WHERE id = %s", $_GET['usuarioId']);
$result = mysqli_query($conn, $sql_query);

$rows = array();
while($row = mysqli_fetch_array($result)) $rows[] = $row;

foreach($rows as $r){
  $id = $r['id'];
  $nome = $r['nome'];
  $login = $r['login'];
  $email = $r['email'];
  $telefone = $r['telefone'];
  $tipo = $r['tipo'];
}

?>
<main>
  <div class="row">
    <div class="col s12">

    <h4 class="title-forms">Visualizar usuário <strong>[NOME_USUARIO]</strong></h4>

      
        <div class="row">          
            
            <h1> <?php echo $nome ?> </h1>
            <h1> <?php echo $login ?> </h1>
            <h1> <?php echo $email ?> </h1>
            <h1> <?php echo $telefone ?> </h1>
            <h1> <?php echo $tipo == 1 ? "Admin" : "Usuário" ?> </h1>          
          
        </div>


      
    </div>
  </div>
</main>


<?php
include "../includes/footer.php";
?>

<script type="text/javascript">  
  focco.alterarUsuarioFormPost();
</script>