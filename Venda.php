<?php

require_once 'CrudVenda.php';

class Venda extends CrudVenda
{

    protected $tabela = 'venda';



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
        $sql = "INSERT INTO $this->tabela (id) VALUES (:id)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':nome', $this->nome);
        return $stm->execute();
    }


    // public function update($id)
    // {
    //     $sql = "UPDATE $this->tabela SET nome = :nome, endereco = :endereco WHERE id = :id";
    //     $stm = DB::prepare($sql);
    //     $stm->bindParam(':id', $id, PDO::PARAM_INT);
    //     $stm->bindParam(':nome', $this->nome);
    //     $stm->bindParam(':endereco', $this->endereco);
    //     return $stm->execute();
    // }


    public function delete($id)
    {
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        return $stm->execute();
    }
}
