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

    $("#cpfCnpj").mask("999.999.999-99").keyup(function(){

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

    $("#cpfCnpj").mask("999.999.999-99").keyup(function(){

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

    $.ajax({
      url: "http://api.fixer.io/latest?base=BRL",
      type: "get",
      success: function(r){        
        for (x in r.rates) {
          $("#td-" + x).html((1/r.rates[x]).toFixed(5));
        }
      }
    });

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

  adicionarCompraMoedas: function(){
    $('.currency').mask("#.##0,00", {reverse: true});

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
      n += "";
      n = n.replace(",", ".");
      n = parseFloat(n).formatDecimal(2, 3, '.', ',');
      return n;
    }

    $("#quantidade").blur(function(){
      if (toNumber($("#taxa").val()) > 0.00){
        $("#total").val(fromNumber( toNumber($(this).val()) * toNumber($("#taxa").val()) )).blur();                        
      }
    });

    $("#taxa").blur(function(){
      if (toNumber($("#quantidade").val()) > 0.00){
        $("#total").val(fromNumber( toNumber($(this).val()) * toNumber($("#quantidade").val()) )).blur();
      }
    });


    $("#form-adicionar-compraMoedas").submit(function(e){
      e.preventDefault();

      usuarioId = $("#usuarioId").val();
      moeda = $("#select-moedas", $(this)).val();
      caixa = $("#select-caixa", $(this)).val();
      data = $("#data", $(this)).val();
      quantidade = $("#quantidade", $(this)).val();
      taxa = $("#taxa", $(this)).val();
      total = $("#total", $(this)).val();      
      fechamento = $("#fechamento", $(this)).val();
      entrega = $("#entrega", $(this)).val();
      
      $.ajax({
        url: "/dashboard/compraMoedas/adicionarPost.php/",
        type: "post",
        data: {
          usuarioId, moeda, caixa, data, quantidade, 
          taxa, total, fechamento, entrega 
        },
        beforeSend: function(){
          $(".main-loader").fadeIn(100);
        },
        success: function(r){
          console.log(r);
          $(".main-loader").fadeOut(100);
          if (JSON.parse(r) == "ok"){
            window.location = "/dashboard/compraMoedas/";
          }
        }

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
      n += "";
      n = n.replace(",", ".");
      n = parseFloat(n).formatDecimal(2, 3, '.', ',');
      return n;
    }

    fromNumber5 = function(n){
      n += "";
      n = n.replace(",", ".");
      n = parseFloat(n).formatDecimal(5, 3, '.', ',');
      n = n.replace(".", ",");
      return n;
    }

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
        url: "http://api.fixer.io/latest?base=BRL",
        type: "get",
        success: function(r){                  
          debito = fromNumber((toNumber(quantidade) * toNumber(taxa)) / (1/r.rates["USD"]));          
          
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
