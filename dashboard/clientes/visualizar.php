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
  $passaporte = $r['passaporte'];
  $rgDni = $r['rgDni'];
  $vip = $r['vip'];
  $origem = $r['origem'];
  $limiteOperacionalDia = $r["limiteOperacionalDia"];
  $limiteOperacionalAno = $r["limiteOperacionalAno"];
  $bloqueado = $r["bloqueado"];
  $motivoBloqueio = $r["motivoBloqueio"];
  $cnh = $r["cnh"];
  $cnhDataValidade = $r["cnhDataValidade"];
}



$sql_query = sprintf("SELECT tipo FROM documentos WHERE clienteId = %s", $_GET['clienteId']);
$result = mysqli_query($conn, $sql_query);
$docs = array();
while($row = mysqli_fetch_array($result)) $docs[] = $row['tipo'];


switch ($categoria) {
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

  default:
  $categoria = "Focco";
  $docsObrigatorios = array('CPF');
  break;
}

$sql_query = "SELECT tipo FROM documentos WHERE clienteId = ". $r['id'];
$result = mysqli_query($conn, $sql_query);
$docs = array();
while($row = mysqli_fetch_array($result)) $docs[] = $row['tipo'];
$dif = array_diff($docsObrigatorios, $docs);

$statOk = false;
$statWarn = false;

if (!$dif && !$bloqueado) $statOk = true;
if ($vip) $statWarn = true;

$sql_query = "SELECT * FROM documentos WHERE tipo = 'PROV' AND clienteId = ". $r['id'];
$result = mysqli_query($conn, $sql_query);
$docprov = array();
while($row = mysqli_fetch_array($result)) $docprov[] = $row["dataUltimaModificacao"];
if ((sizeof($docprov) > 0) && $dif){
  $hoje = new DateTime(date('Y-m-d H:i:s'));
  $validade = new DateTime($docprov[0]);
  $validade->modify('+1 day');
  if ($validade < $hoje){
    $sql_query = "UPDATE clientes SET bloqueado = 1 WHERE id = ". $r['id'];
    if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
    $statOk = false;
  } else {
    $sql_query = "UPDATE clientes SET bloqueado = 0 WHERE id = ". $r['id'];
    if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
    $statOk = true;
    $bloqueado = false;
  }
}



