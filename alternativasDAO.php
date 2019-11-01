<?php 


class alternativasDAO{
    public $idAlternativa;
    public $texto;
    public $correto;
    public $idQuestao;
    private $conAlternativa;

    function __construct(){
        $this->conAlternativa = mysqli_connect("localhost", "root", "etecia", "projetopw");
    }
    public function inserirAlternativa(){
        $sql = "INSERT INTO  alternativas VALUES(0, '$this->texto','$this->correto')";
        $rs = $this->conAlternativa->query($sql);
        if($rs){
            header("Location: \alternativas");
        } else{
            echo $this->conAlternativa->error;
        }
    }
}
?>