<?php
include "quizDAO.php";
$acao = $_GET["acao"];
switch ($acao) {
    case 'inserirQuiz':
        $questions = new quizDAO();
        $questions->Desafio = $_POST["Desafio"];
        $questions->TDesafio = $_POST["TDesafio"];
        $questions->inserirQuiz();
        break;

    case 'apagarQuiz':
        $questions = new quizDAO();
        $id =  $_GET["id"];
        $questions->apagarQuiz($id);
        break;

    case 'trocarQuiz':
        $questions = new quizDAO();
        $questions->id =  $_POST["id"];
        $questions->Desafio =  $_POST["Desafio"];
        $questions->TDesafio = $_POST["TDesafio"];
        $questions->trocarQuiz();
        break;
    
    default:
        echo "Seu PC vai explodir mané...e tem coisa errada nesse código";
        break;
}
