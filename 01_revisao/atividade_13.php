<?php
$arr = [
    "NOME" => "Maria Fernanda Troiani Biscaino",
    "CPF"=> 48325275847,
    "TELEFONE" => 19989619077,
    "ENDEREÇO" => "Rua Alberto Pinto 181"
];

echo "<pre>";
print_r($arr);
echo"</pre>";

foreach($arr as $posicao => $valor){
    echo "posição <strong> ". $posicao . "</strong Texto strong> " . $valor . "</strong>";
    echo "</br>";
}
?>