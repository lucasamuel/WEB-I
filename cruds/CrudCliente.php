<?php

require_once 'DB.php';

abstract class CrudCliente extends DB
{

    protected $tabela;
    public $nome;
    public $endereco;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }


    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }
}
