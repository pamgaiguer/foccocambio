    <div id="div-pf" class="col s12">
      <form action="adicionarPost.php" method="POST" class="form-group form-adicionar-cliente" id="form-adicionar-cliente-pf" enctype="multipart/form-data">
        <div class="row">
          <div class="col s12">
            <h5>Dados pessoais</h5>
          </div>

          <input id="tipoPessoa" name="tipoPessoa" type="hidden" value="F"/>

          <div class="row">
            <div class="input-field col s6">
              <input id="razaoSocial" name="razaoSocial" type="text" required />
              <label for="razaoSocial">Nome completo</label>
            </div>

            <div class="input-field col s6">
              <input id="cpfCnpj" name="cpfCnpj" type="text" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required />
              <label for="cpfCnpj">C.P.F.</label>
              <div id="validacaoCpf"></div>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s3">
              <input id="dataNascimento" name="dataNascimento" type="date" class="datepicker" required>
              <label for="dataNascimento">Data de Nascimento</label>
            </div>

            <div class="input-field col s3">
              <input id="rg" name="rg" type="text" required>
              <label for="rg">R.G.</label>
            </div>

            <div class="input-field col s3">
              <input id="rgOrgaoExpedidor" name="rgOrgaoExpedidor" type="text" required>
              <label for="rgOrgaoExpedidor">Orgão Expedidor</label>
            </div>

            <div class="input-field col s3">
              <input id="rgDataExpedicao" name="rgDataExpedicao" type="date" class="datepicker" required>
              <label for="rgDataExpedicao">Data de Expedição</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s2">
              <select id="sexo" name="sexo">
                <option value="M" selected>Masculino</option>
                <option value="F">Feminino</option>
              </select>
              <label for="sexo">Sexo</label>
            </div>

            <div class="input-field col s5">
              <input id="nacionalidade" name="nacionalidade" type="text" required>
              <label for="nacionalidade">Nacionalidade</label>
            </div>

            <div class="input-field col s5">
              <select id="estadoCivil" name="estadoCivil" required>
                <option value="1" selected>Solteiro(a)</option>
                <option value="2">Casado(a)</option>
                <option value="3">Divorciado(a)</option>
                <option value="4">Viúvo(a)</option>
                <option value="5">Separado(a)</option>
                <option value="6">Companheiro(a)</option>
              </select>
              <label for="estadoCivil">Estado Civil</label>
            </div>
          </div>

          <div class="row">
            <div class="dados-conjuge" style="display: none">
              <div class="input-field col s6">
                <input id="nomeConjuge" name="nomeConjuge" type="text">
                <label for="nomeConjuge">Nome do Cônjuge</label>
              </div>

              <div class="input-field col s6">
                <input id="dataNascimentoConjuge" name="dataNascimentoConjuge" type="date" class="datepicker">
                <label for="nomeConjuge">Data de Nascimento Cônjuge</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input id="nomeMae" name="nomeMae" type="text" required>
              <label for="nomeMae">Nome da mãe</label>
            </div>

            <div class="input-field col s6">
              <input id="nomePai" name="nomePai" type="text" required>
              <label for="nomePai">Nome do Pai</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input id="email" name="email" type="email" required>
              <label for="email">E-mail</label>
            </div>
            <div class="input-field col s3">
              <input id="telFixo" name="telFixo" class="telefone" required pattern="^\([1-9]{2}\) [2-9][0-9]{3,4}\-[0-9]{4}$" type="tel">
              <label for="telFixo">Telefone fixo</label>

            </div>
            <div class="input-field col s3">
              <input id="telCelular" name="telCelular" class="telefone" required pattern="^\([1-9]{2}\) [2-9][0-9]{3,4}\-[0-9]{4}$" type="tel">
              <label for="telCelular">Telefone Celular</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s3">
              <input id="contraSenha" name="contraSenha" type="text">
              <label for="contraSenha">Contra-senha</label>
            </div>

            <div class="input-field col s3">
              <select name="categoria" required id="categoria">
                <option value="1" selected>Focco</option>
                <option value="2">Vision</option>
                <option value="3">PF Premium</option>
              </select>
              <label for="categoria">Categoria Pessoa Física</label>
            </div>

            <div class="input-field col s3">
              <input id="ofertasPorEmail" name="ofertasPorEmail" type="checkbox" class="filled-in">
              <label for="ofertasPorEmail">Ofertas por email</label>
            </div>

            <div class="input-field col s3">
              <input id="infoWhatsapp" name="infoWhatsapp" type="checkbox" class="filled-in">
              <label for="infoWhatsapp">Informações Whatsapp</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <textarea id="observacoes" name="observacoes" class="materialize-textarea" length="120"></textarea>
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

            <div class="col s6 div-input-file-ff" style="display: none;">
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

            <div class="col s6 div-input-file-ir" style="display: none;">
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

            <div class="col s6 div-input-file-ca" style="display: none;">
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

            <div class="col s6 div-input-file-cps" style="display: none;">
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

            <div class="col s6 div-input-file-pv" style="display: none;">
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

          <div class="row">
            <div class="col s12">
             <h5>Endereço Residencial</h5>
           </div>
         </div>

         <div class="row">
          <div class="input-field col s3">
            <input id="cep-residencial" type="text" required>
            <label for="cep-residencial">CEP</label>
          </div>
          <div class="input-field col s9">
            <input id="logradouro-residencial" type="text" required>
            <label for="logradouro-residencial">Logradouro</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s4">
            <input id="numero-residencial" type="text" required>
            <label for="numero-residencial">Número</label>
          </div>
          <div class="input-field col s4">
            <input id="complemento-residencial" type="text" >
            <label for="complemento-residencial">Complemento</label>
          </div>
          <div class="input-field col s4">
            <input id="bairro-residencial" type="text" required>
            <label for="bairro-residencial">Bairro</label>
          </div>
        </div>


        <div class="row">
          <div class="input-field col s4">
            <input id="cidade-residencial" type="text" required>
            <label for="cidade-residencial">Cidade</label>
          </div>
          <div class="input-field col s4" >
            <input id="UF-residencial" type="text" required>
            <label for="UF-residencial">UF</label>
          </div>
          <div class="input-field col s4">
            <input id="pais-residencial" type="text" required>
            <label for="pais-residencial">País</label>
          </div>
        </div>

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
            <input id="cep-entrega" type="text">
            <label for="cep-entrega">CEP</label>
          </div>
          <div class="input-field col s9">
            <input id="logradouro-entrega" type="text">
            <label for="logradouro-entrega">Logradouro</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s4">
            <input id="numero-entrega" type="text">
            <label for="numero-entrega">Número</label>
          </div>
          <div class="input-field col s4">
            <input id="complemento-entrega" type="text">
            <label for="complemento-entrega">Complemento</label>
          </div>
          <div class="input-field col s4">
            <input id="bairro-entrega" type="text">
            <label for="bairro-entrega">Bairro</label>
          </div>
        </div>


        <div class="row">
          <div class="input-field col s4">
            <input id="cidade-entrega" type="text">
            <label for="cidade-entrega">Cidade</label>
          </div>
          <div class="input-field col s4">
            <input id="UF-entrega" type="text">
            <label for="UF-entrega">UF</label>
          </div>
          <div class="input-field col s4">
            <input id="pais-entrega" type="text">
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
      <input type="submit" id="input-submit" value="Cadastrar" class="waves-effect waves-light btn bg-blue right" />
    </div>

  </div>
</form>


</div>