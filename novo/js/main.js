$(document).ready(function(){
  var target = {
    'index': 'index.php',
    'empresa': 'empresa.php',
    'propolis': 'propolis.php',
    'producao': 'producao.php',
    'eventos': 'eventos.php',
    'contato': 'contato.php'
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
});