<?php

/**
 * 
 */
require "config.php";
class quizDAO

{
    public $Desafio;

    public $TDesafio;
    private $conQuiz;

    function __construct()
    {
        $this->conQuiz = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    }
    public function inserirQuiz()
    {
        $sql = "INSERT INTO questions VALUES (0, '$this->Desafio', '$this->TDesafio')";
        $rs = $this->conQuiz->query($sql);
        session_start();
        if ($rs) {
            $_SESSION["success"] = "Desafio inserido com Sucesso mermão!";
        } else {
            $_SESSION["danger"] = "Error Mortal... Não deu pra inserir a pergunta brow :(";
        }
        header("Location: /questoes");
    }
    public function trocarQuiz()
    {
        $sql = "UPDATE questions SET Desafio WHERE IDDesafio=$this->id";
        $rs = $this->conQuiz->query($sql);
        session_start();
        if ($rs) {
            $_SESSION["success"] = "Deu bom pra trocar esse desafio cara :P OOOOOOHHHH!";
        } else {
            $_SESSION["danger"] = "É...então, não deu pra mudar nada não x(";
        }
        header("Location: /questoes");
    }
    public function buscarQuiz()
    {

        $sql = "SELECT * FROM questions";
        $rs = $this->conQuiz->query($sql);
        while ($linha = $rs->fetch_object()) {
            $listaDePerguntas[] = $linha;
        }
        return $listaDePerguntas;
    }
    public function apagarQuiz($id)
    {
        $sql = "DELETE FROM questions WHERE IDDesafio=$id";
        $rs = $this->conQuiz->query($sql);
        session_start();
        if ($rs) {
            $_SESSION["success"] = "Maluco! Tu conseguiu apagar essa parada...uau!";
        } else {
            $_SESSION["danger"] = "Men...não deu pra apagar isso não :(";
        }
        header("Location: /questoes");
    }
}
