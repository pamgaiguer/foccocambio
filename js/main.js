  $(document).ready(function(){
    $('#modalRemessa').modal();


  $('a[href="' + this.location.pathname + '"]').parent('li').addClass('active'); //menu bootstrap ativo

  var maskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
  options = {onKeyPress: function(val, e, field, options) {
    field.mask(maskBehavior.apply({}, arguments), options);
  }
};

$('.phone').mask(maskBehavior, options);
$('.cpf').mask('000.000.000-00', {reverse: true, selectOnFocus: true});
$('.date').mask('00/00/0000');
$('.cep').mask('00000-000');

$('#btn').click(function() {
  var $requestResult = $("#retornoHTML");
  var campo_nome =  $("#nome").val();
  var campo_email =  $("#email").val();
  var campo_telefone = $("#telefone").val();
  var campo_cidade = $("#cidade").val();
  var campo_msg = $("#mensagem").val();

  if(campo_nome.length <= 3){
    alert('Informe seu nome');
    return false;
  }
  if(campo_email.length <= 5){
    alert('Informe seu email');
    return false;
  }
  if(campo_msg.length <= 5){
    alert('Escreva uma mensagem');
    return false;
  }

  $.ajax({
    url: 'mail.php',
    type: 'POST',
    data: {
      name: $("#nome").val(),
      e_mail: $("#email").val(),
      phone: $("#telefone").val(),
      city: $("#cidade").val(),
      msg: $("#mensagem").val(),
    },
    error: function() {
      console.log("Deu erro!");
      $requestResult.append($("<div>", {
        "class": "alert alert-danger",
        "text": "E-mail não enviado!"
      }));
    },
    success: function(msg){
      console.log("Enviado com sucesso!");
      $requestResult.append($("<div>", {
        "class": "alert alert-success",
        "text": "E-mail enviado com sucesso."
      }));
    }
  });
});
$("#estadoCivil").change(function(){
  if ($(this).val() == 2){
    $(".dados-conjuge").fadeIn("fast");
    $("#nomeConjuge").attr("required", "required");
    $("#dataNascimentoConjuge").attr("required", "required");
  } else {
    $(".dados-conjuge").fadeOut("fast");
    $("#nomeConjuge").removeAttr("required");
    $("#dataNascimentoConjuge").removeAttr("required");
  }
});

$("#cep-residencial").change(function(){
  cep = $(this).val();

  $.ajax({
    url: "http://api.postmon.com.br/v1/cep/" + cep,
    type: "get",
    success: function(data){
      console.log(data);
      $("#logradouro-residencial").val(data.logradouro);
      $("#bairro-residencial").val(data.bairro);
      $("#cidade-residencial").val(data.cidade);
      $("#estado-residencial").val(data.estado);
    }
  });
});

$("#checkEndereco").click(function(){
  if ($(this).is(":checked")) {
    $("#cep-entrega").val($("#cep-residencial").val());
    $("#logradouro-entrega").val($("#logradouro-residencial").val());
    $("#numero-entrega").val($("#numero-residencial").val());
    $("#complemento-entrega").val($("#complemento-residencial").val());
    $("#bairro-entrega").val($("#bairro-residencial").val());
    $("#cidade-entrega").val($("#cidade-residencial").val());
    $("#estado-entrega").val($("#estado-residencial").val());
  }
});

$("#cep-entrega").change(function(){
  cep = $(this).val();

  $.ajax({
    url: "http://api.postmon.com.br/v1/cep/" + cep,
    type: "get",
    success: function(data){
      $("#logradouro-entrega").val(data.logradouro);
      $("#bairro-entrega").val(data.bairro);
      $("#cidade-entrega").val(data.cidade);
      $("#estado-entrega").val(data.estado);
    }
  });
});

  $("form").submit(function(e){
    e.preventDefault();

    $.ajax({
      url: 'sendCadastro.php',
      type: 'POST',
      data: {
        campo_nome: $("#nome").val(),
        campo_dataNascimento: $("#dataNascimento").val(),
        campo_cpf: $("#cpf").val(),
        campo_rg: $("#rg").val(),
        campo_rgOrgaoExpedidor: $("#rgOrgaoExpedidor").val(),
        campo_rgDataExpedicao: $("#rgDataExpedicao").val(),
        campo_genero: $("#genero option:selected").text(),
        campo_estadoCivil: $("#estadoCivil option:selected").text(),
        campo_nacionalidade: $("#nacionalidade").val(),
        campo_nomeConjuge: $("#nomeConjuge").val(),
        campo_dataNascimentoConjuge: $("#dataNascimentoConjuge").val(),
        campo_nomeMae: $("#nomeMae").val(),
        campo_nomePai: $("#nomePai").val(),
        campo_email: $("#email").val(),
        campo_telefoneFixo: $("#telefoneFixo").val(),
        campo_telefoneCelular: $("#telefoneCelular").val(),
        campo_ondeConheceuFocco: $("#ondeConheceuFocco option:selected").text(),
        campo_ofertasEmail: $("#ofertasEmail").is(":checked"),
        campo_ofertasWhatsapp: $("#ofertasWhatsapp").is(":checked"),
        campo_cepResidencial: $("#cep-residencial").val(),
        campo_logradouroResidencial: $("#logradouro-residencial").val(),
        campo_numeroResidencial: $("#numero-residencial").val(),
        campo_complementoResidencial: $("#complemento-residencial").val(),
        campo_bairroResidencial: $("#bairro-residencial").val(),
        campo_cidadeResidencial: $("#cidade-residencial").val(),
        campo_estadoResidencial: $("#estado-residencial").val(),
        campo_cepEntrega: $("#cep-entrega").val(),
        campo_logradouroEntrega: $("#logradouro-entrega").val(),
        campo_numeroEntrega: $("#numero-entrega").val(),
        campo_complementoEntrega: $("#complemento-entrega").val(),
        campo_bairroEntrega: $("#bairro-entrega").val(),
        campo_cidadeEntrega: $("#cidade-entrega").val(),
        campo_estadoEntrega: $("#estado-entrega").val(),
        campo_pessoaAutorizada: $("#pessoa-autorizada").val(),
        campo_observacoes: $("#observacoes").val()
      },
      error: function(msg) {
        console.log("Deu erro!" + msg);
        $requestResult.append(
          $("<div>", {
            "class": "alert alert-danger",
            "text": "E-mail não enviado!"
          })
          );
      },
      success: function(msg){
        console.log("Enviado com sucesso!");
        $requestResult.append(
          $("<div>", {
            "class": "alert alert-success",
            "text": "E-mail enviado com sucesso."
          })
          );
      }
    });
  });
});