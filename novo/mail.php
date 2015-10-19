<?php

if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
}

$quebra_linha = "\n";
$emailsender = "contato@foccocambio.com.br";
$nomeremetente = "Site E-mail";
$emaildestinatario = "contato@foccocambio.com.br";
$assunto = "Focco Cambio - Enviado pelo Site";
$mensagem = "Conteudo";
$mensagemHTML = '<p>E-mail recebido pelo site</p>
<p>Titulo</p>
<p>'.$mensagem.'</p>';

$headers  = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: ".$emailsender.$quebra_linha;
$headers .= "Replay-To: ".$emailsender.$quebra_linha;

mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r".$emailsender);

print("Mensagem enviada com sucesso!")

?>