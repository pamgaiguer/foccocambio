<?php

include "../includes/header.php";
include "../core/database.php";


if (isset($_GET["clienteId"]) && $_GET["clienteId"] > 0) {
  
  $sql_query = "SELECT * FROM clientes WHERE id = ".$_GET["clienteId"];
  $result = mysqli_query($conn, $sql_query);
  $rows = array();
  while($row = mysqli_fetch_array($result)) $rows[] = $row;
  $ret = "";

}


?>
<main>
  <div class="row">
    <div class="col s12">
      <h4>Boletagem</h4>
      <blockquote>
        Área para boletagem - operações de compra e venda de moedas dos clientes cadastrados e válidos.
      </blockquote>

      <div class="section">
        <div class="row">
          <div class="col s4">

            <form id="form-busca-boletagem">
              <div class="file-path-wrapper">
                <div id="validacaoCpf"></div>
                <input id="input-cpfcnpj" name="cpfCnpj" type="search" required/>
                <button class="btn bg-blue" type="submit" name="action">
                  Buscar CPF / CNPJ
                  <i class="material-icons right">&#xE8B6;</i>
                </button>
              </div>
            </form>

          </div>
        </div>

        <a id="link-adicionar-cliente" class="btn bg-blue right disabled" data-cpf="a" data-href="/dashboard/clientes/adicionar">Adicionar cliente <i class="material-icons right">&#xE7FE;</i></a>


      </div>


      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>

      <table class="striped responsive-table">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Tipo de Cliente</th>
            <th>Limite Disponível</th>
            <th>Válido?</th>
            <th></th>
            <th>Visualizar</th>
            <th>Boletar</th>
          </tr>
        </thead>
        <tbody id="table-body-boletagem">
          <?php 
            if (isset($_GET["clienteId"]) && $_GET["clienteId"] > 0){

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
                if ($r["bloqueioManual"]) $cor = "red-text";

                $docprov = 
                $cor == "red-text" 
                ? 
                  '<td><a class="link-acao modal-trigger green-text" href="modal2" data-acao="doc-prov" data-cliente-id="'.$r["id"].'"><i class="material-icons" title="Liberação por documento provisório">lock</i></a></td>' 
                : 
                  '<td></td>';

                $boletar = "";
                if ($cor != "red-text")
                  $boletar = '<a class="link-acao btn-floating waves-effect waves-light" data-acao="boletar" data-cliente-id="'.$r["id"].'" href="/dashboard/boletagem/adicionar?clienteId='.$r["id"].'" data-href="/dashboard/boletagem/adicionar?clienteId='.$r["id"].'"><i class="material-icons" title="Boletar cliente">&#xE8B0;</i></a>';

                
                $ret .=
                  '<tr>
                  <td>'.$r["razaoSocial"].'</td>
                  <td>'.$r["email"].'</td>
                  <td>('.substr($r["telCelular"], 0, 2).') '.substr($r["telCelular"], 2, 5).'-'.substr($r["telCelular"], 7).'</td>
                  <td>'.$categoria.' - ' .$origem.'</td>
                  <th>'.number_format($limiteDisponivel,2,",",".").'</th>
                  <th><i class="material-icons '.$cor.' ">&#xE5CA;</i>   </th>'.$docprov.'
                  <td class="center"><a class="link-acao" data-acao="visualizar" data-cliente-id="'.$r["id"].'" href="/dashboard/clientes/visualizar?clienteId='.$r["id"].'" data-href="/dashboard/clientes/visualizar?clienteId='.$r["id"].'"><i class="material-icons" title="Visualizar cliente">&#xE85D;</i></a></td>


                  <td class="center">'.$boletar.'</td>
                  </tr>';
              }

              echo $ret;
            }

            
          ?>
        </tbody>
        </table>
      </div>
    </div>
  </div>
</main>


<div id="modal2" class="modal">
  <div class="modal-content">
    <h4>Autenticação</h4>
    <p>Informe as credenciais de administrador para desbloquear o cliente provisóriamente.</p>
    <div class="">
      <label for="login" data-error="Preencha corretamente">Login</label>
      <input id="login" type="text" class="validate">
    </div>
    <div class="">
      <label for="senha">Senha</label>
      <input id="senha" type="password" class="validate">
    </div>
    <div class="section">
      <div id="form-erro" class="center red-text"></div>
    </div>
  </div>
  <div class="modal-footer">
    <a id="modal-confirm2" class="modal-action btn">
      <i class="material-icons right">&#xE86C;</i>
      Confirmar
    </a>

    <a id="modal-cancel2" class="modal-action modal-close btn red darken-1 white">
      <i class="material-icons right">&#xE5C9;</i>
      Cancelar
    </a>
  </div>
</div>

<?php
include '../includes/footer.php';
?>

<script type="text/javascript">
  focco.indexBoletagem();
</script>