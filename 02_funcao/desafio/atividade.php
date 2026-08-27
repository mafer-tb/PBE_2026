<?php
require_once "funcao.php";

$resuldado = calcularPedido("Celular", 6000, 2, 10, 20);
echo "Nome:". $resuldado ["nomeProduto"] . "<br>";
echo "Subtotal:". $resuldado ["subtotal"] . "<br>";
echo "Desconto:". $resuldado ["valorDesconto"] . "<br>";
echo "Imposto:". $resuldado ["valorImposto"] . "<br>";
echo "Total:". $resuldado ["totalFinal"] . "<br>";

$totalcomFrete = calcularFrete($resuldado['totalFinal']);
echo "Total com frete:". $totalcomFrete;

?>
