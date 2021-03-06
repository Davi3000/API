<?php 

require "config.php";
class alternativasDAO{
    
    public $texto;
    public $correta;
    public $idQuestao;
    private $conAlternativa;

function __construct(){
        $this->conAlternativa = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    }
    public function inserirAlternativas(){
        $sql = "INSERT INTO  alternativas  VALUES(DEFAULT, '$this->texto','$this->correta', '$this->idQuestao')";
        $rs = $this->conAlternativa->query($sql);
        if($rs){
            header("Location: /alternativas?idQuestAl=$this->idQuestao");
        } else{
            echo $this->conAlternativa->error;
        }
    }
    public function trocarAlternativas(){
        $sql = "UPDATE alternativas SET texto WHERE idAlternativa = '$this->id'";
        $rs = $this->conAlternativa->query($sql);
        if($rs){
            header("Location: /alternativas");
        }
        else{
            echo $this->conAlternativa->error;
        }
    }
    public function buscarAlternativas(){
        $sql = "SELECT * FROM alternativas WHERE idQuestao = $this->idQuestao";
        $rs = $this->conAlternativa->query($sql);
        while($linha = $rs->fetch_object()){
            $listaDeAlternativas[] = $linha;
        }
        return $listaDeAlternativas;
    }
    public function apagarAlternativas($idAlternativa){
        $sql = "DELETE FROM alternativas WHERE idAlternativa = '$idAlternativa'";
        $rs = $this->conAlternativa->query($sql);
        session_start();
        if ($rs) {
            $_SESSION["success"] = "Alternativa Apagada!!AAAAA";
        } else {
            $_SESSION["danger"] = "Error Mortal... Não deu pra apagar brow :(";
        }
        header("Location: /alternativas?idQuestAl=$this->idQuestao");
    }
    
    

}
?>