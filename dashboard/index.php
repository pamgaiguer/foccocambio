<?php
include 'includes/header.php'
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard <small>Visão Geral</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
        </ol>
    </div>
</div>

<?php
//include 'includes/home_panels.php'

//include 'includes/area_chart.php'
?>

<div class="row">
    <div class="col-md-offset-3 col-lg-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Painel de Moedas</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Moeda</th>
                                <th>Compra</th>
                                <th>Venda</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dólar Americano (USD)</td>
                                <td>3,4418</td>
                                <td>3,8238</td>
                            </tr>
                            <tr>
                                <td>Euro (EUR)</td>
                                <td>3,8571</td>
                                <td>4,2866</td>
                            </tr>
                            <tr>
                                <td>Libra Esterlina (GPB)</td>
                                <td>4,9153</td>
                                <td>5,6111</td>
                            </tr>
                            <tr>
                                <td>Dólar Canadense (CAD)</td>
                                <td>2,5813</td>
                                <td>3,0330</td>
                            </tr>
                            <tr>
                                <td>Iene (JPY)</td>
                                <td>0,0277</td>
                                <td>0,0384</td>
                            </tr>
                            <tr>
                                <td>Dólar Australiano (AUD)</td>
                                <td>2,5952</td>
                                <td>2,6003</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="#">Veja todas as transações <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include 'includes/footer.php'
?>