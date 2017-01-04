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
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/fonts.css">
  <link rel="stylesheet" href="assets/css/cadastro.css">
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
    <header class="navbar-fixed-top" style="height: 150px">
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
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"></div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <a href="index.php" title="Focco Câmbio e Turismo"><h1 class="logo-topo"><img src="images/logo_topo.png" class="center-block" alt="Focco Cambio"></h1></a>
            <h4 class="text-center blue-text" style="margin-left: 12px;"><strong>Formulário de Cadastro</strong></h4>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"></div>
        </div>
      </header>
