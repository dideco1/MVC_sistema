<?php
namespace App\Controller;
use App\Model\CategoriaProdutoModel;


class CategoriaProdutoController extends Controller
{
    public static function lista()
    {
        include 'Model/CategoriaProdutoModel.php';
        $model = new CategoriaProdutoModel();
        $model->getAllRows();

        parent::render('Categoria_Produto/categoriaproduto_lista', $model);   
    }

    public static function form()
    {
        include 'Model/CategoriaProdutoModel.php';
        $model = new CategoriaProdutoModel();

        if(isset($_GET['id']))
        {
            $model = $model->getById( (int) $_GET['id']);
        }

        parent::render('Categoria_produto/categoriaproduto_form', $model);
    }

    public static function save()
    {
        include 'Model/CategoriaProdutoModel.php';

        $model = new CategoriaProdutoModel();
        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->descricao = $_POST['descricao'];

        $model->save();
        header("Location: /categoriaproduto");
    }

    public static function delete()
    {
        include 'Model/CategoriaProdutoModel.php';
        $model = new CategoriaProdutoModel();
        $model->delete( (int) $_GET['id']);

        header("Location: /categoriaproduto");
    }
}