<?php

if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
}

$quebra_linha = "\n";
$emailsender = "contato@foccocambio.com.br";
$emaildestinatario = "contato@foccocambio.com.br";
$assunto = "Focco Cambio - Enviado pelo Site";
$nomeremetente = $_POST['nome'];
$cidaderemetente = $_POST['cidade'];
$emailremetente = $_POST['email'];
$telefoneremetente = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
$mensagemHTML = '<h3><strong>E-mail enviado pelo site:</strong></h3>
<p>Nome: '.$nomeremetente.'</p>
<p>Cidade: '.$cidaderemetente.'</p>
<p>E-mail: '.$emailremetente.'</p>
<p>Telefone:'.$telefoneremetente.'</p>
<p>Mensagem: '.$mensagem.'</p>';

$headers  = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=utf-8".$quebra_linha;
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: ".$emailsender.$quebra_linha;
$headers .= "Replay-To: ".$emailsender.$quebra_linha;

mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r".$emailsender);

print("Mensagem enviada com sucesso!")

?>