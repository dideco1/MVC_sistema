<?php


class FuncionarioDAO
{
    private $conexao;

    function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=db_sistema";

        $this->conexao = new PDO($dsn, 'root', '1234');
    }

    public function insert(FuncionarioModel $model)
    {
        $sql = "INSERT INTO funcionario (nome, cargo, salario)
        VALUES (?, ?, ?);";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cargo);
        $stmt->bindValue(3, $model->salario);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM funcionario";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function update(FuncionarioModel $model)
    {
        $sql = "UPDATE funcionario SET nome=?, cargo=?, salario=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cargo);
        $stmt->bindValue(3, $model->salario);
        $stmt->bindValue(4, $model->id);

        $stmt->execute();

    }

    public function selectById(int $id)
    {
        include_once 'Model/FuncionarioModel.php';

        $sql = "SELECT * FROM funcionario WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("FuncionarioModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM funcionario WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}