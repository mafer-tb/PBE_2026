<?php

function calcularPrecoFinal($preco, $quantidade, $desconto){
    $total = $preco * $quantidade;
    return $total - ($total*($desconto/100));
}

$preco = 100;
$quantidade = 3;
$desconto = 25; 

$resuldado = calcularPrecoFinal($preco, $quantidade, $desconto);
    echo "Preço= $preco <br>";
    echo "Quantidade= $quantidade <br>";
    echo "Desconto= $desconto <br>";
    echo "Preço final= $resuldado";
   
?>