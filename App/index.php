<?php

include 'config.php';
include 'autoload.php';
include 'rotas.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-color: black;
            font-size: 25px;
            font-family:serif;
        }
        h2{
            color:#CA2400;
            font-size: 45px;
        }
        .column {
            width: 45%;
            padding: 10px;
            height: 300px;
            color:#CA2400;
        }    
        button{
            color:white;
            background-color:black;
            width:45%;
        }
    </style>
</head>
<body>
    <center>
    <div class="row">
        <div class="column" style="background-color:black;">
            <h2>Listas</h2>
            <br>
            <a href="/categoriaproduto">
                <button> Categoria de Produto </button>
            </a>
            <br>
            <a href="/pessoa">
                <button> Pessoa </button>
            </a>
            <br>
            <a href="/produto">
                <button> Produto </button>
            </a>
            <br>
            <a href="/funcionario">
                <button> Funcionario </button>
            </a>
        </div>

        <div class="column" style="background-color:black;">
            <h2>Cadastros</h2>
            <br>
            <a href="/categoriaproduto/form">
                <button> Categoria de Produto </button>
            </a>
            <br>
            <a href="/pessoa/form">
                <button> Pessoa </button>
            </a>
            <br>
            <a href="/produto/form">
                <button> Produto </button>
            </a>
            <br>
            <a href="/funcionario/form">
                <button> Funcionario </button>
            </a>
        </div>

    </div>

    </center>
</body>
</html>