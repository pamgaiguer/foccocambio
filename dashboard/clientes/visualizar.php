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
}


$sql_query = sprintf("SELECT tipo FROM documentos WHERE clienteId = %s", $_GET['clienteId']);
$result = mysqli_query($conn, $sql_query);
$docs = array();
while($row = mysqli_fetch_array($result)) $docs[] = $row['tipo'];

?>
<main>
  <div class="row">
    <div class="col s12">
      <div class="spacing"></div>
      <a class="btn waves-effect waves-light bg-blue" href="/dashboard/clientes/"><i class="material-icons left">&#xE5C4;</i> Voltar para tela de Clientes</a>
      <div class="spacing"></div>
      <p class="title-forms">Visualizar cliente <strong><?php echo $nome ?></strong></p>

      <div class="alert success">
        <p>Status: Válido para operações</p>
      </div>
      <div class="alert warning">
        <p>Status: Verificar os documentos do cliente</p>
      </div>
      <div class="alert error">
        <p>Status: Cliente bloqueado. Ver motivo abaixo.</p>
      </div>

      <div class="spacing"></div>
      <table class="responsive-table table-visualization">
        <thead>
          <tr>
            <th data-field="campos" colspan="2">Dados do cliente</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ID do cliente</td>
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
            <td>Origem do cliente</td>
            <td>
              <?php
              switch ($origem) {
                case 1: echo "Matriz"; break;
                case 2: echo "Loja 1 "; break;
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
            <td><?php echo substr($cpfCnpj, 0, 3).'.'.substr($cpfCnpj, 3, 3).'.'.substr($cpfCnpj, 6, 3).'-'.substr($cpfCnpj, 9, 2) ?></td>
          </tr>
          <tr>
            <td>Data de Nascimento</td>
            <td><?php echo date_format(new DateTime($dataNascimentoAbertura), 'd/m/Y'); ?></td>
          </tr>
          <tr>
            <td>R.G.</td>
            <td><?php echo substr($rgInscricaoEstadual, 0, 2).'.'.substr($rgInscricaoEstadual, 2, 3).'.'.substr($rgInscricaoEstadual, 5, 3)  ?></td>
          </tr>
          <tr>
            <td>Orgão Expedidor</td>
            <td><?php echo $rgOrgaoExpedidor ?></td>
          </tr>
          <tr>
            <td>Data da Expedição</td>
            <td><?php echo date_format(new DateTime ($rgDataExpedicao), 'd/m/Y')  ?></td>
          </tr>
          <tr>
            <td>Passaporte</td>
            <td><?php echo $passaporte ?></td>
          </tr>
          <tr>
            <td>RG / D.N.I.</td>
            <td><?php echo $rgDni ?></td>
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
            <td>
              <?php
              switch ($estadoCivil) {
                case 1: echo "Solteiro(a)"; break;
                case 2: echo "Casado(a) "; break;
                case 3: echo "Divorciado(a)"; break;
                case 4: echo "Viúvo(a)"; break;
                case 6: echo "Companheiro(a)"; break;
                default: echo ""; break;
              }
              ?>
            </td>
          </tr>
          <?php
          if ($estadoCivil == 2){
            echo '
            <tr>
              <td>Nome do Cônjuge</td>
              <td>'.$nomeConjuge.'</td>
            </tr>
            <tr>
              <td>Data Nascimento Cônjuge</td>
              <td>'.date_format(new DateTime ($dataNascimentoConjuge), 'd/m/Y').'</td>
            </tr>';
          }
          ?>
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
            <td><?php echo '('.substr($telFixo, 0, 2).') '.substr($telFixo, 2, 4).'-'.substr($telFixo, 6) ?></td>
          </tr>
          <tr>
            <td>Telefone Celular</td>
            <td><?php echo '('.substr($telCelular, 0, 2).') '.substr($telCelular, 2, 5).'-'.substr($telCelular, 7) ?></td>
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
            <td><?php echo $ofertasPorEmail == '1' ? "Sim" : "Não" ?></td>
          </tr>
          <tr>
            <td>Infos pelo WhatsApp</td>
            <td><?php echo $infoWhatsapp == '1' ? "Sim" : "Não" ?></td>
          </tr>
          <tr>
            <td>Limite autorizado (diário)</td>
            <td><?php echo number_format($limiteOperacionalDia,2,",",".") ?></td>
          </tr>
          <tr>
            <td>Limite autorizado (anual)</td>
            <td><?php echo number_format($limiteOperacionalAno,2,",",".") ?></td>
          </tr>
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
                <img class="responsive-img"  alt="doc-cpf" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-cpf.png"/>
                <figcaption>CPF</figcaption>
              </figure>
            </div>
            <?php }; ?>

            <?php if (in_array("RG", $docs)) { ?>
              <div class="col s4">
                <figure>
                  <img class="responsive-img"  alt="doc-rg" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-rg.png" width="350px" height="500px" />
                  <figcaption>RG</figcaption>
                </figure>
              </div>
              <?php }; ?>

              <?php if (in_array("CR", $docs)) { ?>
                <div class="col s4">
                  <figure>
                    <img class="responsive-img"  alt="doc-cr" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-cr.png" width="350px" height="500px" />
                    <figcaption>Comprovante de residência</figcaption>
                  </figure>
                </div>
                <?php }; ?>

                <?php if (in_array("FF", $docs)) { ?>
                  <div class="col s4">
                    <figure>
                      <img class="responsive-img"  alt="doc-ff" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-ff.png" width="350px" height="500px" />
                      <figcaption>Ficha Cadastral Focco</figcaption>
                    </figure>
                  </div>
                  <?php }; ?>

                  <?php if (in_array("IR", $docs)) { ?>
                    <div class="col s4">
                      <figure>
                        <img class="responsive-img"  alt="doc-ir" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-ir.png" width="350px" height="500px" />
                        <figcaption>Imposto de Renda</figcaption>
                      </figure>
                    </div>
                    <?php }; ?>

                    <?php if (in_array("CA", $docs)) { ?>
                      <div class="col s4">
                        <figure>
                          <img class="responsive-img"  alt="doc-ca" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-ca.png" width="350px" height="500px" />
                          <figcaption>Cartão de Assinatura</figcaption>
                        </figure>
                      </div>
                      <?php }; ?>

                      <?php if (in_array("CPS", $docs)) { ?>
                        <div class="col s4">
                          <figure>
                            <img class="responsive-img"  alt="doc-cps" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-cps.png" width="350px" height="500px" />
                            <figcaption>Contrato de Prestação de Serviços</figcaption>
                          </figure>
                        </div>
                        <?php }; ?>

                        <?php if (in_array("PV", $docs)) { ?>
                          <div class="col s4">
                            <figure>
                              <img class="responsive-img"  alt="doc-pv" src="/dashboard/clientes/uploads/<?php echo $cpfCnpj ?>/doc-pv.png" width="350px" height="500px" />
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
                              <td>'.substr($cep, 0, 5).' - '.substr($cep, 5, 3).'</td>
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