<?php
$nome = $_POST['nome'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$calculo_imc = ($altura * $altura) / $peso;

require_once "View_relatorio.php";
?>