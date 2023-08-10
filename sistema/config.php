<?php
// Arquivo de configuração do sistema

# Definição do fuso horário padrão
date_default_timezone_set('America/Sao_Paulo');

#informações do sistema                                         
define('SITE_NOME', 'Unset');
define('SITE_DESCRICAO', 'Unset - Tecnologia em Sistemas');

#urls do sistema
define('URL_PRODUCAO', 'https://unset.com.br');
define('URL_DESENVOLVIMENTO', 'htpp://lcoalhost/blog');
        #poderia ser const SITE_NOME - 'Unset'
        #porém não pode usar const em uma condicional