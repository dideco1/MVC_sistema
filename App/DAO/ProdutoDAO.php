<?php
namespace App\DAO;
use App\Model\ProdutoModel;

class ProdutoDAO extends DAO
{

    function __construct()
    {
        parent::__construct();
    }

    public function insert(ProdutoModel $model)
    {
        $sql = "INSERT INTO produto (nome, preco, descricao, id_categoria)
        VALUES (?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->preco);
        $stmt->bindValue(3, $model->descricao);
        $stmt->bindValue(4, $model->id_categoria);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM produto";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function update(ProdutoModel $model)
    {
        $sql = "UPDATE produto SET nome=?, preco=?, descricao=?, id_categoria=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->preco);
        $stmt->bindValue(3, $model->descricao);
        $stmt->bindValue(4, $model->id_categoria);
        $stmt->bindValue(5, $model->id);

        $stmt->execute();

    }

    public function selectById(int $id)
    {
        include_once 'Model/ProdutoModel.php';

        $sql = "SELECT * FROM produto WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ProdutoModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM produto WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}