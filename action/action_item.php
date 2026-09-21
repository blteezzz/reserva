<?php

use App\Item;
require("../vendor/autoload.php");
$action = $_GET['action'];
$item = new Item();
switch($action){
    case 'cadastrar':
        $item->nome = $_POST['nome'];
        $item->descricao = $_POST['descricao'];
        $item->patrimonio = $_POST['patrimonio'];
        $item->cadastrar();
        exit;
       // header('location: /reserva/view/item/listar.php');
        echo "<pre>";
        print_r($item);
        echo "<pre>";
        break;
        case'excluir':
            $item->id = $_GET['id'];
            $item->excluir();
            header('location: /reserva/view/item/listar.php');
}


?>