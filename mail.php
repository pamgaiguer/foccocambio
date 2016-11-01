<?php

$quebra_linha = "\n";
$emailsender = "contato@foccocambio.com.br";
$emaildestinatario = "contato@foccocambio.com.br";
$assunto = "Focco Cambio - Enviado pelo Site";

$name = $_POST['name'];
$city = $_POST['city'];
$e_mail = $_POST['e_mail'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];

//montando email
$mensagemHTML = '<h3><strong>E-mail enviado pelo site:</strong></h3>
<p>Nome: '.$name.'</p>
<p>Cidade: '.$city.'</p>
<p>E-mail: '.$e_mail.'</p>
<p>Telefone:'.$phone.'</p>
<p>Mensagem: '.$msg.'</p>';

echo $name, $city, $e_mail, $phone, $msg;

$headers  = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=utf-8".$quebra_linha;
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: ".$emailsender.$quebra_linha;
$headers .= "Replay-To: ".$emailsender.$quebra_linha;

mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r".$emailsender);

print("Mensagem enviada com sucesso!")

?>