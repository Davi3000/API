<?php
/**
 * 
 */
class quizDAO

{
	public $Desafio;
	
	public $TDesafio;
	private $conQuiz;

	function __construct(){
        $this->conQuiz = mysqli_connect("localhost:3307","root","", "projetopw");
    }
	public function inserirQuiz(){
		$sql = "INSERT INTO questions VALUES (0, '$this->Desafio', '$this->TDesafio')"; 
        $rs = $this->conQuiz->query($sql);
        if($rs)
            header("Location: quiz.php");
        else
            echo $this->conQuiz->error;
	}
	public function trocarQuiz(){
        $sql = "UPDATE questions SET Desafio WHERE IDDesafio=$ID";
        $rs = $this->conQuiz->query($sql);
        if($rs)
            header("Location: quiz.php");
        else
            echo $this->conQuiz->error;
    }
    public function buscarQuiz(){
        
        $sql = "SELECT * FROM questions";
        $rs = $this->conQuiz->query($sql);
        while ($linha = $rs->fetch_object()){
            $listaDePerguntas[] = $linha;
        }
        return $listaDePerguntas;
    }
	public function apagarQuiz(){
		$sql = "DELETE FROM questions WHERE IDDesafio=$ID";
        $rs = $this->conQuiz->query($sql);
        if ($rs) header("Location: quiz.php");
        else echo $this->conQuiz->error;
	}
	
}
?>