?>
<main class="clients">
  <div class="row">
    <div class="col s12">
      <div class="spacing"></div>

      <nav class="bg-blue">
        <div class="nav-wrapper">
          <div class="col s12">
            <a href="/dashboard/clientes/" class="breadcrumb">Clientes</a>
            <a href="#!" class="breadcrumb">Visualizar</a>
          </div>
        </div>
      </nav>

      <ul class="tabs">
        <li class="tab col s3">
          <a class="active left-align" href="#general-data">
            Dados Gerais
          </a>
        </li>

        <li class="tab col s3">
          <a class="left-align" href="#documents">
            Documentação
          </a>
        </li>

        <li class="tab col s3">
          <a class="left-align" href="#contact">
            Contato
          </a>
        </li>

        <li class="tab col s3">
          <a class="left-align" href="#documentsImages">
            Anexos
          </a>
        </li>

        <li class="tab col s3">
          <a class="left-align" href="#resAddress">
            Endereços
          </a>
        </li>

        <li class="tab col s3">
          <a class="left-align" href="#boletagemHistory">
            Histórico Boletagem
          </a>
        </li>


      </ul>

      <div class="spacing"></div>

      <div id="general-data">
        <div class="col s3">
          <div class="profile-user">
            <div class="profile-img">
              <img class="materialboxed" src="../images/user_placeholder.png">
            </div>
            <ul class="collection">
              <li class="collection-item alert success <?php echo $statOk ? "" : "hide" ?>">

                <i class="material-icons left">&#xE5CA;</i>

                Status: Válido para operações
              </li>
              <li class="collection-item alert warning <?php echo $statWarn ? "" : "hide" ?>">
                <i class="material-icons left">star_border</i> Cliente com status Vip Focco
              </li>
              <li class="collection-item alert error <?php echo $bloqueado ? "" : "hide" ?>">
                <p>
                  <i class="material-icons left">block</i>
                  Status: Cliente bloqueado.
                </p>
                <p>
                  <?php

                  switch ($motivoBloqueio) {
                    case 1:
                    echo "Documentação pendente";
                    break;
                    case 2:
                    echo "Documentação vencida";
                    break;

                    default:
                    echo "";
                    break;
                  }
                  ?>
                </p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col s9">
          <h5>ID: <?php echo $id ?> - <?php echo $nome ?></h5>

          <div class="spacing"></div>

          <div class="line-fields">

            <div class="input-field col s3">
              <input placeholder="<?php echo $categoria ?>" id="cliente_categoria" type="text" readonly>
              <label for="cliente_categoria">Categoria</label>
            </div>

            <div class="input-field col s3">
              <input placeholder="<?php
              switch ($origem) {
                case 1: echo "Matriz"; break;
                case 2: echo "Loja 1 "; break;
                default: echo ""; break;
              }
              ?>" id="cliente_origem"  type="text" readonly>
              <label for="cliente_origem">Origem do Cliente</label>
            </div>

            <div class="input-field col s3">
              <input placeholder="<?php echo $tipo == 'F' ? "Física" : "Jurídica" ?>" id="cliente_tipo" type="text" readonly>
              <label for="cliente_tipo">Pessoa Física / Jurídica</label>
            </div>

            <div class="input-field col s3">
              <input placeholder="<?php echo substr($cpfCnpj, 0, 3).'.'.substr($cpfCnpj, 3, 3).'.'.substr($cpfCnpj, 6, 3).'-'.substr($cpfCnpj, 9, 2) ?>" id="cliente_cpf" type="text" readonly>
              <label for="cliente_cpf">CPF/CNPJ</label>
            </div>

          </div>

          <div class="line-fields">

            <div class="input-field col s3">
              <input placeholder="<?php echo date_format(new DateTime($dataNascimentoAbertura), 'd/m/Y'); ?>" id="cliente_dataNascimento" type="text" readonly>
              <label for="cliente_dataNascimento">Data de Nascimento</label>
            </div>

            <div class="input-field col s3">
              <input placeholder="<?php echo substr($rgInscricaoEstadual, 0, 2).'.'.substr($rgInscricaoEstadual, 2, 3).'.'.substr($rgInscricaoEstadual, 5, 3)  ?>" id="cliente_RG" type="text" readonly>
              <label for="cliente_RG">R.G.</label>
            </div>

            <div class="input-field col s3">
              <input placeholder="<?php echo $rgOrgaoExpedidor ?>" id="cliente_orgao" type="text" readonly>
              <label for="cliente_orgao">Orgão Expedidor</label>
            </div>

            <div class="input-field col s3">
              <input placeholder="<?php echo date_format(new DateTime ($rgDataExpedicao), 'd/m/Y')  ?>" id="cliente_rg_data" type="text" readonly>
              <label for="cliente_rg_data">RG Data da Expedição</label>
            </div>
          </div>

          <div class="line-fields">
            <div class="input-field col s3">
              <input placeholder="<?php echo $cnh == '' ? "Não preenchido" : $cnh ?>" id="cliente_cnh" type="text" readonly>
              <label for="cliente_cnh">CNH</label>
            </div>

            <div class="input-field col s3">
              <input placeholder="<?php echo $cnhDataValidade == '' ? "Não preenchido" : date_format(new DateTime($cnhDataValidade), 'd/m/Y') ?>" id="cliente_cnh_data" type="text" readonly>
              <label for="cliente_cnh_data">CNH Data Validade</label>
            </div>

            <div class="input-field col s3">
              <input placeholder="<?php echo $passaporte == '' ? "Não preenchido" : $passaporte ?>" id="cliente_passaporte" type="text" readonly>
              <label for="cliente_passaporte">Passaporte</label>
            </div>

            <div class="input-field col s3">
              <input placeholder="<?php echo $rgDni =='' ? "Não preenchido" : $rgDni ?>" id="cliente_rgDNI" type="text" readonly>
              <label for="cliente_rgDNI">RG / D.N.I.</label>
            </div>
          </div>

          <div class="line-fields">
            <div class="input-field col s3">
              <input placeholder="<?php echo $sexo == 'M' ? "Masculino" : "Feminino" ?>" id="cliente_genero" type="text" readonly>
              <label for="cliente_genero">Gênero</label>
            </div>

            <div class="input-field col s3">
              <input placeholder="<?php
              switch ($estadoCivil) {
                case 0: echo "Não informado"; break;
                case 1: echo "Solteiro(a)"; break;
                case 2: echo "Casado(a) "; break;
                case 3: echo "Divorciado(a)"; break;
                case 4: echo "Viúvo(a)"; break;
                case 6: echo "Companheiro(a)"; break;
                default: echo ""; break;
              }
              ?>" id="cliente_estadoCivil" type="text" readonly>
              <label for="cliente_estadoCivil">Estado civil</label>
            </div>

            <?php
            if ($estadoCivil == 2){
              echo '
              <div class="input-field col s3">
                <input placeholder="'.$nomeConjuge.'" id="cliente_conjNome" type="text" readonly>
                <label for="cliente_conjNome">Nome do Cônjuge</label>
              </div>

              <div class="input-field col s3">
                <input placeholder="'.date_format(new DateTime ($dataNascimentoConjuge), 'd/m/Y').'" id="cliente_conjNome" type="text" readonly>
                <label for="cliente_conjNome">Data Nascimento do Cônjuge</label>
              </div>
              ';
            }
            ?>
          </div>

          <div class="line-fields">
            <div class="input-field col s3">
              <input placeholder="<?php echo $nomeMae ?>" id="cliente_mae" type="text" readonly>
              <label for="cliente_mae">Nome da Mãe</label>
            </div>

            <div class="input-field col s3">
              <input placeholder="<?php echo $nomePai ?>" id="cliente_pai" type="text" readonly>
              <label for="cliente_pai">Nome do Pai</label>
            </div>

            <div class="input-field col s3">
              <input placeholder="<?php echo $email ?>" id="cliente_email" type="text" readonly>
              <label for="cliente_email">E-mail</label>
            </div>

            <div class="input-field col s3">
              <input placeholder="<?php echo '('.substr($telFixo, 0, 2).') '.substr($telFixo, 2, 4).'-'.substr($telFixo, 6) ?>" id="cliente_telFixo" type="text" readonly>
              <label for="cliente_telFixo">Telefone Fixo</label>
            </div>
          </div>

          <div class="line-fields">
            <div class="input-field col s3">
              <input placeholder="<?php echo '('.substr($telCelular, 0, 2).') '.substr($telCelular, 2, 5).'-'.substr($telCelular, 7) ?>" id="cliente_telCel" type="text" readonly>
              <label for="cliente_telCel">Telefone Celular</label>
            </div>

            <div class="input-field col s3">
              <input placeholder="<?php echo $contraSenha == '' ? "Não preenchida" : $contraSenha ?>" id="cliente_contraSenha" type="text" readonly>
              <label for="cliente_contraSenha">Contra Senha do Cartão Pré-Pago</label>
            </div>

            <div class="input-field col s3">
              <input placeholder="<?php echo $observacoes == '' ? "Não há observacoes" : $observacoes ?>" id="cliente_observacoes" type="text" readonly>
              <label for="cliente_observacoes">Observações</label>
            </div>

            <div class="input-field col s2">
              <input placeholder="<?php echo $ofertasPorEmail == '1' ? "Sim" : "Não" ?>" id="cliente_offerMail" type="text" readonly>
              <label for="cliente_offerMail">Ofertas por e-mail</label>
            </div>

            <div class="input-field col s2">
              <input placeholder="<?php echo $infoWhatsapp == '1' ? "Sim" : "Não" ?>" id="cliente_whatsapp" type="text" readonly>
              <label for="cliente_whatsapp">Infos pelo Whatsapp</label>
            </div>

            <div class="input-field col s2">
              <input placeholder="<?php echo $vip == '1' ? "Sim" : "Não" ?>" id="cliente_vip" type="text" readonly>
              <label for="cliente_vip">VIP Focco</label>
            </div>

            <div class="input-field col s3">
              <input placeholder="<?php echo number_format($limiteOperacionalAno,2,",",".") ?>" id="cliente_limite" type="text" readonly>
              <label for="cliente_limite">Limite Autorizado (Anual)</label>
            </div>

          </div>

        </div>
      </div>

      <div id="documents"></div>
      <div id="contact"></div>
      <div id="documentsImages"></div>
      <div id="resAddress"></div>
      <div id="boletagemHistory"></div>





      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>   <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>





      <div class="spacing"></div>
      <table class="responsive-table table-visualization">
        <thead>
          <tr>
            <th data-field="campos" colspan="2">Dados do cliente</th>
          </tr>
        </thead>
        <tbody>


        </tbody>
      </table>
      <div class="spacing"></div>
      <p class="title-forms">Documentos do cliente <strong><?php echo $nome ?></strong></p><hr>

      <div class="docs docs-img">
        <?php if (count($docs) < 1) { ?>
        <div class="row">
          <div class="col s12">
            <p>
              Cliente ainda não possui documentos cadastrados
            </p>
          </div>
        </div>
        <?php }; ?>

        <?php if (in_array("CPF", $docs)) { ?>
        <div class="col s4">
          <figure>
            <img class="responsive-img"  alt="doc-cpf" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-cpf.jpg" data-zoom-image="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-cpf.jpg"/>
            <figcaption>CPF/RG/CNH</figcaption>
          </figure>
        </div>
        <?php }; ?>

        <?php if (in_array("RG", $docs)) { ?>
              <!--<div class="col s4">
                <figure>
                  <img class="responsive-img"  alt="doc-rg" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-rg.jpg" data-zoom-image="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-rg.jpg" width="350px" height="500px" />
                  <figcaption>RG</figcaption>
                </figure>
              </div>-->
              <?php }; ?>

              <div class="col s12">
                <br>
              </div>

              <?php if (in_array("CR", $docs)) { ?>
              <div class="col s4">
                <figure>
                  <img class="responsive-img"  alt="doc-cr" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-cr.jpg" data-zoom-image="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-cr.jpg" width="350px" height="500px" />
                  <figcaption>Comprovante de residência</figcaption>
                </figure>
              </div>
              <?php }; ?>

              <?php if (in_array("FF", $docs)) { ?>
              <div class="col s4">
                <figure>
                  <img class="responsive-img"  alt="doc-ff" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-ff.jpg" data-zoom-image="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-ff.jpg" width="350px" height="500px" />
                  <figcaption>Ficha Cadastral Focco</figcaption>
                </figure>
              </div>
              <?php }; ?>

              <div class="col s12">
                <br>
              </div>

              <?php if (in_array("IR", $docs)) { ?>
              <div class="col s4">
                <figure>
                  <img class="responsive-img"  alt="doc-ir" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-ir.jpg" data-zoom-image="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-ir.jpg" width="350px" height="500px" />
                  <figcaption>Imposto de Renda</figcaption>
                </figure>
              </div>
              <?php }; ?>

              <?php if (in_array("CA", $docs)) { ?>
              <div class="col s4">
                <figure>
                  <img class="responsive-img"  alt="doc-ca" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-ca.jpg" data-zoom-image="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-ca.jpg" width="350px" height="500px" />
                  <figcaption>Cartão de Assinatura</figcaption>
                </figure>
              </div>
              <?php }; ?>
              <div class="col s12">
                <br>
              </div>
              <?php if (in_array("CPS", $docs)) { ?>
              <div class="col s4">
                <figure>
                  <img class="responsive-img"  alt="doc-cps" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-cps.jpg" data-zoom-image="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-cps.jpg" width="350px" height="500px" />
                  <figcaption>Contrato de Prestação de Serviços</figcaption>
                </figure>
              </div>
              <?php }; ?>

              <?php if (in_array("PV", $docs)) { ?>
              <div class="col s4">
                <figure>
                  <img class="responsive-img"  alt="doc-pv" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-pv.jpg" data-zoom-image="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-pv.jpg" width="350px" height="500px" />
                  <figcaption>Procuração para a Vision</figcaption>
                </figure>
              </div>
              <?php }; ?>
            </div>

            <?php

            $sql_query = sprintf("SELECT * FROM enderecoscliente WHERE clienteId = %s", $_GET['clienteId']);
            $result = mysqli_query($conn, $sql_query);

            $rows = array();
            while($row = mysqli_fetch_array($result)) $rows[] = $row;

            foreach($rows as $r){

              $tipo = $r['tipo'];
              $cep = $r['cep'];
              $endereco = $r['endereco'];
              $numero = $r['numero'];
              $complemento = $r['complemento'];
              $bairro = $r['bairro'];
              $cidade = $r['cidade'];
              $estado = $r['estado'];
              $pais = $r['pais'];

              echo
              '<table class="responsive-table">
              <thead>
                <tr>
                  <th colspan="2">Endereço '.($tipo == 2 ? "Entrega" : "Residencial").'</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>CEP</td>
                  <td>'.substr($cep, 0, 5).'-'.substr($cep, 5, 3).'</td>
                </tr>
                <tr>
                  <td>Logradouro</td>
                  <td>'.$endereco.'</td>
                </tr>
                <tr>
                  <td>Número</td>
                  <td>'.$numero.'</td>
                </tr>
                <tr>
                  <td>Complemento</td>
                  <td>'.$complemento.'</td>
                </tr>
                <tr>
                  <td>Bairro</td>
                  <td>'.$bairro.'</td>
                </tr>
                <tr>
                  <td>Cidade</td>
                  <td>'.$cidade.'</td>
                </tr>
                <tr>
                  <td>Estado</td>
                  <td>'.$estado.'</td>
                </tr>
                <tr>
                  <td>País</td>
                  <td>'.$pais.'</td>
                </tr>
              </tbody>
            </table>';
          };
          ?>

        </div>
      </div>
    </div>
  </main>

  <?php
  include "../includes/footer.php";
  ?>

  <script type="text/javascript">
    $("img").elevateZoom({easing : true});
  </script>