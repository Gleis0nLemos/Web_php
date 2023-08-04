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

# para condicionais simples/pequenas pode-se utilizar a exibição abaixo
# conhecida como 'Operador Ternário': 
// echo ($valor? $valor:0);
// echo ($valor ?: 0); # forma amis resumida ainda 

#abaixo, dia/mês/ano   Hora/minutos/segundos
$data = date('d/m/Y H:i:s');
echo $data;

echo saudacao();