<?php

class Aluno
{
    // visibilidade
    public $nome; // atributo de classe

    public function criarFrase() // método da classe
    {
        return $this->nome . " é aluno da Coti";
    }

    // set é utilizado para persistir
    public function setNome($param)
    {
        $this->nome = $param;
    }

    // é utilizado para pegar dados
    public function getNome()
    {
        return $this->nome;
    }

    public function estudar()
    {
    }
}

class Linguagem extends Aluno
{
    public $linguagem;
    public $descrição;

    public function getLinguagem($linguagem)
    {
        return $this->linguagem;
    }

    public function setLinguagem($param)
    {
        $this->linguagem = $param;
    }

    public function getDescricao()
    {
        return $this->descrição;
    }

    public function setDescricao($param)
    {
        $this->descrição = $param;
    }
}
