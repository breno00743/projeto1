<?php
session_start();
include "aluno.php";

if (!isset($_SESSION['aluno'])) {
    echo '<a href="formulario.php">Cadastre um aluno primeiro</a>';
    exit;
}

$aluno = unserialize($_SESSION['aluno']);

echo htmlspecialchars($aluno->nome) . ", " . $aluno->idade() . " anos.";
echo "<br><a href='mostra.php'>Voltar</a>";
?>
