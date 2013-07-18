<?php require_once('../Connections/conn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE cotacao SET moeda=%s, compra=%s, venda=%s WHERE idcotacao=%s",
                       GetSQLValueString($_POST['moeda'], "text"),
                       GetSQLValueString($_POST['compra'], "text"),
                       GetSQLValueString($_POST['venda'], "text"),
                       GetSQLValueString($_POST['idcotacao'], "int"));

  mysql_select_db($database_conn, $conn);
  $Result1 = mysql_query($updateSQL, $conn) or die(mysql_error());

  $updateGoTo = "feito.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_cotacoes = "-1";
if (isset($_GET['idcotacao'])) {
  $colname_cotacoes = $_GET['idcotacao'];
}
mysql_select_db($database_conn, $conn);
$query_cotacoes = sprintf("SELECT * FROM cotacao WHERE idcotacao = %s", GetSQLValueString($colname_cotacoes, "int"));
$cotacoes = mysql_query($query_cotacoes, $conn) or die(mysql_error());
$row_cotacoes = mysql_fetch_assoc($cotacoes);
$totalRows_cotacoes = mysql_num_rows($cotacoes);
?>
<?php require_once('../Connections/conn.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Painel Administrativo</title>
<link href="css/estilo-admin.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
a {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	color: #03C;
	font-weight: bold;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #03C;
}
a:hover {
	text-decoration: none;
	color: #F90;
}
a:active {
	text-decoration: none;
	color: #03C;
}
-->
</style></head>

<body>
<div id="geraltopo">
  <div id="topo">Painel de Controle - Focco C&acirc;mbio</div>
</div>
<div id="geral">
  <div id="centroprinc">
  <table width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><img src="img/incluir-pacotes.png" width="70" height="70" /></td>
    <td><a href="inserir-pacote.php">Inserir Pacotes</a></td>
    <td>|</td>
    <td align="center"><img src="img/atualizar-pacotes.png" width="70" height="70" /></td>
    <td><a href="editar-pacotes.php">Editar Pacotes</a></td>
    <td>|</td>
    <td align="center"><img src="img/excluir-pacotes.png" width="70" height="70" /></td>
    <td><a href="excluir-pacotes.php">Excluir Pacotes</a></td>
    <td>|</td>
    <td align="center"><img src="img/atualizar-cotacoes.png" width="70" height="70" /></td>
    <td><a href="editar-cotacoes.php">Editar cota&ccedil;&otilde;es</a></td>
    </tr>
</table>
  <p><br />
  <span class="titulos">Editar Cota&ccedil;&otilde;es - Topo do Site	
  <hr color="#000000" /> </span></p>
  <form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form1" id="form1">
    <table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr class="logintitulo">
        <td width="137" height="35" align="center">Moeda</td>
        <td width="158" height="35" align="center">Compra</td>
        <td width="134" height="35" align="center">Venda</td>
        <td width="121" height="35" align="center">&nbsp;</td>
      </tr>
    </table>
    <table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
<td width="125" align="center" class="txtgeral"><label>
  <input name="idcotacao" type="hidden" id="idcotacao" value="<?php echo $row_cotacoes['idcotacao']; ?>" />
  <input name="moeda" type="text" class="caixalogin" id="moeda" value="<?php echo $row_cotacoes['moeda']; ?>" size="15" />
</label></td>
        <td width="146" height="25" align="center" class="txtgeral"><input name="compra" type="text" class="caixalogin" id="compra" value="<?php echo $row_cotacoes['compra']; ?>" size="15" /></td>
        <td width="119" align="center" class="txtgeral"><input name="venda" type="text" class="caixalogin" id="venda" value="<?php echo $row_cotacoes['venda']; ?>" size="15" /></td>
        <td width="110" height="40" align="center"><span class="txtgeral">
          <input name="submit" type="submit" class="caixalogin" id="submit" value="Atualizar" />
        </span></td>
      </tr>
      <tr>
        <td height="30" colspan="4" align="center" class="txtgeral">&nbsp;</td>
      </tr>
    </table>
    <input type="hidden" name="MM_update" value="form1" />
  </form>
  </div>
</div>
</body>
</html>
<?php
mysql_free_result($cotacoes);
?>
