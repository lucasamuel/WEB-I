<?php

require_once 'CrudProduto.php';

class Produto extends CrudProduto
{

    protected $tabela = 'produto';



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
        $sql = "INSERT INTO $this->tabela (nome, valor) VALUES (:nome, :valor)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':endereco', $this->valor);
        return $stm->execute();
    }


    public function update($id)
    {
        $sql = "UPDATE $this->tabela SET nome = :nome, valor = :valor WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':valor', $this->valor);
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
