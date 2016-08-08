<?php

include "../includes/header.php";
include "../core/database.php";

$sql_query = "SELECT * FROM clientes ORDER BY dataCadastro DESC LIMIT 15;";
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


        <a class="waves-effect waves-light btn bg-blue right" href="/dashboard/clientes/adicionar">Adicionar cliente <i class="material-icons right">&#xE7FE;</i>
        </a>
      </div>

      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div>

      <style type="text/css">
        .cor-vermelha{ color: #FF0000; }
        .cor-verde{ color: #00D300; }
        .cor-amarela { color: #FFFF00; }
      </style>

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
                  $docsObrigatorios = array('CPF', 'RG', 'CR', 'FF', 'IR', 'CA', 'CPS', 'PV');
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

                $cor = "cor-verde";

              } else if (in_array("CPF", $dif) || in_array("RG", $dif)){

                $cor = "cor-vermelha";

              } else {

                $cor = "cor-amarela";

              }





              echo
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
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</main>

<?php
include '../includes/footer.php';
?>

<script>
  focco.buscarClienteFormPost();
</script>