<?php 


class alternativasDAO{
    
    public $texto;
    public $correta;
    public $idQuestao;
    private $conAlternativa;

    function __construct(){
        $this->conAlternativa = mysqli_connect("localhost", "root", "etecia", "projetopw");
    }
    public function inserirAlternativa(){
        $sql = "INSERT INTO  alternativas  VALUES(0, '$this->texto','$this->correta', '$this->idQuestao')";
        $rs = $this->conAlternativa->query($sql);
        if($rs){
            header("Location: /alternativas");
        } else{
            echo $this->conAlternativa->error;
        }
    }
    public function trocarAlternativas(){
        $sql = "UPDATE alternativas SET texto WHERE idAlternativa = $id";
        $rs = $this->conAlternativa->query($sql);
        if($rs){
            header("Location: /alternativas");
        }
        else{
            echo $this->conAlternativa->error;
        }
    }
    public function buscarAlternativas(){
        $sql = "SELECT * FROM alternativas";
        $rs = $this->conAlternativa->query($sql);
        while($linha = $rs->fetch_object()){
            $listaDeAlternativas[] = $linha;
        }
        return $listaDeAlternativas;
    }
    public function apagarAlternativas($idAlternativa){
        $sql = "DELETE FROM alternativas WHERE idAlternativa = $id";
        $rs = $this->conAlternativa->query($sql);
        if($rs){
            header("Location: /alternativas");
        }
        else{
            echo $this->conAlternativa->error;
        }
    }

}
?>