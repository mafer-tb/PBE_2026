<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade_5</title>
</head>
<body>
    <h1>Calculadora o IMC</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome:</label>
        <br>
        <input type="text" name="nome" >
        <br><br>
        <label for="">Peso em KG:</label>
        <br>
        <input type="number" name="peso" step="0.01" required>
        <br><br>
        <label  for="">Altura em metros:</label>
        <br>
        <input type="number" name="altura" step="0.01" required>
        <br><br>
        <button type="submit">Calcular</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>