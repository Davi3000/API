<?php
include "alternativasDAO.php";
$acao = $_GET["acao"];
switch ($acao){
    $alternativas = new alternativasDAO();
    $alternativas->texto = $_POST["texto"];
    $alternativas->correto = $_POST["correto"];
    $alternativas->inserirAlternativas();
    break;
}
?>