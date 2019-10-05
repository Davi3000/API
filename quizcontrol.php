<?php
include "quizDAO.php";
$acao = $_GET["acao"];
switch ($acao) {
    case 'inserirQuiz':
        $questions= new quizDAO();
        $questions->Desafio = $_POST["Desafio"];
        $questions->TDesafio = $_POST["TDesafio"];
        $questions->inserirQuiz();
        break;
        
    case 'apagarQuiz':
        $questions = new quizDAO();
        $IDDesafio =  $_GET["IDDesafio"];
        $questions->apagar($id);
        break;
    
    case 'trocarQuiz':
        $questions = new quizDAO();
        $IDDesafio =  $_POST["IDDesafio"];
        $Desafio =  $_POST["Desafio"];
        $questions->trocaSenha($IDDesafio, $Desafio);
        break;
    
    default:
        # code...
        break;
}
?>