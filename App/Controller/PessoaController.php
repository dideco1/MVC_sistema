<?php
namespace App\Controller;
use App\Model\PessoaModel;

class PessoaController 
{

    public static function index() 
    {
        $model = new PessoaModel();
        $model->getAllRows();

        include 'View/modules/Pessoa/ListaPessoas.php';

    }

    public static function form()
    {
        
        $model = new PessoaModel();

        if(isset($_GET['id']))
        {
            $model = $model->getById( (int) $_GET['id']);
        }
        
        include 'View/modules/Pessoa/FormPessoa.php';
    }

    public static function save() {
        $pessoa = new PessoaModel();
        $pessoa->id = $_POST['id'];
        $pessoa->nome = $_POST['nome'];
        $pessoa->rg = $_POST['rg'];
        $pessoa->cpf = $_POST['cpf'];
        $pessoa->data_nascimento = $_POST['data_nascimento'];
        $pessoa->email = $_POST['email'];
        $pessoa->telefone = $_POST['telefone'];
        $pessoa->endereco = $_POST['endereco'];

        $pessoa->save();

        header("Location: /pessoa");
    }

    public static function delete()
    {

        $model = new PessoaModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /pessoa");
    }
}