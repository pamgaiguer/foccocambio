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

$("#formulario").submit(function(){
  console.log("Testando");
})


});