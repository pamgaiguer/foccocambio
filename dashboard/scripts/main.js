focco = {

  sideNav: function(){
    $('.button-collapse').sideNav({
            menuWidth: 240, // Default is 240
            edge: 'left' // Choose the horizontal origin
        });
  },


  loginFormPost: function(){

    $("#form-login").submit(function(e){
      e.preventDefault();
      login = $("input#login", $(this)).val();
      senha = $("input#senha", $(this)).val();

      $.ajax({
        url: "/dashboard/autenticar.php/",
        type: "post",
        data: {login, senha},
        //error: function(data){alert(data);},
        success: function(data){
          if (JSON.parse(data) == "nope") $("#form-erro").html("O usuário não foi autenticado");
          else if (JSON.parse(data).length > 10) window.location = JSON.parse(data);
          else window.location = "/dashboard/home";
        }

      });


    });

  },

  redefinirSenhaFormPost : function(){
    $("#form-redefinir-senha").submit(function(e){

      e.preventDefault();
      id = $("input#id", $(this)).val();
      senha = $("input#senha", $(this)).val();

      $.ajax({
        url: "/dashboard/usuarios/redefinirSenhaPost.php/",
        type: "post",
        data: {id, senha},
        error: function(data){},
        success: function(data){
          if (JSON.parse(data) == "nope") $("#form-erro").html("A senha não foi redefinida");
          else window.location = "/dashboard";
        }

      });


    });
  },

  alterarUsuarioFormPost: function(){
    $('select').material_select();
    $("#telefone")
    .mask("(99) 99999-9999")
    .on("change", function() {

        var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );

        if( last.length == 3 ) {
            var move = $(this).val().substr( $(this).val().indexOf("-") - 1, 1 );
            var lastfour = move + last;
            var first = $(this).val().substr( 0, 9 ); // Change 9 to 8 if you prefer mask without space: (99)9999?9-9999

            $(this).val( first + '-' + lastfour );
        }
    })
    .change();


    $("#form-alterar-usuario").submit(function(e){

      e.preventDefault();
      id = $("input#id", $(this)).val();
      nome = $("input#nome", $(this)).val();
      login = $("input#login", $(this)).val();
      email = $("input#email", $(this)).val();
      telefone = $("input#telefone", $(this)).val();
      tipo = $("select#tipo", $(this)).val();


      $.ajax({
        url: "/dashboard/usuarios/alterarPost.php/",
        type: "post",
        data: {id, nome, login, email, telefone, tipo},
        error: function(data){},
        success: function(data){
          if (JSON.parse(data) == "nope") $("#form-erro").html("O usuário não foi alterado");
          else window.location = "/dashboard/usuarios/";
        }

      });


    });

  },

  adicionarUsuarioFormPost: function(){
    $('select').material_select();
    $("#telefone")
    .mask("(99) 99999-9999")
    .on("change", function() {

        var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );

        if( last.length == 3 ) {
            var move = $(this).val().substr( $(this).val().indexOf("-") - 1, 1 );
            var lastfour = move + last;
            var first = $(this).val().substr( 0, 9 ); // Change 9 to 8 if you prefer mask without space: (99)9999?9-9999

            $(this).val( first + '-' + lastfour );
        }
    })
    .change();


    $("#form-adicionar-usuario").submit(function(e){

      e.preventDefault();
      nome = $("input#nome", $(this)).val();
      login = $("input#login", $(this)).val();
      email = $("input#email", $(this)).val();
      telefone = $("input#telefone", $(this)).val();
      tipo = $("select#tipo", $(this)).val();

      $.ajax({
        url: "/dashboard/usuarios/adicionarPost.php/",
        type: "post",
        data: {nome, login, email, telefone, tipo},
        error: function(data){},
        success: function(data){
          if (JSON.parse(data) == "nope") $("#form-erro").html("O usuário não foi adicionado");
          else window.location = "/dashboard/usuarios/";
        }

      });


    });

  },

  alterarClienteFormPost: function(){
    $("#telefone")
    .mask("(99) 99999-9999")
    .on("change", function() {

        var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );

        if( last.length == 3 ) {
            var move = $(this).val().substr( $(this).val().indexOf("-") - 1, 1 );
            var lastfour = move + last;
            var first = $(this).val().substr( 0, 9 ); // Change 9 to 8 if you prefer mask without space: (99)9999?9-9999

            $(this).val( first + '-' + lastfour );
        }
    })
    .change();


    $("#form-alterar-cliente").submit(function(e){

      e.preventDefault();
      id = $("input#id", $(this)).val();
      nome = $("input#nome", $(this)).val();
      login = $("input#login", $(this)).val();
      email = $("input#email", $(this)).val();
      telefone = $("input#telefone", $(this)).val();
      tipo = $("select#tipo", $(this)).val();


      $.ajax({
        url: "/dashboard/clientes/alterarPost.php/",
        type: "post",
        data: {id, nome, login, email, telefone, tipo},
        error: function(data){},
        success: function(data){
          if (JSON.parse(data) == "nope") $("#form-erro").html("O usuário não foi alterado");
          else window.location = "/dashboard/clientes/";
        }

      });


    });

  },

  adicionarClienteFormPost: function(){

    $('textarea#observacoes').characterCounter();

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


    $("#telFixo").mask("(99) 9999-9999");
    $("#telCelular").mask("(99) 99999-9999");

    $("#cpfCnpj").mask("999.999.999-99").keyup(function(){
      
      var cpf = $(this).val();     

      $.ajax({
        url: "/dashboard/clientes/methods/validarCpf",
        data: { cpf },
        type: "post",
        success: function(data){
          if (!JSON.parse(data)){
            $("#input-submit").parent().addClass("disabled");
            $("#validacaoCpf").html("O CPF informado não é válido para cadastro.");
          } else {
            $("#validacaoCpf").html("");
            $("#input-submit").parent().removeClass("disabled");
          }
        }

      });
    });

    $("#categoria").change(function(){
      categoriaId = $(this).val();

      if (categoriaId == 1){
        $(".div-input-file-cpf").fadeIn(300, function(){$("#input-file-cpf").attr("required", "required")});
        $(".div-input-file-rg").fadeIn(300, function(){$("#input-file-rg").attr("required", "required")});
        $(".div-input-file-cr").fadeIn(300, function(){$("#input-file-cr").removeAttr("required")});
        $(".div-input-file-ff").fadeOut(300, function(){$("#input-file-ff").removeAttr("required")});
        $(".div-input-file-ir").fadeOut(300, function(){$("#input-file-ir").removeAttr("required")});
        $(".div-input-file-ca").fadeOut(300, function(){$("#input-file-ca").removeAttr("required")});
        $(".div-input-file-cps").fadeOut(300, function(){$("#input-file-cps").removeAttr("required")});
        $(".div-input-file-pv").fadeOut(300, function(){$("#input-file-pv").removeAttr("required")});        
      } else if (categoriaId == 2){
        $(".div-input-file-cpf").fadeIn(300, function(){$("#input-file-cpf").attr("required", "required")});
        $(".div-input-file-rg").fadeIn(300, function(){$("#input-file-rg").attr("required", "required")});
        $(".div-input-file-cr").fadeIn(300, function(){$("#input-file-cr").attr("required", "required")});
        $(".div-input-file-ff").fadeIn(300, function(){$("#input-file-ff").attr("required", "required")});        
        $(".div-input-file-ir").fadeOut(300, function(){$("#input-file-ir").removeAttr("required")});
        $(".div-input-file-ca").fadeOut(300, function(){$("#input-file-ca").removeAttr("required")});
        $(".div-input-file-cps").fadeOut(300, function(){$("#input-file-cps").removeAttr("required")});
        $(".div-input-file-pv").fadeOut(300, function(){$("#input-file-pv").removeAttr("required")});        
      } else if (categoriaId == 3){
        $(".div-input-file-cpf").fadeIn(300, function(){$("#input-file-cpf").attr("required", "required")});
        $(".div-input-file-rg").fadeIn(300, function(){$("#input-file-rg").attr("required", "required")});
        $(".div-input-file-cr").fadeIn(300, function(){$("#input-file-cr").attr("required", "required")});
        $(".div-input-file-ff").fadeIn(300, function(){$("#input-file-ff").attr("required", "required")});        
        $(".div-input-file-ir").fadeIn(300, function(){$("#input-file-ir").attr("required", "required")});
        $(".div-input-file-ca").fadeIn(300, function(){$("#input-file-ca").attr("required", "required")});
        $(".div-input-file-cps").fadeIn(300, function(){$("#input-file-cps").attr("required", "required")});
        $(".div-input-file-pv").fadeIn(300, function(){$("#input-file-pv").attr("required", "required")});        
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
          $("#UF-residencial").val(data.estado);
          $("#pais-residencial").val("Brasil");
        }
      });
    });

    $("#filled-in-box").click(function(){
      if ($(this).is(":checked")) {
        $("#cep-entrega").val($("#cep-residencial").val());        
        $("#logradouro-entrega").val($("#logradouro-residencial").val());
        $("#numero-entrega").val($("#numero-residencial").val());
        $("#complemento-entrega").val($("#complemento-residencial").val());
        $("#bairro-entrega").val($("#bairro-residencial").val());
        $("#cidade-entrega").val($("#cidade-residencial").val());
        $("#UF-entrega").val($("#UF-residencial").val());
        $("#pais-entrega").val($("#pais-residencial").val());      
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
          $("#UF-entrega").val(data.estado);
          $("#pais-entrega").val("Brasil");
        }
      });
    });

    $("#form-adicionar-cliente-pf").submit(function(e){

      e.preventDefault();      
      var formData = new FormData($(this)[0]);

      formData.append( 'ofertasPorEmail', document.getElementsByName('ofertasPorEmail')[0].checked);
      formData.append( 'infoWhatsapp', document.getElementsByName('infoWhatsapp')[0].checked);

      $.ajax({
          url: "/dashboard/clientes/adicionarPost.php/",
          type: 'POST',
          data: formData,
          async: false,
          success: function (data) {
              alert(data);
              console.log(data);
          },
          cache: false,
          contentType: false,
          processData: false
      });      

    });

  },

  alterarClienteFormPost: function(){

    $('textarea#observacoes').characterCounter();

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


    $("#telFixo").mask("(99) 9999-9999");
    $("#telCelular").mask("(99) 99999-9999");

    $("#cpfCnpj").mask("999.999.999-99").keyup(function(){
      
      var cpf = $(this).val();     

      $.ajax({
        url: "/dashboard/clientes/methods/validarCpf",
        data: { cpf },
        type: "post",
        success: function(data){
          if (!JSON.parse(data)){
            $("#input-submit").parent().addClass("disabled");
            $("#validacaoCpf").html("O CPF informado não é válido para cadastro.");
          } else {
            $("#validacaoCpf").html("");
            $("#input-submit").parent().removeClass("disabled");
          }
        }

      });
    });

    $("#categoria").change(function(){
      categoriaId = $(this).val();

      if (categoriaId == 1){
        $(".div-input-file-cpf").fadeIn(300, function(){$("#input-file-cpf").attr("required", "required")});
        $(".div-input-file-rg").fadeIn(300, function(){$("#input-file-rg").attr("required", "required")});
        $(".div-input-file-cr").fadeIn(300, function(){$("#input-file-cr").removeAttr("required")});
        $(".div-input-file-ff").fadeOut(300, function(){$("#input-file-ff").removeAttr("required")});
        $(".div-input-file-ir").fadeOut(300, function(){$("#input-file-ir").removeAttr("required")});
        $(".div-input-file-ca").fadeOut(300, function(){$("#input-file-ca").removeAttr("required")});
        $(".div-input-file-cps").fadeOut(300, function(){$("#input-file-cps").removeAttr("required")});
        $(".div-input-file-pv").fadeOut(300, function(){$("#input-file-pv").removeAttr("required")});        
      } else if (categoriaId == 2){
        $(".div-input-file-cpf").fadeIn(300, function(){$("#input-file-cpf").attr("required", "required")});
        $(".div-input-file-rg").fadeIn(300, function(){$("#input-file-rg").attr("required", "required")});
        $(".div-input-file-cr").fadeIn(300, function(){$("#input-file-cr").attr("required", "required")});
        $(".div-input-file-ff").fadeIn(300, function(){$("#input-file-ff").attr("required", "required")});        
        $(".div-input-file-ir").fadeOut(300, function(){$("#input-file-ir").removeAttr("required")});
        $(".div-input-file-ca").fadeOut(300, function(){$("#input-file-ca").removeAttr("required")});
        $(".div-input-file-cps").fadeOut(300, function(){$("#input-file-cps").removeAttr("required")});
        $(".div-input-file-pv").fadeOut(300, function(){$("#input-file-pv").removeAttr("required")});        
      } else if (categoriaId == 3){
        $(".div-input-file-cpf").fadeIn(300, function(){$("#input-file-cpf").attr("required", "required")});
        $(".div-input-file-rg").fadeIn(300, function(){$("#input-file-rg").attr("required", "required")});
        $(".div-input-file-cr").fadeIn(300, function(){$("#input-file-cr").attr("required", "required")});
        $(".div-input-file-ff").fadeIn(300, function(){$("#input-file-ff").attr("required", "required")});        
        $(".div-input-file-ir").fadeIn(300, function(){$("#input-file-ir").attr("required", "required")});
        $(".div-input-file-ca").fadeIn(300, function(){$("#input-file-ca").attr("required", "required")});
        $(".div-input-file-cps").fadeIn(300, function(){$("#input-file-cps").attr("required", "required")});
        $(".div-input-file-pv").fadeIn(300, function(){$("#input-file-pv").attr("required", "required")});        
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
          $("#UF-residencial").val(data.estado);
          $("#pais-residencial").val("Brasil");
        }
      });
    });

    $("#filled-in-box").click(function(){
      if ($(this).is(":checked")) {
        $("#cep-entrega").val($("#cep-residencial").val());        
        $("#logradouro-entrega").val($("#logradouro-residencial").val());
        $("#numero-entrega").val($("#numero-residencial").val());
        $("#complemento-entrega").val($("#complemento-residencial").val());
        $("#bairro-entrega").val($("#bairro-residencial").val());
        $("#cidade-entrega").val($("#cidade-residencial").val());
        $("#UF-entrega").val($("#UF-residencial").val());
        $("#pais-entrega").val($("#pais-residencial").val());      
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
          $("#UF-entrega").val(data.estado);
          $("#pais-entrega").val("Brasil");
        }
      });
    });

    $("#form-adicionar-cliente-pf").submit(function(e){

      e.preventDefault();      
      var formData = new FormData($(this)[0]);

      formData.append( 'ofertasPorEmail', document.getElementsByName('ofertasPorEmail')[0].checked);
      formData.append( 'infoWhatsapp', document.getElementsByName('infoWhatsapp')[0].checked);

      $.ajax({
          url: "/dashboard/clientes/adicionarPost.php/",
          type: 'POST',
          data: formData,
          async: false,
          success: function (data) {
              alert(data);
              console.log(data);
          },
          cache: false,
          contentType: false,
          processData: false
      });      

    });

  }

};