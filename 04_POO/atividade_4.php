<?php
class Pedido{
    public $numero;
    public $cliente;
    public $valor;
    public $status;

    function adicionar($valor){
        if($this->status == "Aguardando"){
        $this->valor = $this->valor + $valor;
        }else{
            echo"Não podemos adicionar itens. O pedido está $this->status <br>";
        }
    }

    function cancelar(){
        $this->status = "cancelado";
        echo"Status alterado para $this->status <br>";
    }

    function finalizar(){
        $this->status = "Finalizar";
        echo"Status alterado para $this->status <br>";
    }

    function exibirResumo(){
        echo"Número $this->numero <br>";
        echo"Cliente $this->cliente <br>";
        echo"Valor $this->valor <br>";
        echo"Status $this->status <br>";
    }
}

$pedido1 = new pedido();

$pedido1->numero = 100;
$pedido1->cliente = "Maria";
$pedido1->valor = 0;
$pedido1->status = "Aguardando";

$pedido1->exibirResumo();
$pedido1->adicionar(50);
$pedido1->adicionar(30);
$pedido1->exibirResumo();
$pedido1->finalizar();
$pedido1->exibirResumo();
$pedido1->adicionar(20);

echo "<hr>";


$pedido2 = new pedido();

$pedido2->numero = 101;
$pedido2->cliente = "Laura";
$pedido2->valor = 0;
$pedido2->status = "Aguardando";

$pedido2->exibirResumo();
$pedido2->adicionar(100);
$pedido2->adicionar(75);
$pedido2->exibirResumo();
$pedido2->finalizar();
$pedido2->exibirResumo();
$pedido2->adicionar(50);

echo "<hr>";

?>