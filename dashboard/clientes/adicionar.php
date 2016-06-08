<?php 

	include "../core/database.php";
	include "../includes/header.php";
?>



<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#div-pf">Pessoa física</a></li>
        <li class="tab col s3 disabled"><a href="#div-pj">Pessoa jurídica</a></li>        
      </ul>
    </div>
    <div id="div-pf" class="col s12">
    	

    	<form action="adicionarPost.php" method="POST" class="form-group" id="form-adicionar-cliente">			

		<div class="row">			
			<input id="tipoPessoa" type="hidden" value="F"/>

			<div class="input-field col s6">				
				<input id="razaoSocial" type="text" placeholder="Nome" />
			</div>
			
			<div class="input-field col s6">
				<input id="cpfCnpj" type="text" placeholder="Cpf" />
			</div>

			<div class="input-field col s3">
				<input id="dataNascimento" type="date" class="datepicker" placeholder="Data de nascimento">
			</div>

			<div class="input-field col s3">
				<input id="rg" type="text" placeholder="Rg" />
			</div>

			<div class="input-field col s3">
				<input id="rgOrgaoExpedidor" type="text" placeholder="Orgão expedidor" />
			</div>

			<div class="input-field col s3">
				<input id="rgDataExpedicao" type="date" class="datepicker" placeholder="Data de expedição">
			</div>
			
			<div class="input-field col s2">
				<select id="sexo">
					<option value="M" selected>Masculino</option>
					<option value="F">Feminino</option>
				</select>
			</div>

			<div class="input-field col s5">
				<input id="nacionalidade" type="text" placeholder="Nacionalidade" />
			</div>

			<div class="input-field col s3">
				<select id="estadoCivil">
					<option value="1" selected>Solteiro(a)</option>
					<option value="2">Casado(a)</option>
					<option value="3">Divorciado(a)</option>
					<option value="4">Viúvo(a)</option>
					<option value="5">Separado(a)</option>
					<option value="6">Companheiro(a)</option>
				</select>
			</div>

			<div class="dados-conjuge" style="display: none;">
				
				<div class="input-field col s6">				
					<input id="nomeConjuge" type="text" placeholder="Nome cônjuge" />
				</div>				

				<div class="input-field col s3">
					<input id="dataNascimentoConjuge" type="date" class="datepicker" placeholder="Data de nascimento cônjuge">
				</div>

			</div>

			<div class="input-field col s6">				
				<input id="nomeMae" type="text" placeholder="Nome da mãe" />
			</div>

			<div class="input-field col s6">				
				<input id="nomePai" type="text" placeholder="Nome do pai" />
			</div>

			<div class="input-field col s6">
				<input id="email" type="text"placeholder="Email" />
			</div>
			<div class="input-field col s3">
				<input id="telFixo" class="telefone" pattern="^\([1-9]{2}\) [2-9][0-9]{3,4}\-[0-9]{4}$" type="tel" placeholder="Telefone fixo" />
			</div>
			<div class="input-field col s3">
				<input id="telCelular" class="telefone" pattern="^\([1-9]{2}\) [2-9][0-9]{3,4}\-[0-9]{4}$" type="tel" placeholder="Telefone celular" />
			</div>

			<div class="input-field col s3">				
				<input id="contraSenha" type="text" placeholder="Contra-senha" />
			</div>

			<div class="input-field col s3">
				<select name="categoria" id="categoria">
					<option value="1" selected>Focco</option>
					<option value="2">Vision</option>
					<option value="3">PF Premium</option>
				</select>
			</div>

			<div class="input-field col s3">								
				<input id="ofertasPorEmail" type="checkbox" class="filled-in"  />
      			<label for="ofertasPorEmail">Ofertas por email</label>


			</div>

			<div class="input-field col s3">								
				<input id="infoWhatsapp" type="checkbox" class="filled-in"  />
      			<label for="infoWhatsapp">Informações Whatsapp</label>
			</div>

			<div class="input-field col s12">				
				<textarea id="observacoes" class="materialize-textarea" placeholder="Observações"></textarea>
				
			</div>

			
			
			<div class="col s12">
				<input type="submit" value=">>>" class="btn" />
			</div>

		</div>
		</form>





    </div>
    

    <div id="div-pj" class="col s12">Test 2</div>
    
  </div>






<?php
	include "../includes/footer.php";
?>

<script type="text/javascript">	
	
	$(document).ready(function() {
	    $('ul.tabs').tabs();
	    $('select').material_select();

	    $('.datepicker').pickadate({
		  labelMonthNext: 'Próximo',
		  labelMonthPrev: 'Anterior',
		  labelMonthSelect: 'Selecione um mês',
		  labelYearSelect: 'Selecione um ano',
		  monthsFull: [ 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' ],
		  monthsShort: [ 'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez' ],
		  weekdaysFull: [ 'Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado' ],
		  weekdaysShort: [ 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab' ],
		  weekdaysLetter: [ 'D', 'S', 'T', 'Q', 'Q', 'S', 'S' ],
		  today: 'Hoje',
		  clear: 'Limpar',
		  close: 'Fechar',


		  selectMonths: true,
		  selectYears: 200,
		  format: 'dd-mm-yyyy'
		});

	});

	focco.adicionarClienteFormPost();
	
</script>