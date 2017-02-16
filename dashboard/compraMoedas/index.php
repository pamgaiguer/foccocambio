<?php
include "../includes/header.php";
include "../core/database.php";
?>
<main class="interbancarios">
  <div class="row">
    <div class="col s12">
      <h4>Interbancários</h4>
      <blockquote>
        Área para compra de moedas para os caixas da Focco Câmbio
      </blockquote>
    </div>
  </div>

  <form id="form-busca-compraMoedas">
    <div class="row">
      <div class="col s2">
        <input type="search" id="search">
        <button class="btn bg-blue" type="submit">
          Filtrar dia
          <i class="material-icons right">&#xE8B6;</i>
        </button>
      </div>

    </div>
  </form>


  <div class="row">
    <div class="col s12">
      <table class="responsive-table striped">
        <thead>
          <tr>
            <th>Moeda</th>
            <th>FoccoX</th>
            <th>Focco</th>            
            <th>FX53</th>
            <th>Carro Forte</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>USD</strong></td>
            <td class="td-2 td-USD-2"></td>
            <td class="td-1 td-USD-1"></td>            
            <td class="td-3 td-USD-3"></td>
            <td class="td-tot"></td>
          </tr>
          <tr>
            <td><strong>EUR</strong></td>
            <td class="td-2 td-EUR-2"></td>
            <td class="td-1 td-EUR-1"></td>            
            <td class="td-3 td-EUR-3"></td>
            <td class="td-tot"></td>
          </tr>
          <tr>
            <td><strong>GBP</strong></td>
            <td class="td-2 td-GBP-2"></td>
            <td class="td-1 td-GBP-1"></td>            
            <td class="td-3 td-GBP-3"></td>
            <td class="td-tot"></td>
          </tr>
          <tr>
            <td><strong>JPY</strong></td>
            <td class="td-2 td-JPY-2"></td>
            <td class="td-1 td-JPY-1"></td>            
            <td class="td-3 td-JPY-3"></td>
            <td class="td-tot"></td>
          </tr>
          <tr>
            <td><strong>CAD</strong></td>
            <td class="td-2 td-CAD-2"></td>
            <td class="td-1 td-CAD-1"></td>            
            <td class="td-3 td-CAD-3"></td>
            <td class="td-tot"></td>
          </tr>          
        </tbody>
        <tfoot>
          <tr>
            <td><strong>Real $</strong></td>                        
            <td class="td-tot-2"></td>
            <td class="td-tot-1"></td>
            <td class="td-tot-3"></td>
            <td></td>
          </tr>
        </tfoot>
      </table>
    </div>
    

  <div class="row">
    <div class="col s12">
      <a class="btn bg-blue right" href="adicionar.php">Comprar moeda <i class="material-icons right">shopping_cart</i></a>
     </div>
   </div>

 </main>

 <?php
 include '../includes/footer.php';
 ?>
 <script type="text/javascript">
  focco.indexCompraMoedas();
 </script>