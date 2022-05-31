<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <center>
    <table border="2">
        <tr>
            <th></th>
            <th>ID</th>
            <th>Nome</th>
            <th>RG</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Endereço</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td> <a href="/pessoa/delete?id=<?= $item['id'] ?>">X</a> </td>
            <td><?= $item['id'] ?></td>
            <td> <a href="/pessoa/form?id=<?= $item['id'] ?>"> <?= $item['nome'] ?> </a> </td>
            <td><?= $item['rg'] ?></td>
            <td><?= $item['cpf'] ?></td>
            <td><?= $item['data_nascimento'] ?></td>
            <td><?= $item['email'] ?></td>
            <td><?= $item['telefone'] ?></td>
            <td><?= $item['endereco'] ?></td>

        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>



    </table>
    </center>
</body>