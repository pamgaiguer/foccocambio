
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
        beforeSend: function(){
          $(".main-loader").fadeIn(100);
        },
        success: function(data){
          $(".main-loader").fadeOut(100);
          if (JSON.parse(data) == "nope") $("#form-erro").html("O usuário não foi autenticado");
          else if (JSON.parse(data).length > 10) window.location = JSON.parse(data);
          else window.location = "/dashboard/home";
        }

      });


    });

  },

  home: function(){


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
        beforeSend: function(){
          $(".main-loader").fadeIn(100);
        },

        success: function(data){
          $(".main-loader").fadeOut(100);
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
        beforeSend: function(){
          $(".main-loader").fadeIn(100);
        },
        success: function(data){
          $(".main-loader").fadeOut(100);
          if (JSON.parse(data) == "nope") $("#form-erro").html("O usuário não foi adicionado");
          else window.location = "/dashboard/usuarios/";
        }

      });


    });

  },

  adicionarClienteFormPost: function(){

    $('textarea#observacoes').characterCounter();
    $('textarea#observacoes').trigger('autoresize');

    $('ul.tabs').tabs();
    $('select').material_select();

    $('.datepicker').mask("99/99/9999");
    $('.currency').mask("#.##0,00", {reverse: true});

    $("#cnh").keyup(function(){
      if ($(this).val().length > 0) {
        $("#cnhDataValidade").attr("required", "true");
      } else {
        $("#cnhDataValidade").removeAttr("required");
      }
    });

    $("#estadoCivil").change(function(){
      if ($(this).val() == 2){
        $(".dados-conjuge").fadeIn(300);
        $("#nomeConjuge").attr("required", "required");
        $("#dataNascimentoConjuge").attr("required", "required");
      } else {
        $(".dados-conjuge").fadeOut(300);
        $("#nomeConjuge").removeAttr("required");
        $("#dataNascimentoConjuge").removeAttr("required");
      }
    });

    $("#bloqueioManual").change(function(){
      if ($(this).val() == 1){
        $(".motivoBlock").fadeIn(300);
        $("#motivoStatusBlocked").attr("required", "required");
      } else {
        $(".motivoBlock").fadeOut(300);
        $("#motivoStatusBlocked").removeAttr("required");
      }
    });

    $("#motivoStatusBlocked").change(function(){
      if ($(this).val() == 1 || $(this).val() == 2 || $(this).val() == 3 || $(this).val() == 4 || $(this).val() == 5){
        $("#observacoes").attr("required", "required");
      } else {
        $("#observacoes").removeAttr("required");
      }
    });

    $("#ondeConheceuFocco").change(function(){
      if($(this).val()== 4){
        $(".ondeSoubeFocco").fadeIn(300);
        $("#ondeConheceuFoccoDesc").attr("required", "required");
      }
      else {
        $(".ondeSoubeFocco").fadeOut(300);
        $("#ondeConheceuFoccoDesc").removeAttr();
      }
    });

    $("#telFixo").mask("(99) 9999-9999");
    $("#telCelular").mask("(99) 99999-9999");


    $("#numPassaporte").keyup(function(){
      if ($(this).val().length > 0) $("#cpfCnpj").removeAttr("required");
      else $("#cpfCnpj").attr("required", "required");
    });

    $("#cpfCnpj").mask("999.999.999-99").keyup(function(){


      if ($("#numPassaporte").val().length > 0) {
        $("#validacaoCpf").html("");
        $("#input-submit").parent().removeClass("disabled");
        return;
      }

      var cpf = $(this).val();
      var adicionar = true;

      $.ajax({
        url: "/dashboard/clientes/methods/validarCpf.php/",
        data: { cpf, adicionar },
        type: "post",
        success: function(data){
          //alert(data);
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

      $("#limiteOperacionalDia").attr("readonly", "true");
      $("#limiteOperacionalAno").attr("readonly", "true");

      if (categoriaId == 1){
        $("#limiteOperacionalDia").val("3000,00");
        $("#limiteOperacionalAno").val("13.000,00");

        $(".div-input-file-cpf").fadeIn(300);
        $(".div-input-file-rg").fadeIn(300);
        $(".div-input-file-cr").fadeIn(300);
        $(".div-input-file-ff").fadeOut(300);
        $(".div-input-file-ir").fadeOut(300);
        $(".div-input-file-ca").fadeOut(300);
        $(".div-input-file-cps").fadeOut(300);
        $(".div-input-file-pv").fadeOut(300);
      } else
      if (categoriaId == 2){
        $("#limiteOperacionalDia").val("10000,00");
        $("#limiteOperacionalAno").val("13.000,00");

        $(".div-input-file-cpf").fadeIn(300);
        $(".div-input-file-rg").fadeIn(300);
        $(".div-input-file-cr").fadeIn(300);
        $(".div-input-file-ff").fadeIn(300);
        $(".div-input-file-ir").fadeOut(300);
        $(".div-input-file-ca").fadeOut(300);
        $(".div-input-file-cps").fadeOut(300);
        $(".div-input-file-pv").fadeOut(300);

      } else
      if (categoriaId == 3){

        $("#limiteOperacionalDia").removeAttr("readonly");
        $("#limiteOperacionalAno").removeAttr("readonly");
        $("#limiteOperacionalDia").removeAttr("disabled");
        $("#limiteOperacionalAno").removeAttr("disabled");
        $("#limiteOperacionalDia").val("10000,00");
        $("#limiteOperacionalAno").val("13.000,00");

        $(".div-input-file-cpf").fadeIn(300);
        $(".div-input-file-rg").fadeIn(300);
        $(".div-input-file-cr").fadeIn(300);
        $(".div-input-file-ff").fadeIn(300);
        $(".div-input-file-ir").fadeIn(300);
        $(".div-input-file-ca").fadeOut(300);
        $(".div-input-file-cps").fadeOut(300);
        $(".div-input-file-pv").fadeOut(300);

      } else
      if (categoriaId == 4){

        $("#limiteOperacionalDia").removeAttr("readonly");
        $("#limiteOperacionalAno").removeAttr("readonly");
        $("#limiteOperacionalDia").removeAttr("disabled");
        $("#limiteOperacionalAno").removeAttr("disabled");
        $("#limiteOperacionalDia").val("10000,00");
        $("#limiteOperacionalAno").val("13.000,00");

        $(".div-input-file-cpf").fadeIn(300);
        $(".div-input-file-rg").fadeIn(300);
        $(".div-input-file-cr").fadeIn(300);
        $(".div-input-file-ff").fadeIn(300);
        $(".div-input-file-ir").fadeIn(300);
        $(".div-input-file-ca").fadeIn(300);
        $(".div-input-file-cps").fadeIn(300);
        $(".div-input-file-pv").fadeIn(300);
      }

    });



    $("#cep-residencial").change(function(){
      cep = $(this).val();

      $.ajax({
        url: "http://api.postmon.com.br/v1/cep/" + cep,
        type: "get",
        success: function(data){
          //console.log(data);
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
          //console.log(data);
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
      formData.append( 'vip', document.getElementsByName('vip')[0].checked);


      $("#modal-confirm").click(function(e){
        e.preventDefault();

        $.ajax({
          url: "/dashboard/clientes/adicionarPost.php/",
          type: 'POST',
          data: formData,
          async: false,
          success: function (clienteId) {
            //console.log(clienteId);

            if (clienteId < 1) window.location = "/dashboard/clientes/";

            $('#modal2').openModal();

            $("#modal-confirm2").click(function(e){
              e.preventDefault();

              $.ajax({
                url:"/dashboard/boletagem/methods/validarCliente.php/",
                type: "post",
                data: {clienteId},
                beforeSend: function(){
                  $(".main-loader").fadeIn(100);
                },
                success: function(r){
                  $(".main-loader").fadeOut(100);
                  if (r == "true")
                    window.location = "/dashboard/boletagem/adicionar?clienteId=" + clienteId;
                  else
                    window.location = "/dashboard/boletagem?clienteId=" + clienteId;

                }

              });

            });

            $("#modal-confirm3").click(function(e){
              e.preventDefault();
              window.location = "/dashboard/clientes/adicionar";
            });


          },
          cache: false,
          contentType: false,
          processData: false

        });

      });

      $('#modal1').openModal();





    });

  },

  alterarClienteFormPost: function(){

    $('textarea#observacoes').characterCounter();

    $('ul.tabs').tabs();
    $('select').material_select();
    $('.datepicker').mask("99/99/9999");
    $('.currency').mask("#.##0,00", {reverse: true});

    $("#estadoCivil").change(function(){
      if ($(this).val() == 2){
        $(".dados-conjuge").fadeIn(300);
        $("#nomeConjuge").attr("required", "required");
        $("#dataNascimentoConjuge").attr("required", "required");
      } else {
        $(".dados-conjuge").fadeOut(300);
        $("#nomeConjuge").removeAttr("required");
        $("#dataNascimentoConjuge").removeAttr("required");
      }
    });

    $("#cnh").keyup(function(){
      if ($(this).val().length > 0) {
        $("#cnhDataValidade").attr("required", "true");
      } else {
        $("#cnhDataValidade").removeAttr("required");
      }
    });


    $("#bloqueioManual").change(function(){
      if ($(this).val() == 1){
        $(".motivoBlock").fadeIn(300);
        $("#motivoStatusBlocked").attr("required", "required");
      } else {
        $(".motivoBlock").fadeOut(300);
        $("#motivoStatusBlocked").removeAttr("required");
      }
    });

    $("#motivoStatusBlocked").change(function(){
      if ($(this).val() == 1 || $(this).val() == 2 || $(this).val() == 3 || $(this).val() == 4 || $(this).val() == 5){
        $("#observacoes").attr("required", "required");
      } else {
        $("#observacoes").removeAttr("required");
      }
    });

    $("#ondeConheceuFocco").change(function(){
      if($(this).val()== 4){
        $(".ondeSoubeFocco").fadeIn(300);
        $("#ondeConheceuFoccoDesc").attr("required", "required");
      }
      else {
        $(".ondeSoubeFocco").fadeOut(300);
        $("#ondeConheceuFoccoDesc").removeAttr();
      }
    });

    $("#telFixo").mask("(99) 9999-9999");
    $("#telCelular").mask("(99) 99999-9999");

    $("#numPassaporte").keyup(function(){
      if ($(this).val().length > 0) $("#cpfCnpj").removeAttr("required");
      else $("#cpfCnpj").attr("required", "required");
    });

    $("#cpfCnpj").mask("999.999.999-99").keyup(function(){

      if ($("#numPassaporte").val().length > 0) {
        $("#validacaoCpf").html("");
        $("#input-submit").parent().removeClass("disabled");
        return;
      }

      var cpf = $(this).val();
      var adicionar = false;

      $.ajax({
        url: "/dashboard/clientes/methods/validarCpf",
        data: { cpf, adicionar },
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

      $("#limiteOperacionalDia").attr("readonly", "true");
      $("#limiteOperacionalAno").attr("readonly", "true");

      if (categoriaId == 1){
        $("#limiteOperacionalDia").val("3000,00");
        $("#limiteOperacionalAno").val("13.000,00");

        $(".div-input-file-cpf").fadeIn(300);
        $(".div-input-file-rg").fadeIn(300);
        $(".div-input-file-cr").fadeIn(300);
        $(".div-input-file-ff").fadeOut(300);
        $(".div-input-file-ir").fadeOut(300);
        $(".div-input-file-ca").fadeOut(300);
        $(".div-input-file-cps").fadeOut(300);
        $(".div-input-file-pv").fadeOut(300);
      } else if (categoriaId == 2){
        $("#limiteOperacionalDia").val("10000,00");
        $("#limiteOperacionalAno").val("13.000,00");
        $(".div-input-file-cpf").fadeIn(300);
        $(".div-input-file-rg").fadeIn(300);
        $(".div-input-file-cr").fadeIn(300);
        $(".div-input-file-ff").fadeIn(300);
        $(".div-input-file-ir").fadeOut(300);
        $(".div-input-file-ca").fadeOut(300);
        $(".div-input-file-cps").fadeOut(300);
        $(".div-input-file-pv").fadeOut(300);
      }
      else if (categoriaId == 3){
        $("#limiteOperacionalDia").removeAttr("readonly");
        $("#limiteOperacionalAno").removeAttr("readonly");
        $("#limiteOperacionalDia").val("10000,00");
        $("#limiteOperacionalAno").val("13.000,00");
        $(".div-input-file-cpf").fadeIn(300);
        $(".div-input-file-rg").fadeIn(300);
        $(".div-input-file-cr").fadeIn(300);
        $(".div-input-file-ff").fadeIn(300);
        $(".div-input-file-ir").fadeIn(300);
        $(".div-input-file-ca").fadeOut(300);
        $(".div-input-file-cps").fadeOut(300);
        $(".div-input-file-pv").fadeOut(300);
      }
      else if (categoriaId == 4) {
        $("#limiteOperacionalDia").removeAttr("readonly");
        $("#limiteOperacionalAno").removeAttr("readonly");
        $("#limiteOperacionalDia").val("10000,00");
        $("#limiteOperacionalAno").val("13.000,00");
        $(".div-input-file-cpf").fadeIn(300);
        $(".div-input-file-rg").fadeIn(300);
        $(".div-input-file-cr").fadeIn(300);
        $(".div-input-file-ff").fadeIn(300);
        $(".div-input-file-ir").fadeIn(300);
        $(".div-input-file-ca").fadeIn(300);
        $(".div-input-file-cps").fadeIn(300);
        $(".div-input-file-pv").fadeIn(300);
      }

    });

    $("#cep-residencial").change(function(){
      cep = $(this).val();

      $.ajax({
        url: "http://api.postmon.com.br/v1/cep/" + cep,
        type: "get",
        success: function(data){
          //console.log(data);
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
          //console.log(data);
          $("#logradouro-entrega").val(data.logradouro);
          $("#bairro-entrega").val(data.bairro);
          $("#cidade-entrega").val(data.cidade);
          $("#UF-entrega").val(data.estado);
          $("#pais-entrega").val("Brasil");
        }
      });
    });

    $("#form-alterar-cliente-pf").submit(function(e){

      e.preventDefault();
      var formData = new FormData($(this)[0]);

      formData.append( 'ofertasPorEmail', document.getElementsByName('ofertasPorEmail')[0].checked);
      formData.append( 'infoWhatsapp', document.getElementsByName('infoWhatsapp')[0].checked);
      formData.append( 'vip', document.getElementsByName('vip')[0].checked);

      $("#modal-confirm").click(function(e){
        e.preventDefault();

        $.ajax({
          url: "/dashboard/clientes/alterarPost.php/",
          type: 'POST',
          data: formData,
          async: false,
          beforeSend: function(){
            $(".main-loader").fadeIn(100);
          },
          success: function (data) {
            $(".main-loader").fadeOut(100);
            //console.log(data);
            window.location = "/dashboard/clientes/";
          },
          cache: false,
          contentType: false,
          processData: false
        });

      });


      $('#modal1').openModal();

    });

  },

  visualizarCliente: function(){
    $(".link-acao-cancelar").click(function(e){
      e.preventDefault();
      clienteId = $(this).data("cliente-id");
      boletagemId = $(this).data("boletagem-id");
      botao = $(this);

      $.ajax({
        url: "/dashboard/boletagem/methods/cancelar/",
        type: "post",
        data: {boletagemId},
        success: function(r){
          if (JSON.parse(r) == "ok") {
            $(botao).html("Cancelado!");
            $(botao).click(function(e){e.preventDefault()});
          }
        }
      });

    });

    $(".link-acao-reativar").click(function(e){
      e.preventDefault();
      clienteId = $(this).data("cliente-id");
      boletagemId = $(this).data("boletagem-id");
      botao = $(this);

      $.ajax({
        url: "/dashboard/boletagem/methods/reativar/",
        type: "post",
        data: {boletagemId},
        success: function(r){
         //console.log($(this));
         if (JSON.parse(r) == "ok") {
          $(botao).html("Reativado!");
          $(botao).click(function(e){e.preventDefault()});

        }

      }
    });
    });

  },

  indexCliente: function(){

    $("#form-busca-clientes").submit(function(e){
      e.preventDefault();

      search = $("#input-cpfcnpj", $(this)).val();
      tipo = "cpf";

      $.ajax({
        url: "/dashboard/clientes/methods/validarCpf",
        data: { "cpf" : search, "adicionar" : true },
        type: "post",
        success: function(data){
          if (!JSON.parse(data)){
            $("#validacaoCpf").html("CPF inválido para novo cadastro");
            $("#link-adicionar-cliente").addClass("disabled");
          } else {
            $("#validacaoCpf").html("");
            $("#link-adicionar-cliente").removeClass("disabled");
          }

          $.ajax({
            url: "/dashboard/clientes/methods/buscaCliente.php/",
            type: "POST",
            data: { search, tipo },
            beforeSend: function(){
              $(".main-loader").fadeIn(100);
            },
            success: function(r){
              $("#table-body-clientes").html(r);
              $(".main-loader").fadeOut(100);
            }
          });
        }

      });
    });

    $("#form-busca-clientes-nome").submit(function(e){
      e.preventDefault();

      search = $("#input-nome", $(this)).val();
      tipo = "nome";

      $.ajax({
        url: "/dashboard/clientes/methods/buscaCliente.php/",
        type: "POST",
        data: { search, tipo },
        beforeSend: function(){
          $(".main-loader").fadeIn(100);
        },
        success: function(r){
          $("#table-body-clientes").html(r);
          $(".main-loader").fadeOut(100);
        }
      });


    });

    $("#link-adicionar-cliente").click(function(e){
      e.preventDefault();
      cpf = $("#input-cpfcnpj").val();
      href = $(this).data("href");

      if (cpf != '') { window.location = href + "?cpf=" + cpf; }
      else { window.location = href; }

    });

    $(".link-acao").click(function(e){
      e.preventDefault();

      acao = $(this).data("acao");
      clienteId = $(this).data("cliente-id");
      link = $(this).data("href");

      switch(acao) {
        case "excluir":

        $("#modal-confirm").click(function(e){
          e.preventDefault();
          window.location = link;
        });

        $('#modal1').openModal();
        break;

        case "doc-prov":
        $("#modal-confirm2").click(function(e){
          e.preventDefault();


          login = $("input#login").val();
          senha = $("input#senha").val();

          $.ajax({
            url: "/dashboard/checarAdmin.php/",
            type: "post",
            data: {login, senha},
            beforeSend: function(){
              $(".main-loader").fadeIn(100);
            },
            success: function(r){
              $(".main-loader").fadeOut(100);
              switch (JSON.parse(r)) {
                case "nope":
                $("#form-erro").html("O usuário não foi autenticado");
                break;

                case "ok":
                $.ajax({
                  url: "/dashboard/clientes/methods/desbloquearDocProv.php/",
                  type: "post",
                  data: {clienteId},
                  success: function(r){
                    console.log(r);
                    if (JSON.parse(r) == "ok"){
                      window.location = "/dashboard/clientes/visualizar?clienteId=" + clienteId;
                    }
                  }
                });


                break;
              }

            }
          });

        });
        $('#modal2').openModal();
        break;

        default:
        window.location = link;
        break;
      }


    });

  },

  cotacoesFormPost: function(){

    var r = function(){

      $.ajax({
        url: "http://webservice.enfoque.com.br/wsFoccoCambio/cotacoes.asmx/MoedasJSON?login=wsFoccoCambio2016&senha=Moedas2016",
        type: "get",
        success: function(r){
          for(var x in r){
            o = r[x];

            if (o.COD.indexOf("BRL") == -1) continue;
            sigla = o.COD.substr(0, 3);

            console.log(sigla + ": R$ " + o.OVD);

            comercial = $("#td-" + sigla + " span");
            if (comercial == undefined) continue;
            if (comercial.html() == fromNumber5((o.OVD))) continue;

            $(comercial).fadeOut(100);
            $(comercial).html(fromNumber5((o.OVD)));
            $(comercial) .fadeIn(500);



          }
        }
      });

      setTimeout(function() {
        console.log('cotacoes atualizadas a cada 2s');
        r();
      }, 2000);
    }

    r();

    $("#form-cotacoes").submit(function(e){
      e.preventDefault();
      dolar = $("#input-dolar").val();
      euro = $("#input-euro").val();
      libra = $("#input-libra").val();

      $.ajax({
        url: "/dashboard/cotacoes/alterarPost.php/",
        type: "post",
        data: {dolar, euro, libra},
        beforeSend: function(){
          $(".main-loader").fadeIn(100);
        },
        success: function(r){
          $(".main-loader").fadeOut(100);
          if (JSON.parse(r) == "ok"){
            $("div.success").fadeIn(100);
          } else {
            $("div.error").fadeIn(100);
          }

        },
        error: function(r){
          $("div.error").fadeIn(100);
        }

      });
    });


  },

  indexBoletagem: function(){
    $("#form-busca-boletagem").submit(function(e){
      e.preventDefault();

      search = $("#input-cpfcnpj", $(this)).val();

      $.ajax({
        url: "/dashboard/boletagem/methods/validarCpf.php/",
        data: { "cpf" : search, "adicionar" : true },
        type: "post",
        success: function(data){

          if (!JSON.parse(data)){
            //$("#validacaoCpf").html("CPF inválido para boletagem");
            $("#link-adicionar-cliente").addClass("disabled");
          } else {
            $("#validacaoCpf").html("");
            $("#link-adicionar-cliente").removeClass("disabled");
          }

          $.ajax({
            url: "/dashboard/boletagem/methods/buscaCliente.php/",
            type: "POST",
            data: { search },
            beforeSend: function(){
              $(".main-loader").fadeIn(100);
            },
            success: function(r){
              $("#table-body-boletagem").html(r);
              $(".main-loader").fadeOut(100);
            }
          });
        }

      });
    });

    $("#link-adicionar-cliente").click(function(e){
      e.preventDefault();
      cpf = $("#input-cpfcnpj").val();
      href = $(this).data("href");

      if (cpf != '') { window.location = href + "?cpf=" + cpf; }
      else { window.location = href; }

    });

    $(".link-acao").click(function(e){
      e.preventDefault();

      acao = $(this).data("acao");
      clienteId = $(this).data("cliente-id");
      link = $(this).data("href");

      switch(acao) {
        case "doc-prov":
        $("#modal-confirm2").click(function(e){
          e.preventDefault();

          login = $("input#login").val();
          senha = $("input#senha").val();

          $.ajax({
            url: "/dashboard/checarAdmin.php/",
            type: "post",
            data: {login, senha},
            success: function(r){
              switch (JSON.parse(r)) {
                case "nope":
                $("#form-erro").html("O usuário não foi autenticado");
                break;

                case "ok":
                $.ajax({
                  url: "/dashboard/clientes/methods/desbloquearDocProv.php/",
                  type: "post",
                  data: {clienteId},
                  beforeSend: function(){
                    $(".main-loader").fadeIn(100);
                  },
                  success: function(r){
                    $(".main-loader").fadeOut(100);
                    if (JSON.parse(r) == "ok"){
                      window.location = "/dashboard/boletagem/adicionar?clienteId=" + clienteId;
                    }
                  }
                });
                break;
              }

            }
          });

        });
        $('#modal2').openModal();
        break;

        default:
        window.location = link;
        break;
      }


    });

  },

  indexCompraMoedas: function(){

    $("#search").mask("00/00/0000");
    $("#totalMoeda").mask("#.##0,00", {reverse: true});
    $("#totalReal").mask("#.##0,00", {reverse: true});
    $("#mediaPonderada").mask("#.##0,00", {reverse: true});

    $(".td-1").bind("DOMSubtreeModified", function(){
      contexto = $(this).parent();
      $(".td-tot", contexto).html(fromNumber(toNumber($(this).html()) + toNumber($(".td-2").html()) + toNumber($(".td-3").html())));
    });

    $(".td-2").bind("DOMSubtreeModified", function(){
      contexto = $(this).parent();
      $(".td-tot", contexto).html(fromNumber(toNumber($(this).html()) + toNumber($(".td-1").html()) + toNumber($(".td-3").html())));
    });

    $(".td-3").bind("DOMSubtreeModified", function(){
      contexto = $(this).parent();
      $(".td-tot", contexto).html(fromNumber(toNumber($(this).html()) + toNumber($(".td-2").html()) + toNumber($(".td-1").html())));
    });

    $("#form-busca-compraMoedas").submit(function(e){
      e.preventDefault();

      search = $("#search", $(this)).val();

      $.ajax({
        url: "/dashboard/compraMoedas/methods/buscar.php/",
        type: "post",
        data: { search },
        beforeSend: function(){
          $(".main-loader").fadeIn(100);
        },
        success: function(r){
          compras = JSON.parse(r);          

          $.grep(compras, function(c,i){            
            td = $(".td-"+c.moeda+"-"+c.caixaId);
            valor = fromNumber($(td).html() || "");            
            valor += toNumber(c.quantidade);            
            $(td).html(fromNumber(valor));
          });

          comprasFocco = $.grep(compras, function(c,i){ return c.caixaId == 1; });
          comprasFoccox = $.grep(compras, function(c,i){ return c.caixaId == 2; });
          comprasFX53 = $.grep(compras, function(c,i){ return c.caixaId == 3; });

          totFocco = 0;
          $.grep(comprasFocco, function(c,i){            
            totFocco += toNumber(c.quantidade) * toNumber(c.taxa);
          });
          $(".td-tot-1").html(fromNumber(totFocco));
          

          totFoccoX = 0;
          $.grep(comprasFoccox, function(c,i){            
            totFoccoX += toNumber(c.quantidade) * toNumber(c.taxa);
          });
          $(".td-tot-2").html(fromNumber(totFoccoX));

          totFX53 = 0;
          $.grep(comprasFX53, function(c,i){            
            totFX53 += toNumber(c.quantidade) * toNumber(c.taxa);
          });
          $(".td-tot-3").html(fromNumber(totFX53));

          $(".main-loader").fadeOut(100);

         

        }
      });

    });
  },

  compraMoedasCalculos: function(){

    $(".quantidade").blur(function(e){
      contexto = $(e.currentTarget).parent().parent();
      if (toNumber($(".taxa", contexto).val()) > 0.00){
        $(".total", contexto).val(fromNumber( toNumber($(this).val()) * toNumber($(".taxa", contexto).val()) )).blur();
      }
    });

    $(".taxa").blur(function(e){
      contexto = $(e.currentTarget).parent().parent();

      if (toNumber($(".quantidade", contexto).val()) > 0.00){
        $(".total", contexto).val(fromNumber( toNumber($(this).val()) * toNumber($(".quantidade", contexto).val()) )).blur();        
      }
    });

  },

  adicionarCompraMoedas: function(){

    $("#link-adicionar-interbancario").click(function(e){

      e.preventDefault();
      model = $("#div-linha-interbancario-model").clone();
      model.attr("id", "");

      $("#div-linhas-interbancario").append(model[0]);
      $("#div-linhas-interbancario").append("<script type='text/javascript'> focco.compraMoedasCalculos(); </script>");

    });
    //$('.currency').mask("#.##0,00", {reverse: true});    


    $("#form-adicionar-compraMoedas").submit(function(e){
      e.preventDefault();
      
      $(".main-loader").fadeIn(100);

      usuarioId = $("#usuarioId").val();
      $(".div-linha-interbancario").each(function(key, contexto){

        taxa = $(".taxa", contexto).val();
        quantidade = $(".quantidade", contexto).val();
        if (toNumber(taxa) == 0 || toNumber(quantidade) == 0) return;

        moeda = $(".select-moedas", contexto).val();
        caixa = $(".select-caixa", contexto).val();
        data = $(".data", contexto).val();        
        total = $(".total", contexto).val();
        fechamento = $(".fechamento", contexto).val();
        entrega = $(".entrega", contexto).val();

        $.ajax({
          url: "/dashboard/compraMoedas/adicionarPost.php/",
          type: "post",
          data: {
            usuarioId, moeda, caixa, data, quantidade,
            taxa, total, fechamento, entrega
          },
          success: function(r){            
            //if (JSON.parse(r) == "ok")
          }

        });


      });

      $(".main-loader").fadeOut(100);
      window.location = "/dashboard/compraMoedas/";

    });

  },

  calculadora: function(){

    var r = function(){

      $.ajax({
        url: "http://webservice.enfoque.com.br/wsFoccoCambio/cotacoes.asmx/MoedasJSON?login=wsFoccoCambio2016&senha=Moedas2016",
        type: "get",
        success: function(r){
          for(var x in r){
            o = r[x];

            if (o.COD.indexOf("BRL") == -1) continue;
            sigla = o.COD.substr(0, 3);

            comercial = $("#" + sigla + "-comercial");
            if (comercial == undefined) continue;

            custo = $("#" + sigla + "-custo");
            custoFocco = $("#" +  sigla + "-custoFocco");
            margPonto = $("#" +  sigla + "-margPonto");
            txSIof = $("#" +  sigla + "-txSIof");
            txCIof = $("#" +  sigla + "-txCIof");
            txSIofBoletagem = $("#" +  sigla + "-txSIofBoletagem");
            margLiquidaPercent = $("#" +  sigla + "-margLiquidaPercent");
            margLiquida = $("#" +  sigla + "-margLiquida");

            txFinal = $("#" +  sigla + "-txFinal");

            $(comercial).val(fromNumber5((o.OVD)));
            $(custoFocco).val(fromNumber5( toNumber($(comercial).val()) + (toNumber($(comercial).val()) * toNumber($(custo).val())) / 100 ));
            $(txSIof).val(fromNumber5( toNumber ($(custoFocco).val()) + toNumber($(margPonto).val()) ));
            $(txCIof).val(fromNumber5( toNumber($(txSIof).val()) + (toNumber($(txSIof).val()) * 1.1/100) ));

            $(margLiquidaPercent).val(fromNumber5( (-100) * ((toNumber($(custoFocco).val())/ toNumber($(txSIof).val()))-1) ));

            $(txFinal).blur(function(){

              m = $(this).attr("id").substr(0, 3);

              $("#" + m + "-txSIofBoletagem").val(fromNumber5( toNumber($("#" +  m + "-txSIof").val()) - ( toNumber($("#" +  m + "-txCIof").val()) - toNumber($(this).val()) ) ));
              $("#" + m + "-margLiquida").val(fromNumber5( (-100) * ((toNumber($("#" +  m + "-custoFocco").val())/ toNumber($("#" + m + "-txSIofBoletagem").val()))-1) ));
            });
          }
        }
      });

      setTimeout(function() {
        console.log('calculadora atualizada a cada 2s');
        r();
      }, 2000);
    }

    r();
  },

  blogAdicionar: function(){
    $('#postContent').froalaEditor({
      language:'pt_br',
      charCounterMax: 1000,
      saveInterval: 2500,
      fontFamily: {
        'Avenir-Regular,sans-serif': 'Font 1',
        'Roboto,sans-serif': 'Font 2',
      },
      imageAllowedTypes: ['jpeg', 'jpg', 'png']
    });


    $("#form-blog-adicionar").submit(function(e){
      e.preventDefault();

      usuarioId = $("#usuarioId").val();
      titulo = $("#titulo").val();
      subtitulo = $("#subtitulo").val();
      conteudo = $("#postContent").val();

      $("#modal-confirm").click(function(e){
        e.preventDefault();

        $.ajax({
          url: "/dashboard/blog/adicionarPost.php/",
          type: "post",
          data: {usuarioId, titulo, subtitulo, conteudo},
          beforeSend: function(){
            $(".main-loader").fadeIn(100);
          },
          success: function(r){
            $(".main-loader").fadeOut(100);
            window.location = "/dashboard/blog";

          }
        });

      });

      $('#modal1').openModal();

    });
  },

  muralAdicionar: function(){
    $('#postContent').froalaEditor({
      language:'pt_br',
      charCounterMax: 1000,
      saveInterval: 2500,
      fontFamily: {
        'Avenir-Regular,sans-serif': 'Font 1',
        'Roboto,sans-serif': 'Font 2',
      },
      imageAllowedTypes: ['jpeg', 'jpg', 'png']
    });


    $("#form-mural-adicionar").submit(function(e){
      e.preventDefault();

      usuarioId = $("#usuarioId").val();
      titulo = $("#titulo").val();
      subtitulo = $("#subtitulo").val();
      conteudo = $("#postContent").val();

      $("#modal-confirm").click(function(e){
        e.preventDefault();

        $.ajax({
          url: "/dashboard/mural/adicionarPost.php/",
          type: "post",
          data: {usuarioId, titulo, subtitulo, conteudo},
          beforeSend: function(){
            $(".main-loader").fadeIn(100);
          },
          success: function(r){
            $(".main-loader").fadeOut(100);
            window.location = "/dashboard/mural";

          }
        });

      });

      $('#modal1').openModal();

    });
  },

  orcamentoCalculos: function(){
    $(".orcOperacao").change(function(e){
      contexto = $(e.currentTarget).parent().parent();

      switch($(this).val()){
        case "1": $(".orcIOF", contexto).val("1,1");  break;
        case "2":
        if ($(".orcModalidade", contexto).val() == 2)
          $(".orcIOF", contexto).val("6,38");
        else
          $(".orcIOF", contexto).val("0,38");
        break;

        case "3": $(".orcIOF", contexto).val("0,38"); break;
        case "4": $(".orcIOF", contexto).val("0"); break;
        default: break;
      }
      $(".orcIOF").blur();

    });

    $(".orcOperacao").change();


    $(".orcQtd").blur(function(e){
      contexto = $(e.currentTarget).parent().parent();
      if (toNumber($(".orcTaxa", contexto).val()) > 0.00){
        $(".orcTotalSIOF", contexto).val(fromNumber( toNumber($(this).val()) * toNumber($(".orcTaxa", contexto).val()) )).blur();
      }
    });

    $(".orcTaxa").blur(function(e){
      contexto = $(e.currentTarget).parent().parent();

      if (toNumber($(".orcQtd", contexto).val()) > 0.00){
        $(".orcTotalSIOF", contexto).val(fromNumber( toNumber($(this).val()) * toNumber($(".orcQtd", contexto).val()) )).blur();
        $(".orcVET", contexto).val(fromNumber( toNumber($(".orcTotalSIOF", contexto).val()) + toNumber($(".orcDARF", contexto).val()) + (toNumber($(".orcTotalSIOF", contexto).val()) * toNumber($(".orcIOF", contexto).val()) / 100) ));
      }
    });

    $(".orcDARF").blur(function(e){
      contexto = $(e.currentTarget).parent().parent();

      $(".orcVET", contexto).val(fromNumber(
        toNumber($(this).val()) + (toNumber($(".orcTotalSIOF", contexto).val()) + toNumber($(".orcTotalSIOF", contexto).val()) * toNumber($(".orcIOF", contexto).val()) / 100)
        ));


      $(".orcTaxa", contexto).blur();

    });

    $(".orcIOF").blur(function(e){
      contexto = $(e.currentTarget).parent().parent();

      $(".orcVET", contexto).val(fromNumber(
        toNumber($(".orcDARF", contexto).val()) + (toNumber($(".orcTotalSIOF", contexto).val()) + toNumber($(".orcTotalSIOF", contexto).val()) * toNumber($(".orcIOF", contexto).val()) / 100)
        ));

    });
  },

  orcamento: function(){
    $("#link-adicionar-orcamento").click(function(e){

      e.preventDefault();
      model = $("#div-linha-orcamento-model").clone();
      model.attr("id", "");

      $("#div-linhas-orcamento").append(model[0]);
      $("#div-linhas-orcamento").append("<script type='text/javascript'> focco.orcamentoCalculos(); </script>");

    });

    $("#btn-enviar-orcamento").click(function(e){
      e.preventDefault();


      trs = "";

      totIof = 0;
      totOperacao = 0;
      totDarf = 0;
      totVet = 0;

      $(".div-linha-orcamento").each(function(key, contexto){
        taxa = $(".orcTaxa", contexto).val();
        if (toNumber(taxa) == 0) return;

        moeda = $(".orcMoedas", contexto).val();
        modalidade = $(".orcModalidade", contexto).val();
        operacao = $(".orcOperacao option:selected", contexto).text();
        quantidade = fromNumber($(".orcQtd", contexto).val());
        iof = fromNumber( toNumber($(".orcTotalSIOF", contexto).val()) * toNumber($(".orcIOF", contexto).val()) / 100 );
        subtotal = fromNumber( toNumber($(".orcTotalSIOF", contexto).val()) + toNumber($(".orcTotalSIOF", contexto).val()) * toNumber($(".orcIOF", contexto).val()) / 100 );
        darf = fromNumber( toNumber($(".orcDARF", contexto).val()) );

        totIof += toNumber(iof);
        totDarf += toNumber(darf);
        totOperacao += toNumber(subtotal);

        totVet += totDarf + totOperacao;


        linha = "<tr style='text-align: center; color: #464C58; font-family: 'Lato', Calibri, Arial, sans-serif; font-size: 14px; font-weight: 600;'> "+
        "  <td>"+moeda+"</td> "+
        "  <td>"+(modalidade == 2 ? 'VENDA' : 'COMPRA')+"</td>"+
        "  <td>"+operacao+"</td>"+
        "  <td>"+quantidade+"</td>"+
        "  <td>"+fromNumber5(toNumber(taxa).toFixed(5))+"</td>"+
        "  <td>"+iof+"</td>"+
        "  <td>"+subtotal+"</td>"+
        "</tr>";

        trs += linha;
      });

      body = "";
      $.get("/dashboard/templates_email/orcamento.html",function(r){

        r = r.replace("{{cliente}}", $("#nomeCliente").val());
        r = r.replace("{{data}}", new Date(Date.now()).toLocaleString());
        r = r.replace("{{data}}", new Date(Date.now()).toLocaleString());//é pra deixar as duas linhas iguais
        r = r.replace("{{linhas}}", trs);
        r = r.replace("{{totIof}}", fromNumber(totIof));
        r = r.replace("{{totDarf}}", fromNumber(totDarf));
        r = r.replace("{{totOperacao}}", fromNumber(totOperacao));
        r = r.replace("{{totVet}}", fromNumber(totVet));

        $.ajax({
          url: "/dashboard/core/email.php/",
          type: "post",
          data: {nome : $("#nomeCliente").val(), email: $("#emailCliente").val(), assunto: "Focco - Orçamento", body: r},
          beforeSend: function(){
            $(".main-loader").fadeIn(100);
          },
          success: function(r){
            $(".main-loader").fadeOut(100);
            window.location = "/dashboard/orcamento";
          }
        });

      });





    });
  },


  adicionarBoletagem: function(){

    $('.currency').mask("#.##0,00", {reverse: true});
    $('.currency5').mask("#.##0,00000", {reverse: true});
    $('.datepicker').mask("99/99/9999");
    $("#select-operacao option[value='3']").hide();
    $("#select-operacao option[value='4']").hide();
    var verificaCheck =$('#entregaACombinar:checked').val();

    $("#select-formaEntrega").change(function(){
      if($(this).val()== 2){
        $(".field-entregas").fadeIn(300);
      }
      else {
        $(".field-entregas").fadeIn(300);
      }
    });

    $("#entregaACombinar").click(function(){
      if($(this).is(':checked')){
        $(".dtEntrega").hide();
      }
      else{
        $(".dtEntrega").show();
      }
    });

    $("#select-caixa").change(function(){

      console.log($(this).val());
      if ($(this).val() == 3) {
        $(".div-swift").fadeIn(100);
        $(".div-darf").fadeIn(100);
        $(".div-txnivel").fadeIn(100);
        $(".div-mn").fadeOut(100);
        $("#select-operacao option[value='3']").show();
        $("#select-operacao option[value='4']").show();
      }
      else {
        $(".div-swift").fadeOut(100);
        $(".div-darf").fadeOut(100);
        $(".div-txnivel").fadeOut(100);
        $(".div-mn").fadeIn(100);

        $("#txNivel").val("");
        $("#swift").val("");
        $("#darf").val("");

        $("#select-operacao option[value='3']").hide();
        $("#select-operacao option[value='4']").hide();
      }
    });

    $("#select-caixa").change();

    $("#select-modalidade").change(function(){

      //venda
      if ($(this).val() == 2) {
        //cartao prepago
        if ($("#select-operacao").val() == 2) $("#ioftaxa").val("6.38");
      } else {
        //cartao prepago
        if ($("#select-operacao").val() == 2) $("#ioftaxa").val("0.38");
      }

    });

    $("#select-operacao").change(function(){
      switch($(this).val()){
        case "1": $("#ioftaxa").val("1.1");  break;
        case "2":
        if ($("#select-modalidade").val() == 2)
          $("#ioftaxa").val("6.38");
        else
          $("#ioftaxa").val("0.38");
        break;

        case "3": $("#ioftaxa").val("0.38"); break;
        case "4": $("#ioftaxa").val("0"); break;
        default: break;
      }

      operacao = $(this).val() + "";

      $("option", "#select-moedas").each(function(){
        operacoes = $(this).data("operacoes") + "";

        if (operacoes.indexOf(operacao) == -1) {
          $(this).hide();//attr("disabled", true);
        } else {
          $(this).show();//removeAttr("disabled");
        }

      });
    });



    $("#quantidade").blur(function(){
      if (toNumber($("#taxa").val()) > 0.00){
        $("#subtotal").val(fromNumber( toNumber($(this).val()) * toNumber($("#taxa").val()) )).blur();
        $("#iof").val(fromNumber( (toNumber($("#subtotal").val()) * $("#ioftaxa").val()) / 100 ));

        var debitoLimite = ( toNumber($(this).val()) * toNumber($("#taxa").val())) / toNumber($("#taxaDolar").val());

        //estourou limite
        if (toNumber($("#limiteDisponivel").val()) < debitoLimite) {
          $("#input-submit").addClass("disabled");
          $("#limite-excedido").html("<div class='alert error'><p>Limite do cliente excedido</p></div>");
        }
        else {
          $("#input-submit").removeClass("disabled");
          $("#limite-excedido").html("");
        }
      }
    });

    $("#taxa").blur(function(){
      if (toNumber($("#quantidade").val()) > 0.00){

        //caixa fx53
        if ($("#select-caixa").val() == 3){

          $("#subtotal").val(fromNumber( toNumber($(this).val()) * toNumber($("#quantidade").val()) )).blur();
          $("#iof").val(fromNumber( (toNumber($("#subtotal").val()) * $("#ioftaxa").val()) / 100 ));
          $("#vet").val(fromNumber( toNumber($("#subtotal").val()) + toNumber($("#iof").val()) ));
          $("#vettaxa").val(fromNumber5( toNumber($("#vet").val()) / toNumber($("#quantidade").val()) ));

        } else {
          $("#subtotal").val(fromNumber( toNumber($(this).val()) * toNumber($("#quantidade").val()) ));
          $("#iof").val(fromNumber( (toNumber($("#subtotal").val()) * $("#ioftaxa").val()) / 100 ));
          $("#mn").val(fromNumber( toNumber($("#subtotal").val()) + toNumber($("#iof").val()) ));
          $("#vettaxa").val(fromNumber5( toNumber($("#mn").val()) / toNumber($("#quantidade").val()) ));
          $("#vet").val(fromNumber( toNumber($("#subtotal").val()) + toNumber($("#iof").val()) ));
        }

        var debitoLimite = ( toNumber($("#quantidade").val()) * toNumber($(this).val())) / toNumber($("#taxaDolar").val());

        //estourou limite
        if (toNumber($("#limiteDisponivel").val()) < debitoLimite) {
          $("#input-submit").addClass("disabled");
          $("#p-limite-excedido").html("Limite do cliente excedido");
        } else {
          $("#input-submit").removeClass("disabled");
          $("#p-limite-excedido").html("");
        }

      }
    });

    $("#swift").blur(function(){

      $("#vet").val(fromNumber(
        toNumber($(this).val()) + toNumber($("#subtotal").val()) + toNumber($("#iof").val()) + toNumber($("#darf").val())
        ));
      $("#vettaxa").val(fromNumber5( toNumber($("#vet").val()) / toNumber($("#quantidade").val()) ));


    });


    $("#darf").blur(function(){
      $("#vet").val(fromNumber(
        toNumber($(this).val()) + toNumber($("#subtotal").val()) + toNumber($("#iof").val()) + toNumber($("#swift").val())
        ));

      $("#vettaxa").val(fromNumber5( (toNumber($("#vet").val()) / toNumber($("#quantidade").val())) ));
    });

    $("#form-boletagem").submit(function(e){
      e.preventDefault();

      clienteId = $("#clienteId").val();
      usuarioId = $("#usuarioId").val();
      data = $("#data", $(this)).val();
      caixa = $("#select-caixa", $(this)).val();
      modalidade = $("#select-modalidade", $(this)).val();
      operacao = $("#select-operacao", $(this)).val();
      moeda = $("#select-moedas", $(this)).val();
      quantidade = $("#quantidade", $(this)).val();
      taxa = $("#taxa", $(this)).val();
      subtotal = $("#subtotal", $(this)).val();
      iof = $("#iof", $(this)).val();
      mn = $("#mn", $(this)).val();
      swift = $("#swift", $(this)).val();
      darf = $("#darf", $(this)).val();
      vet = $("#vet", $(this)).val();
      vettaxa = $("#vettaxa", $(this)).val();
      txnivel = $("#txNivel", $(this)).val();
      formaPgto = $("#select-formaPgto", $(this)).val();
      formaEntrega = $("#select-formaEntrega", $(this)).val();
      dataEntrega = $("#dtEntrega", $(this)).val();
      aCombinar = document.getElementsByName('entregaACombinar')[0].checked;

      $.ajax({
        url: "http://webservice.enfoque.com.br/wsFoccoCambio/cotacoes.asmx/MoedasJSON?login=wsFoccoCambio2016&senha=Moedas2016",
        type: "get",
        success: function(r){
          for(var x in r){
            o = r[x];

            if (o.COD.indexOf("BRL") == -1) continue;
            if (o.COD.indexOf("USD") != -1) debito = fromNumber((toNumber(quantidade) * toNumber(taxa)) / (o.OVD));
          }

          $.ajax({
            url: "/dashboard/boletagem/adicionarPost.php/",
            type: "post",
            data: {
              clienteId, usuarioId, data, caixa, modalidade,
              operacao, moeda, quantidade, taxa, subtotal,
              iof, mn, swift, darf, vet, vettaxa, txnivel,
              formaPgto, formaEntrega, dataEntrega, aCombinar, debito
            },
            beforeSend: function(){
              $(".main-loader").fadeIn(100);
            },
            success: function(r){
              $(".main-loader").fadeOut(100);
              if (JSON.parse(r) == "ok"){
                window.location = "/dashboard/clientes/visualizar?clienteId=" + clienteId + "#boletagemHistory";
              }
            }

          });
        }
      });



    });

  }

};

$('.materialboxed').materialbox();


toNumber = function(n){
  if (n == "") n = 0;
  n += "";
  n = n.replace(".", "");
  n = n.replace(",", ".");
  n = parseFloat(n);
  if (n === NaN) n = 0;
  return parseFloat(n);
}

Number.prototype.formatDecimal = function(n, x, s, c) {
  var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
  num = this.toFixed(Math.max(0, ~~n));

  return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
};

fromNumber = function(n){
  if (n == "") return 0;  
  n += "";
  n = n.replace(",", ".");
  n = parseFloat(n).formatDecimal(2, 3, '.', ',');
  return n;
}

fromNumber5 = function(n){
  if (n == "") return 0;
  n += "";
  n = n.replace(",", ".");
  n = parseFloat(n).formatDecimal(5, 3, '.', ',');
  n = n.replace(".", ",");
  return n;
}