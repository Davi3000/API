<?php

class UsuarioDAO{
    public $nome;
    public $email;
    public $senha;
    private $con;

    function __construct(){
        $this->con = mysqli_connect("localhost","root","etecia", "projetopw");
    }
    public function apagar($id){
        
        $sql = "DELETE FROM users WHERE UserID=$id";
        $rs = $this->con->query($sql);
        if ($rs) header("Location: /usuarios");
        else echo $this->con->error;
    }
    public function inserir(){
                          
        $sql = "INSERT INTO users VALUES (0, '$this->nome', '$this->email', md5('$this->senha'))"; 
        $rs = $this->con->query($sql);
        if($rs)
            header("Location: /usuarios");
        else
            echo $this->con->error;
    }
    public function buscar(){
        
        $sql = "SELECT * FROM users";
        $rs = $this->con->query($sql);
        while ($linha = $rs->fetch_object()){
            $listaDeUsuarios[] = $linha;
        }
        return $listaDeUsuarios;
    }
    public function trocaSenha($id, $senha){
        $sql = "UPDATE users SET Senha=md5('$senha') WHERE UserID='$id'";
        $rs = $this->con->query($sql);
        if($rs)
            header("Location: /usuarios");
        else
            echo $this->con->error;
    }

    public function logar(){
            $sql = "SELECT * FROM users WHERE
            email='$this->email' AND 
            senha=md5('$this->senha')";
        $rs = $this->con->query($sql);
        if($rs->num_rows){
            session_start();
            $_SESSION["logado"]=true;
            header("Location:/usuarios");
        }      else{
            header("Location:/");
        } 
}
}

?>