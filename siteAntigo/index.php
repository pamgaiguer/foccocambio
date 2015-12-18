<?php
// require_once ('adm/conexao.php');
// if (!isset($_SESSION)) {
//   session_start();
// }

// $query = "SELECT * FROM cotacao";

// mysql_select_db('site1375891718');
// $result = mysql_query($query);
// $rows = array();
// while ($row = mysql_fetch_assoc($result)) {
//   array_push($rows, $row);
// }
// header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <?php include 'includes/seo.php'; ?>
</head>
<body>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <div class="body-background-blueline"></div>
  <div class="body-background-goldline"></div>
  <div class="main-page">
    <h1 id="tels-home">DELIVERY CÂMBIO - (11) 5051-5299</h1>
    <?php include 'includes/header_menu.php';?>
    <div class="cotacao">
      <table>
        <tbody>
          <tr>
            <th colspan="3">topotabela</th>
          </tr>
          <tr>
            <td></td>
            <td class="cotacao-titles cor-cotacao-compras" style='font-weight: bold;'>compra</td>
            <td class="cotacao-titles cor-cotacao-vendas" style='font-weight: bold;'>venda</td>
          </tr>
          <tr>
          	<td>Dólar Americano</td>
          	<td class="cor-cotacao-compras">Consulte</td>
          	<td class="cor-cotacao-vendas">Consulte</td>
          </tr>
          <tr>
          	<td>Euro</td>
          	<td class="cor-cotacao-compras">Consulte</td>
          	<td class="cor-cotacao-vendas">Consulte</td>
          </tr>
          <tr>
          	<td>Libra esterlina</td>
          	<td class="cor-cotacao-compras">Consulte</td>
          	<td class="cor-cotacao-vendas">Consulte</td>
          </tr>
          <tr>
          	<td>Dólar Canadense</td>
          	<td class="cor-cotacao-compras">Consulte</td>
          	<td class="cor-cotacao-vendas">Consulte</td>
          </tr>
          <tr>
          	<td>Dólar - Cartão Pré-pago</td>
          	<td class="cor-cotacao-compras">Consulte</td>
          	<td class="cor-cotacao-vendas">Consulte</td>
          </tr>
          <tr>
          	<td>Euro - Cartão Pré-Pago</td>
          	<td class="cor-cotacao-compras">Consulte</td>
          	<td class="cor-cotacao-vendas">Consulte</td>
          </tr>
          <tr>
          	<td>Libra - Cartão Pré-Pago</td>
          	<td class="cor-cotacao-compras">Consulte</td>
          	<td class="cor-cotacao-vendas">Consulte</td>
          </tr>

<!--           <?php foreach($rows as $key => $val){

          //   echo "<tr>
          //   <td style='font-weight: bold;'>{$val['moeda']}</td>
          //   <td class='cor-cotacao-compras' style='font-weight: bold;'>{$val['compra']}</td>
          //   <td class='cor-cotacao-vendas' style='font-weight: bold;'>{$val['venda']}</td>
          // </tr>";
        }
        ?> -->
      </tbody>
    </table>
    <div id="info-cotacoes">*Nossas cotações representam o valor efetivo <br>total, compreendido taxas e impostos.</div>
    <div id="slides">
      <!-- img src="images/slider-aviso.jpg" -->
      <a href="info_tamviagens.php"><img src="images/tam-bannerfocco.jpg"></a>
      <a href="prod_moedaestrangeira.php" target="_self"><img src="images/slider-banner001.jpg"></a>
      <a href="prod_cartoesprepagos.php"><img src="images/slider-banner002.jpg"></a>
      <a href="serv_delivery.php"><img src="images/slider-banner003.png"></a>
      <img src="images/slider-banner004.png">
      <a href="http://www.rendimento.com.br//?c=3493" target="_blank"><img src="images/slider-banner005.jpg"></a>
      <a href="prod_westernunion.php"><img src="images/slider-banner006.jpg"></a>
    </div>
  </div>
  <br><br>
  <div class="banner-cartoes">
    <figure id="cartao001" style="display: none">
      <a href="prod_cartoesprepagos.php" target="_self"><img src="images/home-cartoes001-img.png" alt="cartao001" style="width: 400px;"></a>
    </figure>
    <figure id="cartao002">
      <a href="prod_moedaestrangeira.php" target="_self"><img src="images/home-cartoes002-img.png" alt="cartao002" style="height: 237px;"></a>
    </figure>
    <figure id="cartao003">
      <a href="prod_westernunion.php" target="_self"><img src="images/home-cartoes003-img.png" alt="cartao003" style="height: 205px"></a>
    </figure>
    <div class="fb-like-box" data-href="https://www.facebook.com/focco.cambioeturismo" data-width="430" data-height="200" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"> </div>
  </div>
  <br>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      <img src="images/focco_popup.jpg" height="400" width="600" alt="" class="img-responsive center-block">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php include 'includes/footer.php'; ?>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(window).load(function(){
       // $('#myModal').modal('show');

</script>
</body>
</html>