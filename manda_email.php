<?php


include('config.php');

$remetente = $config['remetente'];
$destino = $config['destinatario'];
$user = $config['user'];
$senha = $config['senha'];

send_email($remetente,$destino,$user,$senha);

