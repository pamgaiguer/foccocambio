<?php include 'includes/_header_cadastro.php';?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <h3>Dados Pessoais</h3>
      <div class="spacing"></div>

      <form action="">
        <div  id="formulario">
          <div id="retornoHTML">

            <div class="row">
              <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                <div class="form-group">
                  <label for="nome">Nome completo</label>
                  <input type="text" class="form-control" id="nome" required>
                  <span class="help-block">Campo obrigatório</span>
                </div>
              </div>

              <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                <div class="form-group">
                  <label for="dataNascimento">Data Nascimento</label>
                  <input type="text" class="form-control date" id="dataNascimento" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                  <label for="cpf">C.P.F.</label>
                  <input type="text" class="form-control cpf" id="cpf" required>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                  <label for="rg">R.G.</label>
                  <input type="text" class="form-control" id="rg" required>
                </div>
              </div>
              <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                <div class="form-group">
                  <label for="rgOrgaoExpedidor">Orgão expedidor</label>
                  <input type="text" class="form-control" id="rgOrgaoExpedidor">
                </div>
              </div>
              <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                <div class="form-group">
                  <label for="rgDataExpedicao">Data da Expedição</label>
                  <input type="text" class="form-control date" id="rgDataExpedicao">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                  <label for="genero">Sexo</label>
                  <select name="genero" id="genero" class="form-control" required>
                    <option value="M" selected>Masculino</option>
                    <option value="F">Feminino</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                  <label for="estadoCivil">Estado Civil</label>
                  <select name="estadoCivil" id="estadoCivil" class="form-control" required>
                    <option value="0" selected>Não informado</option>
                    <option value="1">Solteiro(a)</option>
                    <option value="2">Casado(a)</option>
                    <option value="3">Divorciado(a)</option>
                    <option value="4">Viúvo(a)</option>
                    <option value="6">Companheiro(a)</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                  <label for="nacionalidade">Nacionalidade</label>
                  <input type="text" class="form-control" id="nacionalidade" required>
                </div>
              </div>
            </div>

            <div class="row dados-conjuge" style="display: none">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <label for="nomeConjuge">Nome do Cônjunge</label>
                  <input type="text" class="form-control" id="nomeConjuge">
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <label for="dataNascimentoConjuge">Data Nascimento do Cônjunge</label>
                  <input type="text" class="form-control date" id="dataNascimentoConjuge">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <label for="nomeMae">Nome da Mãe</label>
                  <input type="text" class="form-control" id="nomeMae" required>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <label for="nomePai">Nome do Pai</label>
                  <input type="text" class="form-control" id="nomePai">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" id="email" required>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                  <label for="telefoneFixo">Telefone Fixo</label>
                  <input type="text" class="form-control phone" id="telefoneFixo">
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                  <label for="telefoneCelular">Telefone Celular</label>
                  <input type="text" class="form-control phone" id="telefoneCelular" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                  <label for="ondeConheceuFocco">Onde conheceu a Focco?</label>
                  <select name="ondeConheceuFocco" id="ondeConheceuFocco" class="form-control" required>
                    <option value="1" selected>Indicação de Amigos</option>
                    <option value="2">Google</option>
                    <option value="3">Site comparador de taxas de câmbio</option>
                    <option value="4">Outros</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="checkbox">
                  <label>
                    <br>
                    <input type="checkbox" id="ofertasEmail" checked>
                    Receber ofertas por e-mail
                  </label>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="checkbox">
                  <label>
                    <br>
                    <input type="checkbox" id="ofertasWhatsapp" checked>
                    Receber ofertas por WhatsApp
                  </label>
                </div>
              </div>
            </div>
            <hr>

            <h3>Endereço Residencial</h3>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>

            <div class="row">
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                  <label for="cep-residencial">CEP</label>
                  <input type="text" class="form-control cep" id="cep-residencial" required>
                </div>
              </div>
              <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <div class="form-group">
                  <label for="logradouro">Logradouro</label>
                  <input type="text" class="form-control" id="logradouro-residencial">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                  <label for="numero">Número</label>
                  <input type="text" class="form-control" id="numero-residencial">
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                  <label for="complemento">Complemento</label>
                  <input type="text" class="form-control" id="complemento-residencial">
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                  <label for="bairro">Bairro</label>
                  <input type="text" class="form-control" id="bairro-residencial">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                  <label for="cidade">Cidade</label>
                  <input type="text" class="form-control" id="cidade-residencial">
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                  <label for="estado">Estado</label>
                  <input type="text" class="form-control" id="estado-residencial">
                </div>
              </div>
            </div>

            <hr>

            <h3>Endereço para Entrega</h3>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="checkbox">
                  <label for="checkEndereco">
                    <input type="checkbox" id="checkEndereco">
                    Marque se o endereço de entrega é o mesmo que o residencial
                  </label>
                </div>
              </div>
            </div>

            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>

            <div class="row">
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                  <label for="cep-entrega">CEP</label>
                  <input type="text" class="form-control cep" id="cep-entrega">
                </div>
              </div>
              <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <div class="form-group">
                  <label for="logradouro">Logradouro</label>
                  <input type="text" class="form-control" id="logradouro-entrega">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                  <label for="numero">Número</label>
                  <input type="text" class="form-control" id="numero-entrega">
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                  <label for="complemento">Complemento</label>
                  <input type="text" class="form-control" id="complemento-entrega">
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                  <label for="bairro">Bairro</label>
                  <input type="text" class="form-control" id="bairro-entrega">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                  <label for="cidade">Cidade</label>
                  <input type="text" class="form-control" id="cidade-entrega">
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                  <label for="estado">Estado</label>
                  <input type="text" class="form-control" id="estado-entrega">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label for="pessoa-autorizada">Pessoa autorizada a receber na sua ausência</label>
                  <input type="text" class="form-control" id="pessoa-autorizada" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <label for="observacoes">Observações</label>
                  <textarea cols="20" rows="10" id="observacoes" class="form-control"></textarea>
                  <br>
                  <input type="submit" class="btn btn-default btn-primary btn-block" value="ENVIAR">
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.mask.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>