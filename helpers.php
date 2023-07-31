<?php
// Arquivo de funções

function saudacao (): string {
    return '<h1>Boa tarde</h1>';
};

# a declaração 'string $texto' espera que o conteúdo de texto seja uma string
function resumirTexto (string $texto, int $limite, string $continue='...'): string {
    return $texto;
};