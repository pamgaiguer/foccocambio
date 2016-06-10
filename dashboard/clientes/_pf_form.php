    <div id="div-pf" class="col s12">
      <form action="adicionarPost.php" method="POST" class="form-group" id="form-adicionar-cliente">
        <div class="row">
          <div class="col s12">
            <h5>Dados pessoais</h5>
          </div>

          <input id="tipoPessoa" type="hidden" value="F"/>

          <div class="row">
            <div class="input-field col s6">
              <input id="razaoSocial" type="text" />
              <label for="razaoSocial">Nome completo</label>
            </div>

            <div class="input-field col s6">
              <input id="cpfCnpj" type="text" />
              <label for="cpfCnpj">C.P.F.</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s3">
              <input id="dataNascimento" type="date" class="datepicker">
              <label for="dataNascimento">Data de Nascimento</label>
            </div>

            <div class="input-field col s3">
              <input id="rg" type="text">
              <label for="rg">R.G.</label>
            </div>

            <div class="input-field col s3">
              <input id="rgOrgaoExpedidor" type="text">
              <label for="rgOrgaoExpedidor">Orgão Expedidor</label>
            </div>

            <div class="input-field col s3">
              <input id="rgDataExpedicao" type="date" class="datepicker">
              <label for="rgDataExpedicao">Data de Expedição</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s2">
              <select id="sexo">
                <option value="M" selected>Masculino</option>
                <option value="F">Feminino</option>
              </select>
              <label for="sexo">Sexo</label>
            </div>

            <div class="input-field col s5">
              <input id="nacionalidade" type="text">
              <label for="nacionalidade">Nacionalidade</label>
            </div>

            <div class="input-field col s5">
              <select id="estadoCivil">
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
                <input id="nomeConjuge" type="text" />
                <label for="nomeConjuge">Nome do Cônjuge</label>
              </div>

              <div class="input-field col s6">
                <input id="dataNascimentoConjuge" type="date" class="datepicker">
                <label for="nomeConjuge">Data de Nascimento Cônjuge</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input id="nomeMae" type="text">
              <label for="nomeMae">Nome da mãe</label>
            </div>

            <div class="input-field col s6">
              <input id="nomePai" type="text">
              <label for="nomePai">Nome do Pai</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input id="email" type="email">
              <label for="email">E-mail</label>
            </div>
            <div class="input-field col s3">
              <input id="telFixo" class="telefone" pattern="^\([1-9]{2}\) [2-9][0-9]{3,4}\-[0-9]{4}$" type="tel">
              <label for="telFixo">Telefone fixo</label>

            </div>
            <div class="input-field col s3">
              <input id="telCelular" class="telefone" pattern="^\([1-9]{2}\) [2-9][0-9]{3,4}\-[0-9]{4}$" type="tel">
              <label for="telCelular">Telefone Celular</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s3">
              <input id="contraSenha" type="text">
              <label for="contraSenha">Contra-senha</label>
            </div>

            <div class="input-field col s3">
              <select name="categoria" id="categoria">
                <option value="1" selected>Focco</option>
                <option value="2">Vision</option>
                <option value="3">PF Premium</option>
              </select>
              <label for="categoria">Categoria Pessoa Física</label>
            </div>

            <div class="input-field col s3">
              <input id="ofertasPorEmail" type="checkbox" class="filled-in">
              <label for="ofertasPorEmail">Ofertas por email</label>
            </div>

            <div class="input-field col s3">
              <input id="infoWhatsapp" type="checkbox" class="filled-in">
              <label for="infoWhatsapp">Informações Whatsapp</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <textarea id="observacoes" class="materialize-textarea" length="120"></textarea>
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
            <div class="col s6">
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>C.P.F.</span>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>
            <div class="col s6">
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>RG</span>
                  <input type="file">
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
            <input id="cep" type="text">
            <label for="cep">CEP</label>
          </div>
          <div class="input-field col s9">
            <input id="logradouro" type="text">
            <label for="logradouro">Logradouro</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s4">
            <input id="numero" type="text">
            <label for="numero">Número</label>
          </div>
          <div class="input-field col s4">
            <input id="complemento" type="text">
            <label for="complemento">Complemento</label>
          </div>
          <div class="input-field col s4">
            <input id="bairro" type="text">
            <label for="bairro">Bairro</label>
          </div>
        </div>


        <div class="row">
          <div class="input-field col s4">
            <input id="cidade" type="text">
            <label for="cidade">Cidade</label>
          </div>
          <div class="input-field col s4">
            <input id="UF" type="text">
            <label for="UF">UF</label>
          </div>
          <div class="input-field col s4">
            <input id="pais" type="text">
            <label for="pais">País</label>
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

       <div class="row">
        <div class="input-field col s3">
          <input id="cep" type="text">
          <label for="cep">CEP</label>
        </div>
        <div class="input-field col s9">
          <input id="logradouro" type="text">
          <label for="logradouro">Logradouro</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s4">
          <input id="numero" type="text">
          <label for="numero">Número</label>
        </div>
        <div class="input-field col s4">
          <input id="complemento" type="text">
          <label for="complemento">Complemento</label>
        </div>
        <div class="input-field col s4">
          <input id="bairro" type="text">
          <label for="bairro">Bairro</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s4">
          <input id="cidade" type="text">
          <label for="cidade">Cidade</label>
        </div>
        <div class="input-field col s4">
          <input id="UF" type="text">
          <label for="UF">UF</label>
        </div>
        <div class="input-field col s4">
          <input id="pais" type="text">
          <label for="pais">País</label>
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
      <input type="submit" value="Cadastrar" class="waves-effect waves-light btn bg-blue right" />
    </div>

  </div>
</form>


</div>