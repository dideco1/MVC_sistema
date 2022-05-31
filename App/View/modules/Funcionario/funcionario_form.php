<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <center>
    <form action="/funcionario/save" method="post">
        <fieldset>
            
            <legend>Cadastro de Funcionários</legend>
            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input name="nome" id="nome" value="<?= $model->nome ?>" type="text" />
            <br>

            <label for="cargo">Cargo:</label>
            <input name="cargo" id="cargo" value="<?= $model->cargo ?>" type="text" />
            <br>

            <label for="salario">Salario:</label>
            <input name="salario" id="salario" value="<?= $model->salario ?>" type="text" />
            <br>
            <br>
            
            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
    </center>
</body>
</html>