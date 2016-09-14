<?php

if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
}

$quebra_linha = "\n";
$emailsender = "contato@foccocambio.com.br";
$emaildestinatario = "pamella.gaiguer@gmail.com";
$assunto = "Focco Cambio - Cadastro Online";

$nome   = $_POST['campo_nome'];
$dataNascimento   = $_POST['campo_dataNascimento'];
$cpf  = $_POST['campo_cpf'];
$rg   = $_POST['campo_rg'];
$rgOrgaoExpedidor   = $_POST['campo_rgOrgaoExpedidor'];
$rgDataExpedicao  = $_POST['campo_rgDataExpedicao'];
$genero   = $_POST['campo_genero'];
$estadoCivil  = $_POST['campo_estadoCivil'];
$nacionalidade  = $_POST['campo_nacionalidade'];
$nomeConjuge  = $_POST['campo_nomeConjuge'];
$dataNascimentoConjuge  = $_POST['campo_dataNascimentoConjuge'];
$nomeMae  = $_POST['campo_nomeMae'];
$nomePai  = $_POST['campo_nomePai'];
$email  = $_POST['campo_email'];
$telefoneFixo   = $_POST['campo_telefoneFixo'];
$telefoneCelular  = $_POST['campo_telefoneCelular'];
$ondeConheceuFocco  = $_POST['campo_ondeConheceuFocco'];
$ofertasEmail   = $_POST['campo_ofertasEmail'];
$ofertasWhatsapp  = $_POST['campo_ofertasWhatsapp'];
$cepResidencial   = $_POST['campo_cepResidencial'];
$logradouroResidencial  = $_POST['campo_logradouroResidencial'];
$numeroResidencial  = $_POST['campo_numeroResidencial'];
$complementoResidencial   = $_POST['campo_complementoResidencial'];
$bairroResidencial  = $_POST['campo_bairroResidencial'];
$cidadeResidencial  = $_POST['campo_cidadeResidencial'];
$estadoResidencial  = $_POST['campo_estadoResidencial'];
$cepEntrega   = $_POST['campo_cepEntrega'];
$logradouroEntrega  = $_POST['campo_logradouroEntrega'];
$numeroEntrega  = $_POST['campo_numeroEntrega'];
$complementoEntrega   = $_POST['campo_complementoEntrega'];
$bairroEntrega  = $_POST['campo_bairroEntrega'];
$cidadeEntrega  = $_POST['campo_cidadeEntrega'];
$estadoEntrega  = $_POST['campo_estadoEntrega'];
$pessoaAutorizada  = $_POST['campo_pessoaAutorizada'];
$observacoes  = $_POST['campo_observacoes'];

//montando email
$mensagemHTML = '<h3><strong>Cadastro de cliente enviado pelo site:</strong></h3>
<p> Nome  ' . $nome . ' </p>
<p> Data de Nascimento  ' . $dataNascimento . ' </p>
<p> CPF ' . $cpf  . ' </p>
<p> RG  ' . $rg . ' </p>
<p> RG Orgão Expedidor  ' . $rgOrgaoExpedidor . ' </p>
<p> RG Data Expedição ' . $rgDataExpedicao  . ' </p>
<p> Genero  ' . $genero . ' </p>
<p> Estado Civil  ' . $estadoCivil  . ' </p>
<p> Nacionalidade ' . $nacionalidade  . ' </p>
<p> Nome do Conjuge ' . $nomeConjuge  . ' </p>
<p> Data Nascimento Conjuge ' . $dataNascimentoConjuge  . ' </p>
<p> Nome da Mãe ' . $nomeMae  . ' </p>
<p> Nome do Pai ' . $nomePai  . ' </p>
<p> E-mail  ' . $email  . ' </p>
<p> Telefone Fixo ' . $telefoneFixo . ' </p>
<p> Telefone Celular  ' . $telefoneCelular  . ' </p>
<p> Onde Conheceu a Focco ' . $ondeConheceuFocco  . ' </p>
<p> Receber ofertas por e-mail? ' . $ofertasEmail . ' </p>
<p> Receber ofertas por whatsapp? ' . $ofertasWhatsapp  . ' </p>
<p> Cep Residencial ' . $cepResidencial . ' </p>
<p> Logradouro Residencial  ' . $logradouroResidencial  . ' </p>
<p> Número Residencial  ' . $numeroResidencial  . ' </p>
<p> Complemento Residencial ' . $complementoResidencial . ' </p>
<p> Bairro Residencial  ' . $bairroResidencial  . ' </p>
<p> Cidade Residencial  ' . $cidadeResidencial  . ' </p>
<p> Estado Residencial  ' . $estadoResidencial  . ' </p>
<p> CEP Entrega ' . $cepEntrega . ' </p>
<p> Logradouro Entrega  ' . $logradouroEntrega  . ' </p>
<p> Número Entrega  ' . $numeroEntrega  . ' </p>
<p> Complemento Entrega ' . $complementoEntrega . ' </p>
<p> Bairro Entrega  ' . $bairroEntrega  . ' </p>
<p> Cidade Entrega  ' . $cidadeEntrega  . ' </p>
<p> Estado Entrega  ' . $estadoEntrega  . ' </p>
<p> Pessoa Autorizada ' . $pessoaAutorizada . ' </p>
<p> Observações ' . $observacoes  . ' </p>';

echo $name, $city, $e_mail, $phone, $msg;

$headers  = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=utf-8".$quebra_linha;
$headers .= "From: ".$emailsender.$quebra_linha;:
$headers .= "Return-Path: ".$emailsender.$quebra_linha;
$headers .= "Replay-To: ".$emailsender.$quebra_linha;

mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r".$emailsender);

print("Mensagem enviada com sucesso!")

?>