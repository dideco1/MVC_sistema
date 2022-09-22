<?php

spl_autoload_register(function ($nome_classe)
{
    $arquivo = basedir.$nome_classe . '.php';

    if(file_exists($arquivo))
    {
        include $arquivo;
    }
    else
    {
        exit('Arquivo inexistente ou não encontrado. Solicitado: ' . $arquivo);
    }
});