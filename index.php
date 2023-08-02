<?php 
// Arquivo index responsável perla inicialização do sistema

//declare(strict_types=1) 
# acima data uma verificação rigorosa dos tipos de dados passados
# assim, o PHP exigirá que os tipos de dados sejam exatamente correspondentes
# aos declarados na assinatura das funções ou métodos, ajudando a evitar erros
# causados por tipos de dados.

require_once 'sistema/config.php';
include_once 'helpers.php';

# espera valor equivalente ao tipo de dado passado em helpers, caso contrário 
# o PHP tentará converter para o tipo esperado se possível.
# ex: **em helpers.php for int $limite, e aqui for '50' funcionará normalmente
# porém, se o valor for '50 e um' apresentará um erro. 

$texto = 'texto para resumo';

/*
echo $total = mb_strlen(trim($texto));
echo '<hr>';
echo $resumo = mb_substr($texto, 0, 5);
echo '<hr>';    
echo $ocorrencia = mb_strrpos($texto, 'x');
*/

// var_dump($texto);
// echo '<hr>';
// echo saudacao();
// echo '<hr>';
echo resumirTexto($texto, 10);