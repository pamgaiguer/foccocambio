<?php

include "../includes/header.php";
include "../core/database.php";

$sql_query = "SELECT * FROM clientes WHERE ativo = 1 ORDER BY dataCadastro DESC LIMIT 15;";
$result = mysqli_query($conn, $sql_query);


$rows = array();
while($row = mysqli_fetch_array($result)) $rows[] = $row;

?>
<main>
  <div class="row">
    <div class="col s12">
      <h4>Clientes</h4>
      <blockquote>
        Área para cadastro de clientes Focco (PF e PJ).
      </blockquote>

      <div class="section">
        <div class="row">
          <div class="col s4">

            <form id="form-busca-clientes">
              <div class="file-path-wrapper">
                <div id="validacaoCpf"></div>
                <input id="input-cpfcnpj" name="cpfCnpj" type="search" required/>
                <button class="btn waves-effect waves-light bg-blue" type="submit" name="action">
                  Buscar CPF / CNPJ
                  <i class="material-icons right">&#xE8B6;</i>
                </button>
              </div>
            </form>

          </div>
        </div>

<!--         <ul class="black-text">
          <li>
            Nesta tela, os cadastros devem ter cor de identificação (em relação aos documentos):<br>
            <span class="green-text">Verde</span> para cadastro OK <br>
            <span class="amber-text">Amarelo</span> para cadastro com atenção <br>
            <span class="red-text">Vermelho</span> para cadastro inválido <br>
            <span class="light-blue-text text-darken-4">Azul</span> se aceita receber oferta por facebook
          </li>
        </ul> -->


        <a id="link-adicionar-cliente" class="waves-effect waves-light btn bg-blue right" data-cpf="a" data-href="/dashboard/clientes/adicionar">Adicionar cliente <i class="material-icons right">&#xE7FE;</i>
        </a>
      </div>

      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div>

        <table class="striped responsive-table">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Telefone</th>
              <th>Tipo de Cliente</th>
              <th>Limite Disponível</th>
              <th>Válido?</th>
              <th class="center">Visualizar</th>
              <th class="center">Editar</th>
              <th class="center">Excluir</th>
            </tr>
          </thead>
          <tbody id="table-body-clientes">
            <?php

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

              $sql_query = "SELECT * FROM documentos WHERE tipo = 'PROV' AND clienteId = ". $r['id'];
              $result = mysqli_query($conn, $sql_query);
              $docs = array();
              while($row = mysqli_fetch_array($result)) $docs[] = $row["dataUltimaModificacao"];

              var_dump($docs);


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
                $cor = "red-text";
              }
              else if ($dif && !$r["bloqueado"]){
                // bloqueia
                $sql_query = "UPDATE clientes SET bloqueado = 1 WHERE id = ". $r['id'];
                if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
                $cor = "red-text";
              } else if ($dif || $r["bloqueado"]) 
                $cor = "red-text";


              if ($r["vip"]) $cor = "amber-text";

              

              echo
              '<tr>
              <td>'.$r["razaoSocial"].'</td>
              <td>'.$r["email"].'</td>
              <td>'.$r["telCelular"].' / '.$r["telFixo"].'</td>
              <td>'.$categoria.'</td>
              <th>Em desenvolvimento...</th>

              <th><i class="material-icons '.$cor.' ">&#xE5CA;</i>   </th>

              <td class="center"><a class="link-acao modal-trigger" href="modal1" data-acao="visualizar" data-cliente-id="'.$r["id"].'" data-href="/dashboard/clientes/visualizar?clienteId='.$r["id"].'"><i class="material-icons" title="Visualizar cliente">&#xE85D;</i></a></td>
              <td class="center"><a class="link-acao modal-trigger" href="modal1" data-acao="alterar" data-cliente-id="'.$r["id"].'" data-href="/dashboard/clientes/alterar?clienteId='.$r["id"].'"><i class="material-icons" title="Editar cliente">&#xE3C9;</i></a></td>
              <td class="center"><a class="link-acao modal-trigger" href="modal1" data-acao="excluir" data-cliente-id="'.$r["id"].'" data-href="/dashboard/clientes/excluir?clienteId='.$r["id"].'"><i class="material-icons" title="Excluir cliente">&#xE92B;</i></a></td>
            </tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</main>

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Excluir cliente</h4>
    <p>Deseja excluir o cliente selecionado?</p>
  </div>
  <div class="modal-footer">
    <a id="modal-confirm" class="modal-action modal-close waves-effect waves-light btn">
      <i class="material-icons right">&#xE86C;</i>
        Confirmar
    </a>

    <a id="modal-cancel" class="modal-action modal-close waves-effect waves-light btn red darken-1 white">
      <i class="material-icons right">&#xE5C9;</i>
      Cancelar
    </a>
  </div>
</div>


<?php
include '../includes/footer.php';
?>

<script>
  focco.indexCliente();
</script>