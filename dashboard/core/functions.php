<?php

function SomenteNumeros($field){
	return preg_replace("/\D+/", "", $field);
}

function TratarData($field){
	if ($field == '') return '1700-01-01 00:00:00';
	return date('Y-m-d H:i:s', strtotime($field)); 
}

?>