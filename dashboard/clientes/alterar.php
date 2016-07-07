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
<div class="section"></div>
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#div-pf">Pessoa física</a></li>
        <li class="tab col s3"><a href="#div-pj">Pessoa jurídica</a></li>
      </ul>
    </div>

    <div id="div-pf" class="col s12">
      <form action="alterarPost.php" method="POST" class="form-group form-alterar-cliente" id="form-alterar-cliente-pf" enctype="multipart/form-data">
        <div class="row">
          <div class="col s12">
            <h5>Dados pessoais</h5>
          </div>

          <input id="clienteId" name="clienteId" type="hidden" value="<?php echo $id ?>" />
          <input id="tipoPessoa" name="tipoPessoa" type="hidden" value="F" />

          <div class="row">
            <div class="input-field col s6">
              <input id="razaoSocial" name="razaoSocial" type="text" required value= <?php echo $nome ?> />
              <label for="razaoSocial">Nome completo</label>
            </div>

            <div class="input-field col s6">
              <input id="cpfCnpj" name="cpfCnpj" type="text" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required value= <?php echo $cpfCnpj ?> />
              <label for="cpfCnpj">C.P.F.</label>
              <div id="validacaoCpf"></div>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s3">
              <input id="dataNascimento" name="dataNascimento" type="date" class="datepicker" required value= <?php echo $dataNascimentoAbertura ?> />
              <label for="dataNascimento">Data de Nascimento</label>
            </div>

            <div class="input-field col s3">
              <input id="rg" name="rg" type="text" required value= <?php echo $rgInscricaoEstadual ?> />
              <label for="rg">R.G.</label>
            </div>

            <div class="input-field col s3">
              <input id="rgOrgaoExpedidor" name="rgOrgaoExpedidor" type="text" required value= <?php echo $rgOrgaoExpedidor ?> />
              <label for="rgOrgaoExpedidor">Orgão Expedidor</label>
            </div>

            <div class="input-field col s3">
              <input id="rgDataExpedicao" name="rgDataExpedicao" type="date" class="datepicker" required value= <?php echo $rgDataExpedicao ?> />
              <label for="rgDataExpedicao">Data de Expedição</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s2">
              <select id="sexo" name="sexo">
                <option value="M" <?php echo ($sexo == 'M' ? "selected" : "") ?> >Masculino</option>
                <option value="F" <?php echo ($sexo == 'F' ? "selected" : "") ?> >Feminino</option>
              </select>
              <label for="sexo">Sexo</label>
            </div>

            <div class="input-field col s5">
              <input id="nacionalidade" name="nacionalidade" type="text" required value= <?php echo $nacionalidade ?> >
              <label for="nacionalidade">Nacionalidade</label>
            </div>

            <div class="input-field col s5">
              <select id="estadoCivil" name="estadoCivil" required>
                <option value="1" <?php echo ($estadoCivil == '1' ? "selected" : "") ?> >Solteiro(a)</option>
                <option value="2" <?php echo ($estadoCivil == '2' ? "selected" : "") ?> >Casado(a)</option>
                <option value="3" <?php echo ($estadoCivil == '3' ? "selected" : "") ?> >Divorciado(a)</option>
                <option value="4" <?php echo ($estadoCivil == '4' ? "selected" : "") ?> >Viúvo(a)</option>
                <option value="5" <?php echo ($estadoCivil == '5' ? "selected" : "") ?> >Separado(a)</option>
                <option value="6" <?php echo ($estadoCivil == '6' ? "selected" : "") ?> >Companheiro(a)</option>
              </select>
              <label for="estadoCivil">Estado Civil</label>
            </div>
          </div>

          <div class="row">
            <div class="dados-conjuge" <?php echo ($estadoCivil != '2' ? "style='display: none;'" : "") ?>>
              <div class="input-field col s6">
                <input id="nomeConjuge" name="nomeConjuge" type="text" value= <?php echo $nomeConjuge ?> >
                <label for="nomeConjuge">Nome do Cônjuge</label>
              </div>

              <div class="input-field col s6">
                <input id="dataNascimentoConjuge" name="dataNascimentoConjuge" type="date" class="datepicker" value= <?php echo $dataNascimentoConjuge ?> >
                <label for="nomeConjuge">Data de Nascimento Cônjuge</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input id="nomeMae" name="nomeMae" type="text" required value='<?php echo $nomeMae ?>'>
              <label for="nomeMae">Nome da mãe</label>
            </div>

            <div class="input-field col s6">
              <input id="nomePai" name="nomePai" type="text" required value='<?php echo $nomePai ?>'>
              <label for="nomePai">Nome do Pai</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input id="email" name="email" type="email" required value='<?php echo $email ?>'>
              <label for="email">E-mail</label>
            </div>
            <div class="input-field col s3">
              <input id="telFixo" name="telFixo" class="telefone" required pattern="^\([1-9]{2}\) [2-9][0-9]{3,4}\-[0-9]{4}$" type="tel" value='<?php echo $telFixo ?>'>
              <label for="telFixo">Telefone fixo</label>

            </div>
            <div class="input-field col s3">
              <input id="telCelular" name="telCelular" class="telefone" required pattern="^\([1-9]{2}\) [2-9][0-9]{3,4}\-[0-9]{4}$" type="tel" value='<?php echo $telCelular ?>' >
              <label for="telCelular">Telefone Celular</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s3">
              <input id="contraSenha" name="contraSenha" type="text" value= <?php echo $contraSenha ?>>
              <label for="contraSenha">Contra-senha</label>
            </div>

            <div class="input-field col s3">
              <select name="categoria" required id="categoria">
                <option value="1" <?php echo ($categoria == '1' ? "selected" : "") ?> >Focco</option>
                <option value="2" <?php echo ($categoria == '2' ? "selected" : "") ?> >Vision</option>
                <option value="3" <?php echo ($categoria == '3' ? "selected" : "") ?> >PF Premium</option>
              </select>
              <label for="categoria">Categoria Pessoa Física</label>
            </div>

            <div class="input-field col s3">
              <input id="ofertasPorEmail" name="ofertasPorEmail" type="checkbox" class="filled-in" <?php echo ($ofertasPorEmail ? "checked" : "") ?>>
              <label for="ofertasPorEmail">Ofertas por email</label>
            </div>

            <div class="input-field col s3">
              <input id="infoWhatsapp" name="infoWhatsapp" type="checkbox" class="filled-in" <?php echo ($infoWhatsapp ? "checked" : "") ?>>
              <label for="infoWhatsapp">Informações Whatsapp</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <textarea id="observacoes" name="observacoes" class="materialize-textarea" length="120"><?php echo $observacoes; ?></textarea>
              <label for="observacoes">Observações</label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
            <h5>Documentos Obrigatórios</h5>
            <em>Cada tipo de pessoa tem uma documentação específica - ver documentação</em>
            <br>
            <em>Colocar cada botão para documento ou colocar um input para multiplos arquivos?</em>
            </div>

            <div class="col s6 div-input-file-cpf">
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>C.P.F.</span>
                  <input type="file" id="input-file-cpf" name="input-file-cpf">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>

            <div class="col s6 div-input-file-rg">
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>RG</span>
                  <input type="file" id="input-file-rg" name="input-file-rg">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>

            <div class="col s6 div-input-file-cr">
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>C. R.</span>
                  <input type="file" id="input-file-cr" 
                  name="input-file-cr" title="Comprovante de residência">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>

            <div class="col s6 div-input-file-ff" <?php echo ($categoria == 1 ? "style='display: none;'" : "") ?> >
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>F. F.</span>
                  <input type="file" id="input-file-ff" 
                  name="input-file-ff" title="Ficha cadastral focco">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>

            <div class="col s6 div-input-file-ir" <?php echo ($categoria < 3 ? "style='display: none;'" : "") ?>>
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>I. R.</span>
                  <input type="file" id="input-file-ir" 
                  name="input-file-ir" title="Declaração do imposto de renda">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>

            <div class="col s6 div-input-file-ca" <?php echo ($categoria < 3 ? "style='display: none;'" : "") ?>>
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>C. A.</span>
                  <input type="file" id="input-file-ca" 
                  name="input-file-ca" title="Cartão de assinatura">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>

            <div class="col s6 div-input-file-cps" <?php echo ($categoria < 3 ? "style='display: none;'" : "") ?>>
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>C. P. S.</span>
                  <input type="file" id="input-file-cps" 
                  name="input-file-cps" title="Contrato de prestação de serviços">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>

            <div class="col s6 div-input-file-pv" <?php echo ($categoria < 3 ? "style='display: none;'" : "") ?>>
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>P. V.</span>
                  <input type="file" id="input-file-pv" 
                  name="input-file-pv" title="Procuração para a Vision">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>


          </div>



          <?php
            
            $sql_query = sprintf("SELECT * FROM enderecoscliente WHERE clienteId = %s and tipo = %s", $_GET['clienteId'], 1);
            $result = mysqli_query($conn, $sql_query);
            $rows = array();
            while($row = mysqli_fetch_array($result)) $rows[] = $row;            

            $tipo = "";
            $cep = "";
            $endereco = "";
            $numero = "";
            $complemento = "";
            $bairro = "";
            $cidade = "";
            $estado = "";
            $pais = "";

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
            }
          ?>




          <div class="row">
            <div class="col s12">
             <h5>Endereço Residencial</h5>
           </div>
         </div>

         <div class="row">
          <div class="input-field col s3">
            <input id="cep-residencial" name="cep-residencial" type="text" required value='<?php echo $cep ?>' >
            <label for="cep-residencial">CEP</label>
          </div>
          <div class="input-field col s9">
            <input id="logradouro-residencial" name="logradouro-residencial" type="text" required value='<?php echo $endereco ?>' >
            <label for="logradouro-residencial">Logradouro</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s4">
            <input id="numero-residencial" name="numero-residencial" type="text" required value='<?php echo $numero ?>'>
            <label for="numero-residencial">Número</label>
          </div>
          <div class="input-field col s4">
            <input id="complemento-residencial" name="complemento-residencial" type="text" value='<?php echo $complemento ?>'>
            <label for="complemento-residencial">Complemento</label>
          </div>
          <div class="input-field col s4">
            <input id="bairro-residencial" name="bairro-residencial" type="text" required value='<?php echo $bairro ?>'>
            <label for="bairro-residencial">Bairro</label>
          </div>
        </div>


        <div class="row">
          <div class="input-field col s4">
            <input id="cidade-residencial" name="cidade-residencial" type="text" required value='<?php echo $cidade ?>'>
            <label for="cidade-residencial">Cidade</label>
          </div>
          <div class="input-field col s4" >
            <input id="UF-residencial" name="UF-residencial" type="text" required value='<?php echo $estado ?>'>
            <label for="UF-residencial">UF</label>
          </div>
          <div class="input-field col s4">
            <input id="pais-residencial" name="pais-residencial" type="text" required value='<?php echo $pais ?>'>
            <label for="pais-residencial">País</label>
          </div>
        </div>



        <?php
        
          $sql_query = sprintf("SELECT * FROM enderecoscliente WHERE clienteId = %s and tipo = %s", $_GET['clienteId'], 2);
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
          }
        ?>




        <div class="row">
          <div class="col s12">
           <h5>Endereço para entrega</h5>
         </div>
       </div>

       <div class="row">
         <div class="input-field col s12">
           <input type="checkbox" class="filled-in" id="filled-in-box">
           <label for="filled-in-box">Marque se o endereço de entrega é o mesmo que o residencial</label>
         </div>
       </div>

       <div id="div-endereco-entrega">
       
         <div class="row">
          <div class="input-field col s3">
            <input id="cep-entrega" name="cep-entrega" type="text" value='<?php echo $cep ?>'>
            <label for="cep-entrega">CEP</label>
          </div>
          <div class="input-field col s9">
            <input id="logradouro-entrega" name="logradouro-entrega" type="text" value='<?php echo $endereco ?>'>
            <label for="logradouro-entrega">Logradouro</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s4">
            <input id="numero-entrega" name="numero-entrega" type="text" value='<?php echo $numero ?>'>
            <label for="numero-entrega">Número</label>
          </div>
          <div class="input-field col s4">
            <input id="complemento-entrega" name="complemento-entrega" type="text" value='<?php echo $complemento ?>'>
            <label for="complemento-entrega">Complemento</label>
          </div>
          <div class="input-field col s4">
            <input id="bairro-entrega" name="bairro-entrega" type="text" value='<?php echo $bairro ?>'>
            <label for="bairro-entrega">Bairro</label>
          </div>
        </div>


        <div class="row">
          <div class="input-field col s4">
            <input id="cidade-entrega" name="cidade-entrega" type="text" value='<?php echo $cidade ?>'>
            <label for="cidade-entrega">Cidade</label>
          </div>
          <div class="input-field col s4">
            <input id="UF-entrega" name="UF-entrega" type="text" value='<?php echo $estado ?>'>
            <label for="UF-entrega">UF</label>
          </div>
          <div class="input-field col s4">
            <input id="pais-entrega" name="pais-entrega" type="text" value='<?php echo $pais ?>'>
            <label for="pais-entrega">País</label>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s12">
         <h5>Limites Operacionais (USD)</h5>
         <em>Limites pré-definidos via banco de dados</em>
       </div>
     </div>

     <div class="row">
       <div class="col s12">
         <table class="highlight responsive-table">
           <!-- Trazer esses valores do banco, cada tipo de cliente tem um limite específico -->
           <thead>
             <tr>
               <th>Período</th>
               <th>Limíte aprovado (USD)</th>
               <th>Limíte Utilizado (USD)</th>
               <th>Limíte disponível (USD)</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>1 dia</td>
               <td>3.000</td>
               <td></td>
               <td>3.000</td>
             </tr>
             <tr>
               <td>1 ano</td>
               <td>13.000</td>
               <td></td>
               <td>13.000</td>
             </tr>
           </tbody>
         </table>
       </div>
     </div>



     <div class="col s12">
      <input type="submit" id="input-submit" value="Alterar" class="waves-effect waves-light btn bg-blue right" />
    </div>

  </div>
</form>


</div>
<div id="div-pj" class="col s12">
</div>

</div>
</main>

<?php
include "../includes/footer.php";
?>

<script>
  focco.alterarClienteFormPost();  
</script>