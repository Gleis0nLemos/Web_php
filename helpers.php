<?php
//Arquivo de funções

require_once 'sistema/config.php';


/**
 * valida endereços de URL
 * 
 * @param string $url endereço de URL datado pela chamada da função
 * @return string dizendo se a URL é válida ou não
 */
function validarURL(string $url): string {
    
    $validacao =  filter_var($url, FILTER_VALIDATE_URL);
    return $validacao==true?'Endereço de URL válida': $validacao.'URL inválida';
}


/**
 * valida endereços de email
 * 
 * @param string $url endereço de email datado pela chamada da função
 * @return string dizendo se a URL é válida ou não
 */
function validarEmail(string $email): string {
    
    $validacao =  filter_var($email, FILTER_VALIDATE_EMAIL);
    return $validacao==true?'Endereço de email válido': $validacao.'Email inválido';
}


/**
 * conta o tempo a partir da chamada da função
 * 
 * @param string $data data definida an chamada da função
 * @return string retorno com a devida passagem temporal
 */
function contarTempo(string $data): string {

    # definindo a diferença entre a chamada da função e o tempo de agora em segundos
    # strtotime é o responsavél por nos retornar esse valor
    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($data);
    $diferenca = $agora - $tempo;

    # criando variáveis de saída para com o passar do tempo baseado na diferença
    $segundos = $diferenca;
    $minutos = round($diferenca/60);
    $horas = round($diferenca/3600);
    $dias = round($diferenca/86400);
    $semanas = round($diferenca/604800);
    $meses = round($diferenca/2419200);
    $anos = round($diferenca/29030400);

    # como vai ser o retorno ao usuário
    if($segundos <= 60){
        return 'agora';
    } elseif($minutos <= 60) {
        return $minutos == 1?'1 minuto atrás ': $minutos.' minutos atrás';
    } elseif($horas <= 24) {
        return $horas == 1?'1 hora ': $horas.' horas atrás';
    } elseif($dias <= 7) {
        return $dias == 1?'Há 1 dia atrás': $dias.' dias atrás';
    } elseif($semanas <= 4) {
        return $semanas == 1?'1 semana atrás ': $semanas.' semanas atrás';
    } elseif($meses <= 12) {
        return $meses == 1?'1 mês atrás': $meses. ' meses atrás';
    } else {
        return $anos == 1?'1 ano atrás': $anos.' anos atrás';
    }
}


/**
 * Formata determinado valor pré definido
 * 
 * @param float $valor valor a ser formatado
 * 
 * @return string valor formatado
 */
function formatarValor(float $valor=0): string {
# acima a função poderia ser também (float $valor=null);
# adicionei uma forma alternativa para pré-definir um valor no return abaixo, utilizando
# um operador terńario
    return number_format($valor?:10, 2, ',', '.'); #poderia ser - '$valor? valor: 0'
}


/**
 * formata um numero
 * 
 * @param string $numero definido
 * @param string|null $numero caso nenhum parâmetro não seja definido
 * @return string numero formatado
 */
function formataNumero(int $numero=null): string {
    return number_format($numero?:0, 0, '.', '.');
}


/**
 * Retorna uma saudação de acordo com o horário local
 * 
 * @return string saldação
 */
function saudacao (): string {

    //date_default_timezone_set('America/Sao_Paulo'); #definindo o fuso horário

    $hora = intval(date('G'));

    if($hora >= 0 and $hora <=5){
        $saudacao = '<h1>Boa madrugada</h1>';
    } elseif($hora >= 6 and $hora <=12){
        $saudacao = '<h1>Bom dia</h1>';
    } elseif($hora >= 13 and $hora <=18){
        $saudacao = '<h1>Boa tarde</h1>';
    } else{
        $saudacao = '<h1>Boa noite</h1>';
    }

    return $saudacao;
};


# a declaração 'string $texto' espera que o conteúdo de texto seja uma string
/**
 * Resume um texto
 * 
 * @param string $texto texto a resumir
 * @param int $limite quantidade de caracteres
 * @param string $continue opcional - o que deve aparecer após o texto resumido
 * 
 * @return string texto resumido 
 */
function resumirTexto (string $texto, int $limite, string $continue='...'): string {
    
    # 'trim' retira os espaços em branco no inicio e no final da string
    # strip_tags retira qualquer tag HTML, JS etc que tiver no conteúdo da variável texto
    $textoLimpo = trim(strip_tags($texto));
    # mb_strlen data a quantidade de caracteres da string
    if(mb_strlen($textoLimpo) <= $limite){
        return $textoLimpo;
    }

    # 1, em (mb_substr($textoLimpo, 0, $limite) será pego a ocorrência de caracteres do
    # texto até o limite pré definido;
    # 2, em mb_strrpos(mb_substr($textoLimpo, 0, $limite), '', buscará a ultima ocorrência de um espaço
    # referente ao texto resumido de 1;
    # 3, portanto a funcao completa abaixo retornará o texto começando do caractere na posição 0
    # até a última ocorrência de um espaço, evitando assim a quebra de palavras.
    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto.$continue;
};
