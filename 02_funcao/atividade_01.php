<?php

function verificarMaioridade($idade){

    if ($idade >= 18){
        return "Maior de idade";
    }
    elseif ($idade <= 17){
        return "Menor de idade";
    }
}

$resuldado = verificarMaioridade(15);
    echo "$resuldado";
    echo "<br>";
$resuldado = verificarMaioridade(18);
    echo "$resuldado";
    echo "<br>";
$resuldado = verificarMaioridade(25);
    echo "$resuldado";
    echo "<br>";
?>