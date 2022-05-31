<?php

class CategoriaProdutoDAO
{
    private $conexao;

    function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=db_sistema";
        $this->conexao = new PDO($dsn, 'root', '1234');
    }

    public function insert(CategoriaProdutoModel $model)
    {
        $sql = "INSERT INTO categoria_produto (nome, descricao)
        VALUES (?, ?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM categoria_produto";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function update(CategoriaProdutoModel $model)
    {
        $sql = "UPDATE categoria_produto SET nome=?, descricao=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->id);
        $stmt->execute();
    }

    public function selectById(int $id)
    {
        include_once 'Model/CategoriaProdutoModel.php';

        $sql = "SELECT * FROM categoria_produto WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CategoriaProdutoModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM categoria_produto WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}