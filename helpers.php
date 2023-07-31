<?php
//Arquivo de funções

function saudacao (): string {

    $hora = 12;
    $saudacao = '';

    if($hora >= 0 && $hora <=5){
        $saudacao = '<h1>Boa madrugada</h1>';
    }

    if($hora >= 6 && $hora <=12){
        $saudacao = '<h1>Bom dia</h1>';
    }

    return $saudacao;
};

# a declaração 'string $texto' espera que o conteúdo de texto seja uma string
function resumirTexto (string $texto, int $limite, string $continue='...'): string {
    return $texto;
};
