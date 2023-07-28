<?php 
// Arquivo index responsável perla inicialização do sistema

require_once 'sistema/config.php';
include_once 'helpers.php';

$texto = "Texto de uma variável";

echo saudacao();
echo '<hr>';
echo resumirTexto($texto, 50);