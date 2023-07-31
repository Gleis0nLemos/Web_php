<?php
//Arquivo de funções

function saudacao (): string {

    date_default_timezone_set('America/Sao_Paulo'); #definindo o fusop horário

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
function resumirTexto (string $texto, int $limite, string $continue='...'): string {
    return $texto;
};
