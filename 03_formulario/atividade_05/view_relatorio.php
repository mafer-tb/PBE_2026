<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
</head>
<body>
    <h1>Resuldo do IMC</h1>
    <P><b> Nome: </b> <?= $nome ?></P>
    <p><b> Peso: </b> <?= $peso ?></p>
    <p><b> Altura: </b> <?= $altura ?></p>
    <p><b> Resultado IMC: </b> <?= $calculo_imc ?></p>

    <?php if($calculo_imc < 18.5): ?>
        <p> Abaixo do peso !!!</p>
    <?php elseif($calculo_imc >= 18.5 && $calculo_imc < 24.9): ?>
        <p> Peso normal!!!</p>
    <?php elseif($calculo_imc >= 25 && $calculo_imc < 29.9): ?>
        <p> Sobrepeso !!!</p>
    <?php else: ?>
        <p>Obesidade !!!</P
    <?php endif ?>
</body>
</html>