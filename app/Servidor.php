<?php

namespace App;

class Servidor
{
    public $id;
    public $nome;
    public $matricula;
    public $cpf;
    public $telefone;
    public $email;
    public $endereco;
    public $dtn;

    public function cadastrar()
    {
        $db = new DataBase('servidor');

        $db->insert([
            'nome' => $this->nome,
            'matricula' => $this->matricula,
            'cpf' => $this->cpf,
            'telefone' => $this->telefone,
            'email' => $this->email,
            'endereco' => $this->endereco,
            'dtn' => $this->dtn
        ]);

        return true;
    }

    public function alterar()
    {
        $db = new DataBase('servidor');

        return $db->update(
            'id = ' . $this->id,
            [
                'nome' => $this->nome,
                'matricula' => $this->matricula,
                'cpf' => $this->cpf,
                'telefone' => $this->telefone,
                'email' => $this->email,
                'endereco' => $this->endereco,
                'dtn' => $this->dtn
            ]
        );
    }

    public function excluir()
    {
        $db = new DataBase('servidor');

        return $db->delete(
            'id = ' . $this->id
        );
    }

    public static function listar(
        $where = null,
        $order = null,
        $limit = null
    ) {
        return (new DataBase('servidor'))
            ->select($where, $order, $limit)
            ->fetchAll(
                \PDO::FETCH_CLASS,
                self::class
            );
    }
}