<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="styles/materialize.css" />
</head>

<body>

  <header>

    <nav class="grey">
      <!-- Barra do topo! -->
      <ul class="right hide-on-med-and-down">
        <li><a href="#!">First Sidebar Link</a></li>
        <li><a href="#!">Second Sidebar Link</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropOptions">[Usuário]<i class="material-icons right">&#xE5C5;</i></a></li>
        <ul id='dropOptions' class='dropdown-content'>
          <li><a href="#!">First</a></li>
          <li><a href="#!">Second</a></li>
          <li><a href="#!">Third</a></li>
          <li class="divider"></li>
          <li><a href="#!">Logoff</a></li>
        </ul>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>

      <!-- Barra do Lateral -->
      <ul id="slide-out" class="side-nav fixed grey">
        <li class="brand-logo center"><img class="responsive-img" src="../images/logo_meseems_branco.png" alt="  logotipo"></li>

        <li><a href="#!"></a></li>
        <li><a href="#!"><i class="material-icons left">dashboard</i> Dashboard</a></li>
        <li class="">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header"><i class="material-icons left">edit</i> Cadastros<i class="material-icons right">&#xE5C5;</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#!"><i class="material-icons left">supervisor_account</i> Usuários</a></li>
                  <li><a href="#!"><i class="material-icons left">person_add</i> Clientes</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
      </ul>


    </nav>

  </header>