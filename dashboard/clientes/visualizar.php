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
      <div class="row">
      <br>
      <a href="/dashboard/clientes/"><i class="material-icons left">&#xE5C4;</i> Voltar para tela de Clientes</a>
      <p class="title-forms">Visualizar cliente <strong><?php echo $nome ?></strong></p>

        <table class="responsive-table">
          <thead>
            <tr>
              <th data-field="campos" colspan="2">Dados do cliente</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Número do cliente</td>
              <td><?php echo $id ?></td>
            </tr>
            <tr>
              <td>Categoria</td>
              <td>
                <?php
                
                switch ($categoria) {
                  case 1: echo "Focco"; break;
                  case 2: echo "FX53 Simplificado"; break;
                  case 3: echo "FX53 Premier"; break;
                  case 4: echo "FX53 Plus"; break;
                  default: echo ""; break;
                }

                ?>
              </td>
            </tr>
            <tr>
              <td>Nome</td>
              <td><?php echo $nome ?></td>
            </tr>
            <tr>
              <td>Tipo de pessoa </td>
              <td><?php echo $tipo == 'F' ? "Física" : "Jurídica" ?> </td>
            </tr>
            <tr>
              <td>CPF/CNPJ</td>
              <td><?php echo $cpfCnpj ?></td>
            </tr>
            <tr>
              <td>Data de Nascimento</td>
              <td><?php echo date_format(new DateTime($dataNascimentoAbertura), 'd/m/yyyy'); ?></td>
            </tr>
            <tr>
              <td>RG</td>
              <td><?php echo $rgInscricaoEstadual  ?></td>
            </tr>
            <tr>
              <td>Orgão Expedidor</td>
              <td><?php echo $rgOrgaoExpedidor ?></td>
            </tr>
            <tr>
              <td>RG Data da Expedição</td>
              <td><?php echo $rgDataExpedicao ?></td>
            </tr>
            <tr>
              <td>Gênero</td>
              <td><?php echo $sexo == 'M' ? "Masculino" : "Feminino" ?></td>
            </tr>
            <tr>
              <td>Nacionalidade</td>
              <td><?php echo $nacionalidade ?></td>
            </tr>
            <tr>
              <td>Estado civil</td>
              <td><?php echo $estadoCivil ?> </td>
            </tr>
            <tr>
              <td>Nome do Cônjuge</td>
              <td><?php echo $nomeConjuge ?></td>
            </tr>
            <tr>
              <td>Data Nascimento Cônjuge</td>
              <td><?php echo $dataNascimentoConjuge ?></td>
            </tr>
            <tr>
              <td>Nome da Mãe</td>
              <td><?php echo $nomeMae ?></td>
            </tr>
            <tr>
              <td>Nome do Pai</td>
              <td><?php echo $nomePai ?></td>
            </tr>
            <tr>
              <td>E-mail</td>
              <td><?php echo $email ?></td>
            </tr>
            <tr>
              <td>Telefone Fixo</td>
              <td><?php echo $telFixo ?></td>
            </tr>
            <tr>
              <td>Telefone Celular</td>
              <td><?php echo $telCelular ?></td>
            </tr>
            <tr>
              <td>Contra Senha do Cartão Pré-Pago</td>
              <td><?php echo $contraSenha ?></td>
            </tr>
            <tr>
              <td>Observações</td>
              <td><?php echo $observacoes ?></td>
            </tr>
            <tr>
              <td>Ofertas por e-mail</td>
              <td><?php echo $ofertasPorEmail ?></td>
            </tr>
            <tr>
              <td>Infos pelo Whatsapp</td>
              <td><?php echo $infoWhatsapp ?></td>
            </tr>


          </tbody>
        </table>

        <br>
        <p>Documentos do cliente <strong><?php echo $nome ?></strong></p><hr>
        <div class="docs">
          <img alt="doc-cpf" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-cpf.png" width="200px" height="200px" />
          <img alt="doc-rg" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-rg.png" width="200px" height="200px" />
          <img alt="doc-cr" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-cr.png" width="200px" height="200px" />
          <img alt="doc-ff" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-ff.png" width="200px" height="200px" />
          <img alt="doc-ir" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-ir.png" width="200px" height="200px" />
          <img alt="doc-ca" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-ca.png" width="200px" height="200px" />
          <img alt="doc-cps" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-cps.png" width="200px" height="200px" />
          <img alt="doc-pv" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-pv.png" width="200px" height="200px" />
        </div>

        <br>
        <p>enderecos</p><hr>
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


