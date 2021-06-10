<?php

require_once 'DB.php';

abstract class CrudItensVenda extends DB
{

    protected $tabela;
    public $nome;
    public $quantidade;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }


    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }
    public function getQuantidade()
    {
        return $this->quantidade;
    }
}
