<?php
$nome = $_POST['nome'];
$salario_bruto = $_POST['salario_bruto'];
$horas_extras = $_POST['horas_extras'];
$beneficio = $_POST['beneficio'];
$desconto = $_POST['desconto'];

//calcular horas extras
$valor_hora = $salario_bruto / 160;
$valor_hora_extra = $valor_hora * 1.5;

//valor que ganhei por fazer horas extras
$total_horas_extras = $horas_extras * $valor_hora_extra;

//calcular salario bruto sem desconto
$salario_bruto_sem_descontos= $salario_bruto + $total_horas_extras + $beneficio;

if($salario_bruto_sem_descontos >= 5000){
    $imposto = $salario_bruto_sem_descontos * 10 / 100; 
}elseif($salario_bruto_sem_descontos >= 3000){
    $imposto = $salario_bruto_sem_descontos * 5 / 100;
}else{
    $imposto = 0;
}

$salario_liqido = $salario_bruto_sem_descontos - $imposto;

if($salario_liqido > 4000){
    $remuneracao = "Bem remunerado";
}else{
    $remuneracao = "Médio";
}

// mesma logica do if acima 
// $remuneracao = ($salario_liqido > 4000) ? "Bem remunerado" : "Médio";

echo "Nome: " . $nome . "<br>";
echo "Salário bruto:" . $salario_bruto . "<br>";
echo "Horas extras:" . $horas_extras . "<br>";
echo "Benefícios:" . $beneficio . "<br>";
echo "Desconto:" . $desconto . "<br>";
?>