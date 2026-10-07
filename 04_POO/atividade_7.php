<?php
class ContaBancaria {
    public $titular;
    public $saldo;

    public function __construct($titular,$saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        $this->saldo = $this->saldo + $valor;
        echo "O saldo aumentou para $this->saldo";
    }

    public function sacar($valor){
        $this->saldo = $this->saldo - $valor;
        echo "O saldo resultou em $this->saldo <";
    }

    public function exibirSaldo(){
        echo "Titular da conta $this->titular <br>";
        echo "Saldo de $this->saldo <br>";
    }

}

$contaBancaria = new ContaBancaria("Mafer", 1000);
$contaBancaria->depositar(300);
$contaBancaria->sacar(100);
$contaBancaria->exibirSaldo();

?>