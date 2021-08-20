<?php
class DAO
{
    public $table;

    function __construct($table)
    {
        $this->table = $table;
    }

    public function connect()
    {
        // responsável em conectar o banco
    }

    public function disconnect()
    {
        // responsável em desconectar o banco
    }

    public function create($data)
    {
        // $this->table
        // método que cria registros
    }

    public function read($id)
    {
        // método que lê registros
    }

    public function getByParam($array)
    {
        $array = [
            "nome" => "Sanclair",
            "turno" => "noite"
        ];
        // $final = "";
        // foreach ($array as $key => $value) {
        //     $final = $final . " where " . $key . " = " . $value
        // }
        // select * from $this->table $final
    }

    public function update($id, $data)
    {
        // método que atualiza registros
    }

    public function delete($id)
    {
        // método que remove registros
    }
}

class Aluno extends DAO
{
    public function salvarAluno($param)
    {
        $this->create($param);
    }
}

class Linguagem extends DAO
{
    public function salvarLinguagem($param)
    {
        $this->create($param);
    }
}
