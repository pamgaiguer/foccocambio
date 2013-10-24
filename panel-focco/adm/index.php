<?php
require_once ('../adm/conexao.php');

if (!function_exists("GetSQLValueString")) {
	function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
	{
	  
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

if(!isset($_SESSION)) {
session_start();
}
$loginFormAction=$_SERVER['PHP_SELF'];
if(isset($_GET['accesscheck'])) {
$_SESSION['PrevUrl']=$_GET['accesscheck'];
}
if(isset($_POST['usuario'])) {
	$loginUsername=$_POST['usuario'];
	$password=$_POST['senha'];
	$MM_fldUserAuthorization="";
	$MM_redirectLoginSuccess="painel.php";
	$MM_redirectLoginFailed="index.php";
	$MM_redirecttoReferrer=false;
mysql_select_db($database_conn,$conn);
	$LoginRS__query=sprintf("SELECT usuario, senha FROM login WHERE usuario=%s AND senha=%s",GetSQLValueString($loginUsername,"text"),GetSQLValueString($password,"text"));
	$LoginRS=mysql_query($LoginRS__query,$conn) or die(mysql_error());
	$loginFoundUser=mysql_num_rows($LoginRS);
	if($loginFoundUser) {
	$loginStrGroup="";
//declare two session variables and assign them
	$_SESSION['MM_Username']=$loginUsername;
	$_SESSION['MM_UserGroup']=$loginStrGroup;
	if(isset($_SESSION['PrevUrl'])&&false) {
		$MM_redirectLoginSuccess=$_SESSION['PrevUrl'];
	}
		header("Location: ".$MM_redirectLoginSuccess);
		} else {
		header("Location: ".$MM_redirectLoginFailed);
	}
}
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	<title>Painel Focco - Área de Login</title>
	<link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/internas.css">
	<link rel="stylesheet" href="../css/adm.css">
</head>

<body>
	<div class="body-background-blueline"></div>
	<div class="body-background-goldline"></div>
	<div class="main-page">
	<header>
		<h1 id="logo-foco">Focco Cambio</h1>
		<img src="../images/linha-cidade.png" alt="linha-cidade">
	</header>
	<div class="interna-all">
	<div class="interna-left">
		<p>
		<span>b</span>em <span>v</span>indo 
		<br>ao 
		<span>p</span>ainel de<br><span>c</span>ontrole</p>	
	</div>
		<div class="interna-meio">
			<form method="POST" action="<?php echo $loginFormAction; ?>">
				<p id="form-access">Acesso restrito </p>
				<p id="form-info">Informe seu usuário e senha: </p>
				<br>
				<input name="usuario" type="text" size="30" placeholder="Login">
				<br>
				<input name="senha" type="password" size="30" placeholder="Senha">
				<br>
				<input name="submit" type="submit" value="Login" />
			</form>
		</div>
	</div>
</div>
	<footer>
		<div class="footer-all"></div>
	</footer>
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-42904042-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>	
</body>
</html>