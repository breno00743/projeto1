<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário do Aluno</title>
</head>
<body>
    <h2>Cadastrar Aluno</h2>
    <form action="recebe.php" method="post">
        Nome: <input type="text" name="nome" ><br><br>
        Nascimento: <input type="date" name="nascimento" ><br><br>
        Curso: <input type="text" name="curso" ><br><br>
        Matrícula: <input type="text" name="matricula" ><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
