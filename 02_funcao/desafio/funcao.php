<?php

function calcularPedido($nome, $p_Unitario, $qtd, $desconto =0,$imposto = 0){ 
    $subtotal = $p_Unitario * $qtd;
    $v_Desconto = $subtotal * ($desconto / 100);
    $v_ComDesconto = $subtotal - $v_Desconto;
    $valorImposto = $v_ComDesconto * ($imposto / 100);
    
   
    $totalFinal = $v_ComDesconto + $valorImposto;

    return [
        "nomeProduto" => $nome,
        "subtotal" => $subtotal,
        "valorDesconto" => $v_Desconto,
        "valorImposto" => $valorImposto,
        "totalFinal" => $totalFinal
    ];
}

function calcularFrete($totalFinal){
    $frete = $totalFinal * (10/ 100);
    $totalcomFrete = $frete + $totalFinal;
    
    return $totalcomFrete;
}


?>
