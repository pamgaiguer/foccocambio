<?php

require '../vendor/autoload.php';
use Mailgun\Mailgun;
	
$client = new GuzzleHttp\Client([ 'verify' => false ]);
$adapter = new Http\Adapter\Guzzle6\Client($client);

$mgClient = new Mailgun('key-f564e492bf564289c1a29ee78f00502d', $adapter);
$domain = "foccocambio.com.br";

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$body = $_POST['body'];


$result = $mgClient->sendMessage($domain, array(
    'from'    => 'Focco Cambio <postmaster@foccocambio.com.br>',
    'to'      => $nome.' <'.$email.'>',
    'subject' => $assunto,
    'html'    => $body
));

echo "ok";





?>