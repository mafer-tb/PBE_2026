<?php
$numeros = [10,100,250,360,500,23,56,85,752,201];
$maior = $numeros[0];

foreach ($numeros as $numero){
    if ($numero > $maior){
        $maior = $numero;
    } 

   }  
    echo "número:$maior"; 
?>

