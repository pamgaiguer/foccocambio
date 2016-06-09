<?php
  
  session_start();
  if (!isset($_SESSION['currentUser'])) Header("Location: /dashboard");
  if ($_SESSION['currentUser'] == null) Header("Location: /dashboard");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="/dashboard/styles/materialize.css" />
</head>

<body>

  <header>
    <nav class="grey lighten-2">
      <!-- Barra do topo! -->
      <ul class="right hide-on-med-and-down">
        <li><a href="#!">First Sidebar Link</a></li>
        <li><a href="#!">Second Sidebar Link</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropOptions"><?php echo $_SESSION['currentUser']['nome']  ?><i class="material-icons right">&#xE5C5;</i></a></li>
        <ul id='dropOptions' class='dropdown-content'>
          <li><a href="#!">First</a></li>
          <li><a href="#!">Second</a></li>
          <li><a href="#!">Third</a></li>
          <li class="divider"></li>
          <li><a href="/dashboard/logout.php">Logoff</a></li>
        </ul>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>

      <!-- Barra do Lateral -->
      <ul id="slide-out" class="side-nav fixed grey lighten-2">
        <li class="brand-logo center"><img class="responsive-img" src="/dashboard/images/logo_meseems_branco.png" alt="logotipo"></li>
        <li><a href="#!"></a></li>
        <li><a href="/dashboard/home"><i class="material-icons left">dashboard</i> Dashboard</a></li>
        <li class="">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header"><i class="material-icons left">edit</i> Cadastros<i class="material-icons right">&#xE5C5;</i></a>
              <div class="collapsible-body">
                <ul>
                  <?php if ($_SESSION['currentUser']['tipo'] < 3)
                    echo
                    '<li><a href="/dashboard/usuarios/"><i class="material-icons left">supervisor_account</i> Usuários</a></li>'
                  ?>
                  <li><a href="/dashboard/clientes/"><i class="material-icons left">person_add</i> Clientes</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </nav>

  </header>
  <div>