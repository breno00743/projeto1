<?php
session_start();

if (isset($_SESSION['aluno'])) {
    echo '<a href="formulario.php">Cadastre um aluno primeiro</a>';
    
}


$aluno = unserialize($_SESSION['aluno']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dados do Aluno</title>
</head>
<body>
    <h2>Dados do Aluno</h2>
    Nome: <?= ($aluno->nome) ?><br>
    Nascimento: <?= ($aluno->nascimento) ?><br>
    Curso: <?= ($aluno->curso) ?><br>
    Matrícula: <?= ($aluno->matricula) ?><br><br>

    <a href="mostra_idade.php">Mostrar idade</a><br>
    <a href="sair.php">Sair</a>
</body>
</html>

