<?php
/*function formatar ($string, $tipo = ""){
  $string = ereg_replace("[^0-9]", "", $string);
  if (!$tipo){
    switch (strlen($string)){
      case 10:    $tipo = 'fone';     break;
      case 8:     $tipo = 'cep';      break;
      case 11:    $tipo = 'cpf';      break;
      case 14:    $tipo = 'cnpj';     break;
    }
  }
  switch ($tipo){
    case 'fone':
    $string = '('.substr($string, 0, 2).')'.substr($string, 2, 4).'-'.substr($string, 6);
    break;
    case 'cep':
    $string = substr($string, 0, 5).'-'.substr($string, 5, 3);
    break;
    case 'cpf':
    $string = substr($string, 0, 3).'.'.substr($string, 3, 3).'.'.substr($string, 6, 3).'-'.substr($string, 9, 2);
    break;
    case 'cnpj':
    $string = substr($string, 0, 2).'.'.substr($string, 2, 3).'.'.substr($string, 5, 3).'/'.substr($string, 8, 4).'-'.substr($string, 12, 2);
    break;
    case 'rg':
    $string = substr($string, 0, 2).'.'.substr($string, 2, 3).'.'.substr($string, 5, 3);
    break;
  }
}
return $string;*/

/*function mascara_string($mascara, $string){
  $string = str_replace(" "," ", $string);
  for($i=0, $i<strlen($string); i++{
    $mascara[strpos($mascara,"#")] = $string[$i];
  }
  return $mascara;

  //echo mascara_string(“(##)####-####”,$telefone);
}*/
?>