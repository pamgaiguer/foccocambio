<?php

function SomenteNumeros($field){
	return preg_replace("/\D+/", "", $field);
}

function TratarData($field){
	if ($field == '') return '1700-01-01 00:00:00';
	$a = explode("/", $field);
	$data = $a[2].'-'.$a[1].'-'.$a[0]." 00:00:00";
	return date('Y-m-d H:i:s', strtotime($data));
}

function TratarFloat($field){
	if ($field == '') return 0.00;
	return floatval(str_replace(",", ".", str_replace(".", "", $field)));
}

?>