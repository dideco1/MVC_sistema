<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <center>
    <form action="/produto/save" method="post">
        <fieldset>
            
            <legend>Cadastro de Produto</legend>
            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input name="nome" id="nome" value="<?= $model->nome ?>" type="text" />
            <br>

            <label for="preco">Preço:</label>
            <input name="preco" id="preco" value="<?= $model->preco ?>" type="text" />
            <br>

            <label for="descricao">Descrição:</label>
            <input name="descricao" id="descricao" value="<?= $model->descricao ?>" type="text" />
            <br>

            <label for="id_categoria">ID da categoria do produto:</label>
            <input name="id_categoria" id="id_categoria" value="<?= $model->id_categoria ?>" type="text" />
            <br>
            <br>
            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
    </center>
</body>
</html>