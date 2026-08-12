<?php
$idades = [12,15,20,26,18,7,60,35];
$soma = 0;
$maior = 0;

foreach ($idades as $idade){
    $soma = $soma + $idade;
    
    if ($idade > 18){
        $maior = $maior + 1;
    }
}
$media = $soma/count($idades);

echo "A média é :". $media;

echo "A maior idade é :". $maior;

?> 