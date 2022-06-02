<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorias de Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body{
        background-color: black;
        font-size: 20px;
        font-family:serif;

    }
    legend{
        color:white;
        font-size: 45px;
    }
    th{
        color: white;
        text-align:center;
    }
    td{
        color: #CA2400;
        text-align:center;
    }
    a:hover{
        color:#CA2400;
    }
    a:active{
        color:white;
    }
    button{
        position:absolute;
        top: 0px;
        color:white;
        background-color:grey;
    }
    </style>
</head>
<body>
    <center>
        <legend> Lista de Categorias de Produtos </legend>
        <table border="2">
            <tr>
                <th>&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
            </tr>

            <?php foreach($model->rows as $item): ?>
            <tr>
                <td> <a href="/categoriaproduto/delete?id=<?= $item['id'] ?>">X</a> </td>
                <td>&nbsp<?= $item['id'] ?>&nbsp</td>
                <td>&nbsp<a href="/categoriaproduto/form?id=<?= $item['id'] ?>"> <?= $item['nome'] ?> </a>&nbsp</td>
                <td>&nbsp<?= $item['descricao'] ?>&nbsp</td>

            </tr>
            <?php endforeach ?>

            
            <?php if(count($model->rows) == 0): ?>
                <tr>                    
                    <td colspan="5">Nenhum registro encontrado.</td>
                </tr>
            <?php endif ?>



        </table>
    </center>
    <a href="/">
        <button> Voltar </button>
    </a>
</body>