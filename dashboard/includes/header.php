<?php
session_start();
if (!isset($_SESSION['currentUser'])) Header("Location: /dashboard");
if ($_SESSION['currentUser'] == null) Header("Location: /dashboard");
date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
    <link rel="stylesheet" href="/dashboard/styles/froala/froala_editor.pkgd.min.css">
    <link rel="stylesheet" href="/dashboard/styles/froala/froala_style.min.css">
    <link rel="stylesheet" href="/dashboard/styles/materialize.css" />
  </head>
  <body>
    <header>
      <nav class="bg-gray">
        <!-- Barra do topo! -->
        <ul class="right hide-on-med-and-down">
          <li><a class="dropdown-button" href="#!" data-activates="dropOptions"><?php echo $_SESSION['currentUser']['nome']  ?><i class="material-icons right">&#xE5C5;</i></a></li>
          <ul id='dropOptions' class='dropdown-content'>
            <li class="divider"></li>
            <li><a href="/dashboard/logout.php"><i class="material-icons left">&#xE879;</i> Logoff</a></li>
          </ul>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
        <!-- Barra do Lateral -->
        <ul id="slide-out" class="side-nav fixed bg-gray white-text">
          <li class="brand-logo center"><img class="" src="/dashboard/images/logo_topo_minor.png" alt="logotipo"></li>
          <li><a href="#!"></a></li>
          <li><a href="/dashboard/home"><i class="material-icons left">&#xE871;</i> Início</a></li>
          <a class='dropdown-button' href='#' data-activates='cadastros'><i class="material-icons left">&#xE3C9;</i>  Cadastros <i class="material-icons right">&#xE5C5;</i></a>
          <ul id='cadastros' class='dropdown-content'>
            <li class="divider"></li>
            <?php
            if ($_SESSION['currentUser']['tipo'] < 4)
            echo
            '<li><a href="/dashboard/usuarios/"><i class="material-icons left">&#xE8D3;</i> Usuários</a></li>';
            if ($_SESSION['currentUser']['tipo'] < 5)
            echo '<li><a href="/dashboard/clientes/"><i class="material-icons left">&#xE7FE;</i> Clientes</a></li>';
            ?>
          </ul>
          <?php
          if ($_SESSION['currentUser']['tipo'] < 2)
          echo '
          <li><a href="/dashboard/mural"><i class="material-icons left">&#xE1B2;</i> Mural</a></li>
          <li><a href="/dashboard/blog/"><i class="material-icons left">&#xE8CD;</i> Blog do João</a></li>
          ';
          ?>
          <?php if ($_SESSION['currentUser']['tipo'] < 5)
          echo
          '<li><a href="/dashboard/cotacoes"><i class="material-icons left">&#xE227;</i> Cotações</a></li>'
          ?>
          <li><a href="/dashboard/boletagem"><i class="material-icons left">&#xE922;</i> Boletagem</a></li>
          <li><a href="/dashboard/orcamento"><i class="material-icons left">&#xE85D;</i> Orçamento</a></li>
          <?php if ($_SESSION['currentUser']['tipo'] < 3)
          echo '<li><a href="/dashboard/compraMoedas"><i class="material-icons left">&#xE8CC;</i> Interbancários</a></li>';
          ?>
          <li><a href="/dashboard/calculadora"><i class="material-icons left">&#xE0BC;</i> Calculadora</a></li>
        </ul>
      </nav>
    </header>