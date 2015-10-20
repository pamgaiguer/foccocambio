$(document).ready(function(){
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

  var maskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
  options = {onKeyPress: function(val, e, field, options) {
   field.mask(maskBehavior.apply({}, arguments), options);
 }
};

  $('.phone').mask(maskBehavior, options);

$('.collapse').collapse({
  toggle: false
})


  $('#btn').click(function() {
    var $requestResult = $("#retornoHTML");

    var nome = $("#nome").val();
    var email = $("#email").val();
    var telefone = $("#telefone").val();
    var cidade = $("#cidade").val();
    var msg = $("#mensagem").val();

    $.ajax({
      url: 'mail.php',
      type: 'POST',
      data: {
         name:  nome,
         city: cidade,
         e_mail: email,
         phone:  telefone,
         message: mensagem
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