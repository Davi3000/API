<?php
include "alternativasDAO.php";
$acao = $_GET["acao"];
switch ($acao){
    case 'inserirAlternativas':
    $alternativas = new alternativasDAO();
    $alternativas->texto = $_POST["texto"];
    $alternativas->correto = $_POST["correto"];
    $alternativas->inserirAlternativas();
    break;

    case 'trocarAlternativas':
        $alternativas = new alternativasDAO();
        $id = $_POST["id"];
        $texto = $_POST["texto"];
        $alternativas->trocarAlternativas($idAlternativas, $texto);
    break;

    case 'apagarAlternativas':
        $alternativas = new alternativasDAO();
        $id = $_GET["id"];
        $alternativas->apagarAlternativas($id);
    break;

    default:
        echo "Tem erro na seu codigo? Você e o vergonha da pofission!";
    break;
}
?>