<?php
/**
 * 
 */
class quizDAO

{
	public $Desafio;
	public $IDDesafio;
	public $TDesafio;
	private $conQuiz;

	function __construct(){
        $this->conQuiz = mysqli_connect("localhost","root","", "projetopw");
    }
	public function inserirQuiz(){
		$sql = "INSERT INTO questions VALUES (0, '$this->Desafio')"; 
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
	public function apagarQuiz(){
		$sql = "DELETE FROM questions WHERE IDDesafio=$ID";
        $rs = $this->conQuiz->query($sql);
        if ($rs) header("Location: quiz.php");
        else echo $this->conQuiz->error;
	}
	
}
?>