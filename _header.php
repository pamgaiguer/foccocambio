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
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <p class="top-phone"><span>Delivery de Moedas: </span> <a href="tel:+551150515299">11 5051-5299</a></p>
          </div>
          <div class="col-xs-12 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-sm-3 col-md-3 col-lg-3">
            <a href="index.php" title="Focco Câmbio e Turismo"><h1 class="logo-topo"><img src="images/logo_topo.png" class="img-responsive center-block" alt="Focco Cambio"></h1></a>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="cotation-table">
              <blockquote>
                <p class="cotation-title text-uppercase"><strong>Cotação de venda agora</strong></p>
                <ul class="list-unstyled">
                  <li class="cotation-value"><span class="coinName">Dólar</span> | <span class="coinValue">
                     <?php echo $dolar == "0,00" ? "SOLICITAR COTAÇÃO" : "R$ ".$dolar ?></span> 
                  </li>
                  <li class="cotation-value"><span class="coinName">Euro</span> | <span class="coinValue">
                    <?php echo $euro == "0,00" ? "SOLICITAR COTAÇÃO" : "R$ ".$euro ?></span>
                  </li>
                  <li class="cotation-value"><span class="coinName">Libra</span> | <span class="coinValue">
                    <?php echo $libra == "0,00" ? "SOLICITAR COTAÇÃO" : "R$ ".$libra ?></span> 
                  </li>
                </ul>
                <p class="cotation-info">
                  <small>
                    Valores já com IOF incluso. <br>
                    Outras moedas, consulte-nos.
                  </small>
                </p>
              </blockquote>
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
                <li><a href="/remessa-internacional">Remessa Internacional</a></li>
                <li><a href="/contact">Lojas / Contato</a></li>
                <li><a href="/seguro-viagem">Seguro viagem</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
