<?php

require __DIR__ .'/lib_ext/autoload.php';


use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendEmail( "Assunto Teste", "<p>Esse é um e-mail de <b>teste</b>!</p>",
    'rgo3007@hotmail.com', "Rogério galdino", "rgo3007@hotmail.com",  "ROGERIO");

var_dump($novoEmail);