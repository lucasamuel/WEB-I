<?php

require_once 'DB.php';

abstract class CrudVenda extends DB
{

    protected $tabela;
    public $nome;
    public $valor;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
}
