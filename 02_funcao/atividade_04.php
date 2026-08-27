<?php

function analisarNotas($nota1, $nota2, $nota3){
    $media = ($nota1 + $nota2 + $nota3) /3;
    $notas = [$nota1, $nota2, $nota3];
    $maior = $notas[0];
    $menor = $notas[0];

    foreach ($notas as $nota){
        if($nota > $maior ){
            $maior = $nota;
    }
        else{
            $menor = $nota;
        }
    }

    if ($media >=7){
        $situacao = "Aprovado";
    }
    elseif($media >= 5 && $media < 7){
        $situacao = "Recuperação";
    }
    else{
        $situacao = "Reprovado";
    }

    return [
        "Média" => $media,
        "Maior Nota" => $maior,
        "Menor Nota" => $menor,
        "Situação" => $situacao
    ];
}


$nota1 = 7;
$nota2 = 5;
$nota3 = 8;

$resuldado = analisarNotas($nota1, $nota2, $nota3);
    echo "A média do aluno foi:" . $resuldado["Média"] . "<br>";
    echo "A maior nota foi: " . $resuldado["Maior Nota"] . "<br>";
    echo "A menor nota foi:" . $resuldado["Menor Nota"] . "<br>";
    echo "A situação do aluno é:" . $resuldado["Situação"] . "<br>";
 
?>
