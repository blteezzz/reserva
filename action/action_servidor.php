<?php

use App\Servidor;

require('../vendor/autoload.php');

$action = $_GET['action'] ?? '';

$servidor = new Servidor();

switch ($action) {

    case 'cadastrar':

        $servidor->nome = $_POST['nome'];
        $servidor->matricula = $_POST['matricula'];
        $servidor->cpf = $_POST['cpf'];
        $servidor->telefone = $_POST['telefone'];
        $servidor->email = $_POST['email'];
        $servidor->endereco = $_POST['endereco'];
        $servidor->dtn = $_POST['dtn'];

        $servidor->cadastrar();

        header('Location: /reserva/view/servidor/listar.php');
        exit;

    case 'excluir':

        $servidor->id = $_GET['id'];

        $servidor->excluir();

        header('Location: /reserva/view/servidor/listar.php');
        exit;

    case 'alterar':

        $servidor->id = $_POST['id'];
        $servidor->nome = $_POST['nome'];
        $servidor->matricula = $_POST['matricula'];
        $servidor->cpf = $_POST['cpf'];
        $servidor->telefone = $_POST['telefone'];
        $servidor->email = $_POST['email'];
        $servidor->endereco = $_POST['endereco'];
        $servidor->dtn = $_POST['dtn'];

        $servidor->alterar();

        header('Location: /reserva/view/servidor/listar.php');
        exit;
}