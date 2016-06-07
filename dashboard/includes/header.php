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
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">&#xE5C5;</i></a></li>
        <ul id='dropdown1' class='dropdown-content'>
          <li><a href="#!">First</a></li>
          <li><a href="#!">Second</a></li>
          <li><a href="#!">Third</a></li>
          <li><a href="#!">OLÁ MUNDO</a></li>
        </ul>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>

      <!-- Barra do Lateral -->
      <ul id="slide-out" class="side-nav fixed grey">
        <li class="brand-logo center"><img class="responsive-img" src="../images/logo_meseems_branco.png" alt="  logotipo"></li>

        <li><a href="#!"></a></li>
        <li><a href="#!">Second Sidebar Link</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header">Dropdown<i class="material-icons right">&#xE5C5;</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#!">First</a></li>
                  <li><a href="#!">Second</a></li>
                  <li><a href="#!">Third</a></li>
                  <li><a href="#!">Fourth</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
      </ul>


    </nav>

  </header>