<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade_6</title>
</head>
<body>
    <h1>compra de Ingressos</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome do cliente:</label>
        <br>
        <input type="text" name="nome" >
        <br><br>
        <label for="">Filme:</label>
        <br>
        <input type="text" name="filme" >
        <br><br>
        <label  for="">Quantidade de ingressos:</label>
        <br>
        <input type="number" name="qtd_ingressos" step="0.01" required>
        <br><br>

        <label for="">Tipo de ingresso:</label>
        <br><br>

        <input type="radio" id="inteira" name="tipo_ingresso" value="inteira" checked>
        <label for="inteira">Inteira</label>
        <br>
        <input type="radio" id="meia" name="tipo_ingresso" value="meia">
        <label for="meia">Meia-entrada</label>
        <br><br>

        <button type="submit" style="color: blue;">Comprar Ingressos</button>
        <button type="reset">Limpar</button>
        <br><br>


    </form>
</body>
</html>