<?php
namespace App\Controller;
use App\Model\ProdutoModel;

class ProdutoController
{
    public static function lista()
    {
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();
        $model->getAllRows();

        include 'View\modules\Produto\produtolista.php';
    }

    public static function form()
    {
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();

        if(isset($_GET['id']))
        {
            $model = $model->getById( (int) $_GET['id']);
        }

        include 'View\modules\Produto\produtoform.php';
    }

    public static function save()
    {
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();
        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->preco = $_POST['preco'];
        $model->descricao = $_POST['descricao'];
        $model->id_categoria = $_POST['id_categoria'];

        $model->save();

        header("Location: /produto");
    }

    public static function delete()
    {
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();
        $model->delete( (int) $_GET['id']);

        header("Location: /produto");
    }
}