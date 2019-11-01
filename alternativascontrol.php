<?php
include "alternativasDAO.php";
$acao = $_GET["acao"];
switch ($acao){
    case 'inserirAlternativa':
    $alternativas = new alternativasDAO();
    $alternativas->texto = $_POST["texto"];
    $alternativas->correto = $_POST["correto"];
    $alternativas->inserirAlternativa();
    break;

    case 'trocarAlternativa':
        $alternativas = new alternativasDAO();
        $id = $_POST["id"];
        $texto = $_POST["texto"];
        $alternativas->trocarAlternativa($idAlternativas, $texto);
    break;

    case 'apagarAlternativa':
        $alternativas = new alternativasDAO();
        $id = $_GET["id"];
        $alternativas->apagarAlternativa($id);
    break;

    default:
        echo "Tem erro na seu codigo? Você e o vergonha da pofission!";
    break;
}
?>