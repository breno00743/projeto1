<?php
session_start();
include "aluno.php";
var_dump($_SESSION);
if (isset($_SESSION['nome']) && isset($_SESSION['nascimento']) && isset($_SESSION['curso']) && isset($_SESSION['matricula'])) {
    $aluno = new Aluno($_SESSION['nome'], $_SESSION['nascimento'], $_SESSION['curso'], $_SESSION['matricula']);

    
    $_SESSION['aluno'] = serialize($aluno);

    header("Location: mostra.php");
    
} else {
    echo "Preencha todos os campos!";
}
?>
