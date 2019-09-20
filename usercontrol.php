<?php

include "UsuarioDAO.php";
$acao = $_GET["acao"];

switch ($acao) {
    case 'inserir':
        $users= new UsuarioDAO();
        $users->nome = $_POST["nome"];
        $users->email = $_POST["email"];
        $users->senha = $_POST["senha"];
        $users->inserir();
        break;
        
    case 'apagar':
        $users = new UsuarioDAO();
        $id =  $_GET["id"];
        $users->apagar($id);
        break;
    
    default:
        # code...
        break;
}


?>