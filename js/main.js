$(document).ready(function(){
//função para manter o menu clicado
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
});