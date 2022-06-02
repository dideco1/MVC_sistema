<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body{
        background-color: black;
        font-size: 25px;
        font-family:serif;
    }
    h1{
        color:#CA2400;
        font-size: 45px;
    }
    label{
        color:white;
        width:230px;
        display: inline-block;
    }
    input{
        width:239px;
    }
    .botao{
        position:absolute;
        top: 0px;
        color:white;
        background-color:grey;
    }

    </style>
</head>
<body>
    <center>
    <form action="/pessoa/save" method="post">
        <fieldset>
            
            <h1>Cadastro de Pessoa</h1>
            <input type="hidden" value="<?= $model->id ?>" name="id" />
            <br>

            <label for="nome">Nome:</label>
            <input name="nome" id="nome" value="<?= $model->nome ?>" type="text" />
            <br>

            <label for="rg">RG:</label>
            <input name="rg" id="rg" value="<?= $model->rg ?>" type="text" />
            <br>

            <label for="cpf">CPF:</label>
            <input name="cpf" id="cpf" value="<?= $model->cpf ?>" type="number" />
            <br>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input name="data_nascimento" id="data_nascimento" value="<?= $model->data_nascimento ?>" type="date" />
            <br>

            <label for="email">E-mail:</label>
            <input name="email" id="email" value="<?= $model->email ?>" type="email" />
            <br>

            <label for="telefone">Telefone:</label>
            <input name="telefone" id="telefone" value="<?= $model->telefone ?>" type="numer" />
            <br>

            <label for="endereco">Endereço:</label>
            <input name="endereco" id="endereco" value="<?= $model->endereco ?>" type="text" />
            <br>
            <br>

            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
    </center>
    <a href="/">
        <button class="botao"> Voltar </button>
    </a>
</body>
</html>