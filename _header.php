<?php

include "dashboard/core/database.php";

$sql_query = "SELECT * FROM cotacoes;";
$result = mysqli_query($conn, $sql_query);

$rows = array();
while($row = mysqli_fetch_array($result)) $rows[] = $row;

$dolar = number_format($rows[0]['dolar'],2,",","");
$euro = number_format($rows[0]['euro'],2,",","");
$libra = number_format($rows[0]['libra'],2,",","");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Papel Moeda, Cartões de Viagem, Transferências Internacionais e tudo que você precisa para viajar tranquilo!" />
  <meta name="author" content="Pamella Gaiguer, Leonardo Zaccur" />
  <meta name="keywords" content="casa, câmbio, financeiro, western, union, yes, cash, passport, visa, mastercard, dólar, euro,
  libra, cotação, casa de câmbio, casa de cambio, focco, atendimento, corporativo, delivery, moeda, casa, espécie, especie, real, Câmbio financeiro,
  Casa de Câmbio, Entrega de moedas em São Paulo, Dólar, Euro, Libra">
  <title>Focco Câmbio - Câmbio e Turismo</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="shortcut icon" href="favicon.ico" />
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42904042-1', 'auto');
    ga('send', 'pageview');
  </script>
  <body>
    <header class="navbar-fixed-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 blue-line">
            texto header azul
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 gold-line">
            texto header gold
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">

          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <div class="cotation-table">
              <p class="cotation-title text-uppercase">cotação</p>
              <table class="table">
                <tbody>
                  <tr class="cotation-value">
                    <td class="coinName">Dólar</td>
                    <td class="coinValue">
                      <?php echo $dolar == "0,00" ? "CONSULTE" : "<span class='currency'>R$ </span>".$dolar ?></span>
                    </td>
                  </tr>
                  <tr class="divider"></tr>
                  <tr class="cotation-value">
                    <td class="coinName">Euro</td>
                    <td class="coinValue">
                      <?php echo $euro == "0,00" ? "CONSULTE" : "<span class='currency'>R$ </span>".$euro ?></span>
                    </td>
                  </tr>
                  <tr class="divider"></tr>

                  <tr class="cotation-value">
                    <td class="coinName">Libra</td>
                    <td class="coinValue">
                      <?php echo $libra == "0,00" ? "CONSULTE" : "<span class='currency'>R$ </span>".$libra ?></span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p class="cotation-warning-iof">*IOF já incluso</p>
          </div>

          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <p class="cotation-info">
              <a href="#" data-toggle="modal" data-target="#termsOfUse">
                Consulte as <br>
                regras para <br>
                fechamento <br>
                e delivery.
              </a>
            </p>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <a href="/"><img src="images/logo_topo.png" class="logo-topo img-responsive center-block" alt="Focco Cambio"></a>
          </div>

          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <div class="tel-delivery">
              <div class="media">
                <div class="media-left">
                  <img class="media-object" src="images/icon_motorcycle.jpeg">
                </div>
                <div class="media-body">
                  <p class="media-heading">Delivery Focco</p>
                  <p class="media-text">
                    <a href="tel:+551150515299">11 5051-5299</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <ul class="list-unstyled list-inline pull-right hidden-xs link-img-top">
              <li>
                <a href="http://instagram.com/foccocambio/" target="_blank"><img src="images/logo_instagram.png" alt="instagram "></a>
              </li>
              <li>
                <a href="http://www.facebook.com/focco.cambioeturismo" target="_blank"><img src="images/logo_fb.jpg" alt="facebook"></a>
              </li>
              <li>
                <a href="/dashboard" title="Acesso ao Dashboard Focco - Interno" class="dash-icon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>

        </div>

        <nav class="navbar">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarFocco" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarFocco">
              <ul class="nav nav-pills nav-justified">
                <li><a href="/delivery">Delivery <span class="sr-only">(current)</span></a></li>
                <li><a href="/produtos-servicos">Produtos e serviços</a></li>
                <li><a href="/transferencia-internacional">Transferencia Internacional</a></li>
                <li><a href="/seguro-viagem">Seguro viagem</a></li>
                <li><a href="/contact">Lojas / Contato</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>

      <div class="modal fade" id="termsOfUse" tabindex="-1" role="dialog" aria-labelledby="termsOfUseLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
           <div class="modal-header">
            <h3 class="text-uppercase">Regras de fechamento e delivery</h3>
          </div>
          <div class="modal-body">
            <h3>Para fechamento</h3>
            <ul>
              <li>
                <strong>As taxas informadas em nosso site ou em qualquer outra plataforma</strong> de consulta estão sujeitas a variação cambial, e só serão firmadas após a confirmação de nossa equipe de vendas.
              </li>
              <li>
                <strong>São aceitos fechamentos de operação,</strong> via telefone, e-mail,  ou presencialmente em nossa loja. Devido à grande oscilação do mercado, necessitamos caso tenha interesse em finalizar que a confirmação deste seja imediata e o pagamento deverá ser efetuado até às 17h do mesmo dia.
              </li>
              <li>
                <strong>O horário para reserva</strong> de moedas é entre 09h/17h.
              </li>
              <li>
                Após reserva da moeda, a cotação não será alterada, independente das oscilações do mercado. Em caso de cancelamento, o cadastro ficará bloqueado em nosso sistema perdendo o direito ao desconto em futuras compras.
              </li>
              <li>
                <strong>Cancelamentos de moedas já pagas, será cobrado uma multa de R$ 150,00,</strong>  descontado o valor na TED de devolução. A devolução só será efetuada na mesma conta de origem, mediante carta preenchida e assinada, e o prazo de devolução em até 48h.
              </li>
              <li>
                <strong>Operações acima de R$ 10.000,00,</strong> os comprovantes irão fracionados no ato da entrega e posteriormente via e-mail, procedimento este necessário devido ao limite diário do Banco Central.
              </li>
            </ul>
            <hr>

            <h3>Para delivery</h3>
            <ul>
              <li>
                <strong>O delivery será agendado no fechamento da moeda com o prazo máximo de 48h</strong> após confirmação de pagamento. Será entregue em horário comercial entre 09h/18h, <strong>incluindo horário de almoço</strong> (Em caso de ausência informar responsável pelo recebimento e conferencia do mesmo). <br>
                <strong>No caso de ausência no ato da entrega,</strong> será reagendado em até 48h com uma taxa de R$ 30,00. <br>
                <strong>Por motivos de segurança</strong> e cláusula contratual de seguro, não marcamos horário de entrega. <br>
                <strong>Alterações de endereço </strong> não poderão ser feitas na mesma data da entrega, a mesma deverá sem reagendada. <br>
                <strong>Em caso de entrega na portaria</strong> (mediante autorização do cliente), não nos responsabilizamos por extravios e inconformidade de quantia adquirida.
              </li>
            </ul>

          </div>
          <div class="modal-footer">
            <p class="text-center">
              Focco Câmbio
            </p>
          </div>
        </div>
      </div>
    </div>