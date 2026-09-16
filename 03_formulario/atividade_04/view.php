<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade_4</title>
</head>
<body>
    <h1>Calculadora de Média</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome do aluno:</label>
        <br>
        <input type="text" name="nome" required>
        <br><br>
        <label for="">Nota 1:</label>
        <br>
        <input type="number" name="nota1" step="0.01" required>
        <br><br>
        <label  for="">Nota 2:</label>
        <br>
        <input type="number" name="nota2" step="0.01" required>
        <br><br>
        <label  for="">Nota 3:</label>
        <br>
        <input type="number" name="nota3" step="0.01" required>
        <br><br>
        <button type="submit">Calcular Média</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>