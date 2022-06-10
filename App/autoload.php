<?php

spl_autoload_register(function ($nome_classe){

    include '../' . $nome_classe . '.php';
});