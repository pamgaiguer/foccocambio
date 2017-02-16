<?php

include "../includes/header.php";
include "../core/database.php";

?>
<main class="interbancarios">
  <div class="row">
    <div class="col s12">
      <h4>Interbancários - Compras de moedas</h4>
    </div>
    <div class="col s12">
      <a class="btn bg-blue" href="/dashboard/compraMoedas/"><i class="material-icons left">&#xE5C4;</i> Voltar para tela Interbancários</a>
    </div>
  </div>

  <a href="#" class="scrollToTop">
    <i class="material-icons">keyboard_arrow_up</i>
  </a>

  <div class="row">
    <div class="col s12">
      <nav class="white">
        <div class="nav-wrapper">
        <span class="black-text pl-8">Escolha qual moeda irá comprar:</span>
          <ul class="right hide-on-med-and-down">
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="Dólar Americano"><a href="#USD">USD</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="Euro"><a href="#EUR">EUR</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="Libra Esterlina"><a href="#GBP">GBP</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="Dólar Australiano"><a href="#AUD">AUD</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="Dólar Canadense"><a href="#CAD">CAD</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="Franco Suíco"><a href="#CHF">CHF</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="Iêne"><a href="#JPY">JPY</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="Dólar Neo-Zelandês"><a href="#NZD">NZD</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="Peso Chileno"><a href="#CLP">CLP</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="Peso Mexicano"><a href="#MXN">MXN</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="Peso Uruguaio"><a href="#UYU">UYU</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="Peso Argentino"><a href="#ARS">ARS</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="Rand Sul Africano"><a href="#ZAR">ZAR</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="Yuan Chinês"><a href="#CNY">CNY</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="-"><a href="#VTG">VTG</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="-"><a href="#VTM">VTM</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="-"><a href="#CVTM">CVTM</a></li>
            <li class="tooltipped" data-position="top" data-delay="50" data-tooltip="-"><a href="#FX53">FX53</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>

  <!-- DÓLAR AMERICANO -->
  <div class="row" id="USD">
    <div class="col s6">
      <h5>FoccoX</h5>
      <a class="btn bg-blue">Adicionar linha USD<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <h5>Focco</h5>
      <a class="btn bg-blue">Adicionar linha USD<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>USD</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>USD</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <!-- EURO -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="EUR">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha EUR<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha EUR<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>EUR</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>EUR</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <!-- LIBRA ESTERLINA -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="GBP">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha GBP<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha GBP<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>GBP</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>GBP</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <!-- dólar australiano -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="AUD">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha AUD<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha AUD<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>AUD</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>AUD</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>



  <!-- dólar canadense -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="CAD">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha CAD<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha CAD<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>CAD</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>CAD</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <!-- Franco Suíco -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="CHF">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha CHF<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha CHF<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>CHF</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>CHF</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <!-- Iêne -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="JPY">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha JPY<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha JPY<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>JPY</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>JPY</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>


  <!-- dólar neo-zelandes -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="NZD">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha NZD<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha NZD<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>NZD</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>NZD</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <!-- peso chileno  -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="CLP">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha CLP<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha CLP<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>CLP</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>CLP</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <!-- peso mexicano  -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="MXN">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha MXN<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha MXN<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>MXN</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>MXN</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <!-- peso uruguaio  -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="UYU">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha UYU<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha UYU<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>UYU</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>UYU</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <!-- peso argentino  -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="ARS">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha ARS<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha ARS<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>ARS</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>ARS</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <!-- rand sul africano  -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="ZAR">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha ZAR<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha ZAR<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>ZAR</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>ZAR</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <!-- yuan chinês -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="CNY">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha CNY<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha CNY<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>CNY</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>CNY</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>


  <!-- VTG -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="VTG">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha VTG<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha VTG<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>VTG</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>VTG</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <!-- VTM  - NO EXCEL, TEM ESSA TABELA 3X, NAO ENTENDI PQ, MAS REPETE ELA PLZ -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="VTM">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha VTM<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha VTM<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>VTM</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>VTM</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>


  <!-- Compra S. VTM -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="CVTM">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha VTMC<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha VTMC<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>VTMC</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>VTMC</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <!-- Compra Remessa -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="REM">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha REMESSA<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha REMESSA<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>REMESSA</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>REMESSA</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>


  <!-- FX53 -->
  <div class="spacing"></div>
  <hr>
  <div class="spacing"></div>
  <div class="row" id="FX53">
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha FX53<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
    <div class="col s6">
      <a class="btn bg-blue">Adicionar linha FX53<i class="material-icons right">keyboard_arrow_down</i></a>
    </div>
  </div>
  <div class="row">
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>FX53</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="col s6">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>FX53</th>
            <th>quantidade</th>
            <th>tx</th>
            <th>total</th>
            <th>fechado</th>
            <th>hr</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
          <tr>
            <td><input type="text" value="A"></td>
            <td><input type="text" value="$ 22.580,00"></td>
            <td><input type="text" value="3,17300"></td>
            <td><input type="text" value="R$ 71.646,34"></td>
            <td><input type="text" value="RN"></td>
            <td><input type="text" value="9:22"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">Total dólar</td>
            <td colspan="3">Total real</td>
            <td>Qtdade de moeda / total (qt*tx)</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

</main>

<?php
include '../includes/footer.php';
?>


<script type="text/javascript">
  focco.adicionarCompraMoedas();

  $(document).ready(function(){
    $(window).scroll(function(){
      if ($(this).scrollTop() > 100) {
        $('.scrollToTop').fadeIn();
      } else {
        $('.scrollToTop').fadeOut();
      }
    });

    $('.scrollToTop').click(function(){
      $('html, body').animate({scrollTop : 0},800);
      return false;
    });
  });

</script>