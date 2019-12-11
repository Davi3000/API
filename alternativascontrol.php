<?php
include "alternativasDAO.php";
$acao = $_GET["acao"];
switch ($acao){
    case 'inserirAlternativas':
		$alternativa = new AlternativasDAO();
		$alternativa->texto = $_POST["texto"];
		$alternativa->idQuestao = $_POST["idQuestao"];
		if (isset($_POST["correta"])) $alternativa->correta = 1;
		else $alternativa->correta = 0;
		$alternativa->inserirAlternativas();
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