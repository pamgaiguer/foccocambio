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


    $("#form-adicionar-cliente").submit(function(e){

      e.preventDefault();


      tipoPessoa = $("input#tipoPessoa", $(this)).val();
      razaoSocial = $("input#razaoSocial", $(this)).val();
      cpfCnpj = $("input#cpfCnpj", $(this)).val();
      dataNascimento = $("input#dataNascimento", $(this)).val();
      rg = $("input#rg", $(this)).val();
      rgOrgaoExpedidor = $("input#rgOrgaoExpedidor", $(this)).val();
      rgDataExpedicao = $("input#rgDataExpedicao", $(this)).val();
      sexo = $("select#sexo", $(this)).val();
      nacionalidade = $("input#nacionalidade", $(this)).val();
      estadoCivil = $("select#estadoCivil", $(this)).val();
      nomeConjuge = $("input#nomeConjuge", $(this)).val();
      dataNascimentoConjuge = $("input#dataNascimentoConjuge", $(this)).val();
      nomeMae = $("input#nomeMae", $(this)).val();
      nomePai = $("input#nomePai", $(this)).val();
      email = $("input#email", $(this)).val();
      telFixo = $("input#telFixo", $(this)).val();
      telCelular = $("input#telCelular", $(this)).val();
      contraSenha = $("input#contraSenha", $(this)).val();
      categoria = $("select#categoria", $(this)).val();
      ofertasPorEmail = $("input#ofertasPorEmail", $(this)).is(":checked");
      infoWhatsapp = $("input#infoWhatsapp", $(this)).is(":checked");
      observacoes = $("textarea#observacoes", $(this)).val();


      $.ajax({
        url: "/dashboard/clientes/adicionarPost.php/",
        type: "post",
        data: {
          tipoPessoa, razaoSocial, cpfCnpj, dataNascimento,
          rg, rgOrgaoExpedidor, rgDataExpedicao, sexo, nacionalidade,
          estadoCivil, nomeConjuge, dataNascimentoConjuge, nomeMae, nomePai,
          email, telFixo, telCelular, contraSenha, categoria, ofertasPorEmail,
          infoWhatsapp, observacoes
        },
        //error: function(data){},
        success: function(data){alert(data);
          if (JSON.parse(data) == "nope") $("#form-erro").html("O cliente não foi cadastrado");
          else window.location = "/dashboard/clientes/";
        }

      });


    });

  }

};