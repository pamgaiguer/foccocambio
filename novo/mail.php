<?php

if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
}

$quebra_linha = "\n";
$emailsender = "contato@foccocambio.com.br";
$emaildestinatario = "contato@foccocambio.com.br";
$assunto = "Focco Cambio - Enviado pelo Site";

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$msg = $_POST['mensagem'];

//montando email
$mensagemHTML = '<h3><strong>E-mail enviado pelo site:</strong></h3>
<p>Nome: '.$nome.'</p>
<p>Cidade: '.$cidade.'</p>
<p>E-mail: '.$email.'</p>
<p>Telefone:'.$telefone.'</p>
<p>Mensagem: '.$msg.'</p>';

echo $nome, $cidade, $email, $telefone, $msg;

$headers  = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=utf-8".$quebra_linha;
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: ".$emailsender.$quebra_linha;
$headers .= "Replay-To: ".$emailsender.$quebra_linha;

mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r".$emailsender);

print("Mensagem enviada com sucesso!")

?>