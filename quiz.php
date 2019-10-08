<?php
include "quizDAO.php";

$quizDAO = new quizDAO();
$listaQuiz = ($quizDAO->buscarQuiz());
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <title>Usuários</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            </div>
            <form class="form-inline my-2 my-lg-0" action="quizcontrol.php" >
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    </nav>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">

                <ul class="nav flex-column  nav-pills vertical">
                    <li class="nav-item">
                        <a class="nav-link" href="usuarios.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Quiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
            <div>
                <button class="btn btn-dark" data-toggle="modal"  data-target="#newmodalQuiz">
                Cadastrar pergunta
                </button>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th></th>
                        <th>Tipo</th>
                        <th>Ações</th>
                    </tr>
                    
                    <?php foreach($listaQuiz as $questions): ?>
                    <tr>
                        <td><?= $questions->IDDesafio?></td>
                        <td><?= $questions->Desafio?></td>
                        <td><?= $questions->TDesafio?></td>
                        <td>
                            <button class="btn btn-dark"><i class="fas fa-pen"></i></button>
                            <button class="btn btn-warning alterar-senha" data-id="<?= $questions->IDDesafio?>"><i class="fas fa-pen" data-toggle="modal" data-target="#newmodalQuiz"></i></button>
                            <a class="btn btn-danger" href="quizcontrol.php?acao=apagarQuiz&ID=<?= $questions->IDDesafio?>"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        
                        
                    </tr>
                    <?php endforeach ?>
                </table>
            </div>
            <div class="modal fade" id="newmodalQuiz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nova pergunta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="quizcontrol.php?acao=inserirQuiz" method="POST">
      <div class="input-group mb-3">
                    <input type="text" name="nome" class="form-control" placeholder="Escreva a pergunta..." aria-label="Username" aria-describedby="basic-addon1">
                    <input type="text" name="nome" class="form-control" placeholder="Digite o tipo da questão..." aria-label="Username" aria-describedby="basic-addon1">
                    
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
          <button type="submit" class="btn btn-primary" href="quizcontrol.php?acao=inserirQuiz&ID=<?= $questions->Desafio?>">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="newmodalQuiz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Alterar pergunta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="quizcontrol.php?acao=trocarQuiz" method="POST">
      <div class="input-group mb-3">
                    
                </div>
                <input type="hidden" name="id" id="campo-id">
                <div class="input-group mb-3">
                
                    <input type="text" name="senha" class="form-control" placeholder="Pergunta" aria-label="Username" aria-describedby="basic-addon1">
                </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
          <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script type="text/javascript">
    var botao = document.querySelector(".alterar-senha");
    console.log(botao);
    botao.addEventListener("click", function(){
        //window.alert(botao.getAttribute("data-id"));
        var campo = document.querySelector("#campo-id");
        campo.value = botao.getAttribute("data-id");
    });
</script>
</html>