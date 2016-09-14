$(document).ready(function(){
  $('#modalRemessa').modal();

  var target = {
    'index': 'index.php',
    'contact': 'contact.php',
    'delivery': 'delivery.php',
    'travel-insurance': 'travel-insurance.php',
    'what': 'what.php',
    'products-services': 'products-services.php'
  };
  var pageName = 'index';
  var address = window.location.href.split('/');
  $.each(address, function(key, item) {
    if (item.indexOf("php") != -1) {
      pageName = item.split('.')[0];
    }
  });
  $('a[href^="' + target[pageName] + '"]').parent().addClass("active");

  $(".nav a").on("click", function(){
    $(".nav").find(".active").removeClass("active");
    $(this).parent().addClass("active");
  });

//
  var maskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
  options = {onKeyPress: function(val, e, field, options) {
    field.mask(maskBehavior.apply({}, arguments), options);
  }
};

  $('.phone').mask(maskBehavior, options);

 $('#btn').click(function() {
    var $requestResult = $("#retornoHTML");
    var campo_nome =  $("#nome").val();
    var campo_email =  $("#email").val();
    var campo_telefone = $("#telefone").val();
    var campo_cidade = $("#cidade").val();
    var campo_msg = $("#mensagem").val();

     /* Validando */
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

/* Formulário de Cadastro*/

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
          console.log(data);
          $("#logradouro-entrega").val(data.logradouro);
          $("#bairro-entrega").val(data.bairro);
          $("#cidade-entrega").val(data.cidade);
          $("#estado-entrega").val(data.estado);
        }
      });
    });
});