<?php
namespace App;
use PDO;

class Servidor{
    public $id;
    public $nome;
    public $matricula;
    public $cpf;
    public $telefone;
    public $email;
    public $endereco;
    public $dtn;
    public function cadastrar(){
        $db= new DataBase();
        $db->insert([

            "nome"=> $this->nome,
            "matricula"=> $this->matricula,
            "cpf" => $this->cpf,
            "telefone"=> $this->telefone,
            "email"=> $this->email,
            "endereco" => $this->endereco,
            "dtn" => $this->dtn

        ]);
        return true;
    }
    public function alterar()
    {
        return new DataBase()->update("id" . $this->id,[
            
            "nome"  => $this->nome,
            "matricula"=> $this->matricula,
            "cpf" => $this->cpf,
            "telefone"=> $this->telefone,
            "email"=> $this->email,
            "endereco" => $this->endereco,
            "dtn" => $this->dtn
        ]);

    }
    public function excluir()
    {
  
    }
    public function listar()
    {
     
    }
}
