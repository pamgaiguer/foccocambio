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

mysql_select_db($database_conn, $conn);
$query_edicao = "SELECT * FROM viagens ORDER BY idviagens DESC";
$edicao = mysql_query($query_edicao, $conn) or die(mysql_error());
$row_edicao = mysql_fetch_assoc($edicao);
$totalRows_edicao = mysql_num_rows($edicao);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Painel Administrativo</title>
<link href="css/estilo-admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
      // the _editor_url is REQUIRED!  don't forget to set it.
      _editor_url = "htmlarea";
      // implicit language will be "en", but let's set it for brevity
      _editor_lang = "en";
    </script>
<script type="text/javascript" src="htmlarea/htmlarea.js"></script>
<script type="text/javascript">
      // load the plugins that we will use
      // loading is necessary ONLY ONCE, regardless on how many editors you create
      // basically calling the following functions will load the plugin files as if
      // we would have wrote script src="..." but with easier and cleaner code
      HTMLArea.loadPlugin("TableOperations");
      HTMLArea.loadPlugin("SpellChecker");
      HTMLArea.loadPlugin("CSS");

      // this function will get called at body.onload
      function initDocument() {
        // cache these values as we need to pass it for both editors
        var css_plugin_args = {
          combos : [
            { label: "Syntax",
                         // menu text       // CSS class
              options: { "None"           : "",
                         "Code" : "code",
                         "String" : "string",
                         "Comment" : "comment",
                         "Variable name" : "variable-name",
                         "Type" : "type",
                         "Reference" : "reference",
                         "Preprocessor" : "preprocessor",
                         "Keyword" : "keyword",
                         "Function name" : "function-name",
                         "Html tag" : "html-tag",
                         "Html italic" : "html-helper-italic",
                         "Warning" : "warning",
                         "Html bold" : "html-helper-bold"
                       },
              context: "pre"
            },
            { label: "Info",
              options: { "None"           : "",
                         "Quote"          : "quote",
                         "Highlight"      : "highlight",
                         "Deprecated"     : "deprecated"
                       }
            }
          ]
        };

        //---------------------------------------------------------------------
        // GENERAL PATTERN
        //
	//  1. Instantitate an editor object.
	//  2. Register plugins (note, it's required to have them loaded).
	//  3. Configure any other items in editor.config.
	//  4. generate() the editor
	//
	// The above are steps that you use to create one editor.  Nothing new
	// so far.  In order to create more than one editor, you just have to
	// repeat those steps for each of one.  Of course, you can register any
	// plugins you want (no need to register the same plugins for all
	// editors, and to demonstrate that we'll skip the TableOperations
	// plugin for the second editor).  Just be careful to pass different
	// ID-s in the constructor (you don't want to _even try_ to create more
	// editors for the same TEXTAREA element ;-)).
	//
	// So much for the noise, see the action below.
	//---------------------------------------------------------------------


        //---------------------------------------------------------------------
        // CREATE FIRST EDITOR
        //
        var editor1 = new HTMLArea("incluido");

        // plugins must be registered _per editor_.  Therefore, we register
        // plugins for the first editor here, and we will also do this for the
        // second editor.
        editor1.registerPlugin(TableOperations);
        editor1.registerPlugin(SpellChecker);
        editor1.registerPlugin(CSS, css_plugin_args);

        // custom config must be done per editor.  Here we're importing the
        // stylesheet used by the CSS plugin.
        editor1.config.pageStyle = "@import url(custom.css);";

        // generate first editor
        editor1.generate();
        //---------------------------------------------------------------------


        //---------------------------------------------------------------------
        // CREATE SECOND EDITOR
        //
        var editor2 = new HTMLArea("detalhestecnicos");

        // we are using the same plugins
        editor2.registerPlugin(TableOperations);
        editor2.registerPlugin(SpellChecker);
        editor2.registerPlugin(CSS, css_plugin_args);

        // import the CSS plugin styles
        editor2.config.pageStyle = "@import url(custom.css);";

        // generate the second editor
        // IMPORTANT: if we don't give it a timeout, the first editor will
        // not function in Mozilla.  Soon I'll think about starting to
        // implement some kind of event that will fire when the editor
        // finished creating, then we'll be able to chain the generate()
        // calls in an elegant way.  But right now there's no other solution
        // than the following.
        setTimeout(function() {
          editor2.generate();
        }, 500);
        //---------------------------------------------------------------------
		
		//---------------------------------------------------------------------
        // CREATE terceiro EDITOR
        //
        var editor3 = new HTMLArea("furacaopadrao");

        // we are using the same plugins
        editor3.registerPlugin(TableOperations);
        editor3.registerPlugin(SpellChecker);
        editor3.registerPlugin(CSS, css_plugin_args);

        // import the CSS plugin styles
        editor3.config.pageStyle = "@import url(custom.css);";

        // generate the second editor
        // IMPORTANT: if we don't give it a timeout, the first editor will
        // not function in Mozilla.  Soon I'll think about starting to
        // implement some kind of event that will fire when the editor
        // finished creating, then we'll be able to chain the generate()
        // calls in an elegant way.  But right now there's no other solution
        // than the following.
        setTimeout(function() {
          editor3.generate();
        }, 500);
        //---------------------------------------------------------------------
		
		//---------------------------------------------------------------------
        // CREATE quarto EDITOR
        //
        var editor4 = new HTMLArea("furacaodisponivel");

        // we are using the same plugins
        editor4.registerPlugin(TableOperations);
        editor4.registerPlugin(SpellChecker);
        editor4.registerPlugin(CSS, css_plugin_args);

        // import the CSS plugin styles
        editor4.config.pageStyle = "@import url(custom.css);";

        // generate the second editor
        // IMPORTANT: if we don't give it a timeout, the first editor will
        // not function in Mozilla.  Soon I'll think about starting to
        // implement some kind of event that will fire when the editor
        // finished creating, then we'll be able to chain the generate()
        // calls in an elegant way.  But right now there's no other solution
        // than the following.
        setTimeout(function() {
          editor4.generate();
        }, 500);
        //---------------------------------------------------------------------
		//---------------------------------------------------------------------
        // CREATE quarto EDITOR
        //
        var editor5 = new HTMLArea("trabalhospossiveis");

        // we are using the same plugins
        editor5.registerPlugin(TableOperations);
        editor5.registerPlugin(SpellChecker);
        editor5.registerPlugin(CSS, css_plugin_args);

        // import the CSS plugin styles
        editor5.config.pageStyle = "@import url(custom.css);";

        // generate the second editor
        // IMPORTANT: if we don't give it a timeout, the first editor will
        // not function in Mozilla.  Soon I'll think about starting to
        // implement some kind of event that will fire when the editor
        // finished creating, then we'll be able to chain the generate()
        // calls in an elegant way.  But right now there's no other solution
        // than the following.
        setTimeout(function() {
          editor5.generate();
        }, 500);
        //---------------------------------------------------------------------
      };

      HTMLArea.init();
      HTMLArea.onload = initDocument;

    </script>
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
  <span class="titulos">Editar  pacote de viagens
  <hr color="#000000" /> </span></p>
  <form method="POST" enctype="multipart/form-data" name="form1" id="form1">
    <?php do { ?>
      <table width="900" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="218" align="center"><img src="../<?php echo $row_edicao['fotochamada']; ?>" class="imgeditar" /></td>
          <td width="297" valign="middle" class="txtgeral"><?php echo $row_edicao['cidadedestino']; ?></td>
          <td width="254" valign="middle" class="txtgeral"><?php echo $row_edicao['valor']; ?></td>
          <td width="131" valign="middle"><a href="edicao.php?idviagens=<?php echo $row_edicao['idviagens']; ?>">Editar pacote</a></td>
          </tr>
        <tr>
          <td height="35" colspan="4"><hr color="#CCCCCC" /></td>
          </tr>
      </table>
      <?php } while ($row_edicao = mysql_fetch_assoc($edicao)); ?>
  </form>
  </div>
</div>
</body>
</html>
<?php
mysql_free_result($edicao);
?>
