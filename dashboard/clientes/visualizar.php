<?php

include "../core/database.php";
include "../includes/header.php";

$sql_query = sprintf("SELECT * FROM clientes WHERE id = %s", $_GET['clienteId']);
$result = mysqli_query($conn, $sql_query);

$rows = array();
while($row = mysqli_fetch_array($result)) $rows[] = $row;

foreach($rows as $r){
  $id = $r['id'];
  $categoria = $r['categoria'];
  $nome = $r['razaoSocial'];
  $tipo = $r['tipoPessoa'];
  $cpfCnpj = $r['cpfCnpj'];
  $dataNascimentoAbertura = $r['dataNascimentoAbertura'];
  $rgInscricaoEstadual = $r['rgInscricaoEstadual'];
  $rgOrgaoExpedidor = $r['rgOrgaoExpedidor'];
  $rgDataExpedicao = $r['rgDataExpedicao'];
  $sexo = $r['sexo'];
  $nacionalidade = $r['nacionalidade'];
  $estadoCivil = $r['estadoCivil'];
  $nomeConjuge = $r['nomeConjuge'];
  $dataNascimentoConjuge = $r['dataNascimentoConjuge'];
  $nomeMae = $r['nomeMae'];
  $nomePai = $r['nomePai'];
  $email = $r['email'];
  $telFixo = $r['telFixo'];
  $telCelular = $r['telCelular'];
  $contraSenha = $r['contraSenha'];
  $observacoes = $r['observacoes'];
  $ofertasPorEmail = $r['ofertasPorEmail'];
  $infoWhatsapp = $r['infoWhatsapp'];  
}

?>
<main>
  <div class="row">
    <div class="col s12">

      <h4 class="title-forms">Visualizar cliente <strong><?php echo $nome ?></strong></h4>


      
        <div class="row">


          <h1> <?php echo $id ?></h1>

          <h1>
          <?php 
            switch ($categoria) {
              case 1:
                echo "Focco";
                break;
              case 2:
                echo "Vision";
                break;                
              case 3:
                echo "PF Premium";
                break;
              default:
                echo "";
                break;
            }
          ?></h1>

          <h1><?php echo $nome ?></h1>

          <h1><?php echo $tipo == 'F' ? "Fisica" : "Jurídica" ?> </h1>

          <h1><?php echo $cpfCnpj ?></h1>

          <h1><?php echo date_format($dataNascimentoAbertura, 'd/m/y'); ?></h1>

          <h1><?php echo $rgInscricaoEstadual  ?></h1>

          <h1><?php echo $rgOrgaoExpedidor ?></h1>

          <h1><?php echo $rgDataExpedicao ?></h1>

          <h1><?php echo $sexo == 'M' ? "Masculino" : "Feminino" ?></h1>

          <h1><?php echo $nacionalidade ?></h1>

          <h1><?php echo $estadoCivil ?> </h1>

          <h1><?php echo $nomeConjuge ?></h1>

          <h1><?php echo $dataNascimentoConjuge ?></h1>

          <h1><?php echo $nomeMae ?></h1>

          <h1><?php echo $nomePai ?></h1>

          <h1><?php echo $email ?></h1>

          <h1><?php echo $telFixo ?></h1>

          <h1><?php echo $telCelular ?></h1>

          <h1><?php echo $contraSenha ?></h1>

          <h1><?php echo $observacoes ?></h1>

          <h1><?php echo $ofertasPorEmail ?></h1>

          <h1><?php echo $infoWhatsapp ?></h1>

          <br>
          <h1>enderecos</h1><hr>
          <?php          

          $sql_query = sprintf("SELECT * FROM enderecoscliente WHERE clienteId = %s", $_GET['clienteId']);
          $result = mysqli_query($conn, $sql_query);

          $rows = array();
          while($row = mysqli_fetch_array($result)) $rows[] = $row;  

          foreach($rows as $r){           

            $tipo = $r['tipo'];
            $cep = $r['cep'];
            $endereco = $r['endereco'];
            $complemento = $r['complemento'];
            $bairro = $r['bairro'];
            $cidade = $r['cidade'];
            $estado = $r['estado'];
            $pais = $r['pais']; 

            echo '<h2>'.($tipo == 2 ? "Entrega" : "Residencial").'</h2>';
            echo '<h2>'.$endereco.'</h2>';
            echo '<h2>'.$complemento.'</h2>';
            echo '<h2>'.$bairro.'</h2>';
            echo '<h2>'.$cidade.'</h2>';
            echo '<h2>'.$estado.'</h2>';
            echo '<h2>'.$pais.'</h2>';

            echo '<hr>';

          }
          ?>

    
    




        </div>
      
    </div>
  </div>
</main>


<?php
include "../includes/footer.php";
?>


