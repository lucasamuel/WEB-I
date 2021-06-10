<?php

require_once 'CrudItensVenda.php';

class ItensVenda extends CrudItensVenda
{

    protected $tabela = 'itensVenda';



    public function findUnit($id)
    {
        $sql = "SELECT * FROM $this->tabela WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }


    public function insert()
    {
        $sql = "INSERT INTO $this->tabela (nome, quantidade) VALUES (:nome, :quantidade)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':quantidade', $this->quantidade);
        return $stm->execute();
    }


    public function update($id)
    {
        $sql = "UPDATE $this->tabela SET nome = :nome, quantidade = :quantidade WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':quantidade', $this->quantidade);
        return $stm->execute();
    }


    public function delete($id)
    {
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        return $stm->execute();
    }
}
