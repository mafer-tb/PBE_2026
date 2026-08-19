<?php

function analisarNumero($numero){
    $dobro = $numero * 2;
    $triplo = $numero * 3;
    $quadrado = $numero ** 2;
    $situacao = "";

    if($numero >= 0){
        $situacao = "POSITIVO";
    }
    else{
        $situacao = "NEGATIVO";
    }

    return [
        "dobro" => $dobro,
        "triplo" => $triplo,
        "quadrado" => $quadrado,
        "situacao" => $situacao
    ];
}
$numero = 5;
$resuldado = analisarNumero($numero);
    echo "Número:" . $numero . "<br>";
    echo "Dobro: " . $resuldado["dobro"] . "<br>";
    echo "Triplo:" . $resuldado["triplo"] . "<br>";
    echo "Quadrado: " . $resuldado["quadrado"] . "<br>";
    echo "Situação: " . $resuldado["situacao"] . "<br>";
?>