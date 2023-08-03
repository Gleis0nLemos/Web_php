<?php
//Arquivo de funções

/**
 * Formata determinado valor pré definido
 * 
 * @param float $valor valor a ser formatado
 * 
 * @return string valor formatado
 */
function formatarValor(float $valor=0): string {
# acima a função poderia ser também (float $valor=null);
# adicionei uma fomra alternativa para pré-definir um valor no return abaixo, utilizando
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
function formataNumero(string $numero=null): string {
    return number_format($numero?:0, 0, '.', '.');
}


/**
 * Retorna uma saudação de acordo com o horário local
 * 
 * @return string saldação
 */
function saudacao (): string {

    date_default_timezone_set('America/Sao_Paulo'); #definindo o fuso horário

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
