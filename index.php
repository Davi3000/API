<?php

switch($_SERVER["PATH_INFO"]){
    case "/usuarios":
    case "/usuarios":
    require "usuarios.php";
    break;
    case "/questoes":
    case "/questoes":
    require "quiz.php";
    break;
    default:
    echo "Error 404 - Seu PC vai explodir...e a página não foi encontrada.";
    break;
}

?>